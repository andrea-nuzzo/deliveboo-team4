<template>
  <div class=" container checkout-page">
    <div class="_my_container">
      <form v-if="!loading">
        <div class="wrapper">
          <div class="info">
            <div class="form-group">
              <label for="name">Inserisci Nome *</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                v-model="form.client.name"
                required
              />
            </div>

            <div class="form-group">
              <label for="cognome">Inserisci il cognome *</label>
              <input
                type="text"
                class="form-control"
                id="cognome"
                name="cognome"
                v-model="form.client.cognome"
                required
              />
            </div>
          </div>

          <div class="contacts">
            <div class="form-group">
              <label for="address">Indirizzo *</label>
              <input
                type="text"
                class="form-control"
                id="address"
                name="address"
                v-model="form.client.address"
                required
              />
            </div>
            <div class="form-group">
              <label for="telephone">Telefono *</label>
              <input
                type="text"
                class="form-control"
                id="telephone"
                name="telephone"
                v-model="form.client.telephone"
                required
              />
            </div>
          </div>
          <div class="form-group">
            <label for="email">Inserisci la mail *</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              v-model="form.client.email"
              required
            />
          </div>
        </div>

        <div class="cart-payment">
          <v-braintree
            v-if="loaded"
            locale="it_IT"
            :authorization="tokenGenerated"
            @success="onSuccess"
            @error="onError"
          >
          </v-braintree>

          <div v-else>
            <div class="lds-roller">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
      </form>
      <div v-else class="loading-payment" @click="beforeBuy()">
        <h4>Pagamento in corso...</h4>
        <div class="lds-circle"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: 'PageCart',

    data() {
      return {
        carrello: [],
        tokenGenerated: "",
        loaded: false,
        loading: null,
        form: {
            tokenClient: "",
            carrello: [],
            client: {
            name: "",
            cognome: "",
            email: "",
            address: "",
            telephone: "",
        },
      },
      }
    },

    mounted() {
        if (localStorage.carrello) {
          this.carrello = JSON.parse(localStorage.getItem("carrello"));
          this.carrello.forEach((element) => {
                this.form.carrello.push({
                    id: element.id,
                    quantity: element.quantity,
                });
            });
        }
        axios
        .get("/api/orders/generate")
        .then((response) => {
            this.tokenGenerated = response.data.token;
            this.loaded = true;
        })
        .catch(function (error) {
            console.log(error);
        });
    },

    methods: {

         redirect() {
            this.$router.push({
                name: "success",
            });
        },
        
         onSuccess(payload) {
            let nonce = payload.nonce;
            this.form.tokenClient = nonce;
            // Do something great with the nonce...+axios
            const self = this;
            this.loading = true;
            axios
                .post("/api/orders/make/payment", this.form)
                .then((response) => {
                console.log(response);
                self.clearCart();
                self.redirect();
                })
                .catch(function (error) {
                console.log(error);
                });
        },

        onError(error) {
            let message = error.message;
            // Whoops, an error has occured while trying to get the nonce
        },

        clearCart() {
        this.carrello = [];
        },
    }
}
</script>

<style>

</style>