<template>
  <div class=" container checkout-page">
    <div class="_my_container">
      <form v-if="!loading"  @submit.prevent="beforeBuy()">
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
              <label for="lastName">Inserisci il cognome *</label>
              <input
                type="text"
                class="form-control"
                id="lastName"
                name="lastName"
                v-model="form.client.lastName"
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
              <label for="phone">Telefono *</label>
              <input
                type="text"
                class="form-control"
                id="phone"
                name="phone"
                v-model="form.client.phone"
                pattern="[0-9]+"
                maxlength="15"
                minlength="8"
                oninvalid="this.setCustomValidity('Il numero di telefono deve contenere solo numeri')"
                oninput="this.setCustomValidity('')"
              />
            </div>
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
            <template #button="slotProps">
              <div ref="paymentBtnRef" @click="slotProps.submit" />
            </template>
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
          <button class="btn btn--green">
            Procedi al pagamento
          </button>
        </div>
      </form>
      <div v-else class="loading-payment">
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
            dishes: [],
            client: {
            name: "",
            lastName: "",
            address: "",
            phone: "",
        },
      },

        validation: {
          name: {
            success: true,
            message: "",
          },
          lastName: {
            success: true,
            message: "",
          },
          address: {
            success: true,
            message: "",
          },
          phone: {
            success: true,
            message: "",
            
          },
      },
      }
    },

    mounted() {
        if (localStorage.carrello) {
          this.carrello = JSON.parse(localStorage.getItem("carrello"));
          this.carrello.forEach((element) => {
                this.form.dishes.push({
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

      beforeBuy() {
      //   this.validationFormJs();
      //   if (this.isValidate()) {
      this.$refs.paymentBtnRef.click();
      //   }
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

    //   validationFormJs() {
    //   // validazione nome
    //   if (this.form.client.name == "") {
    //     this.validation.name.success = false;
    //     this.validation.name.message = "Il nome non può essere vuoto";
    //   } else if (this.form.client.name.length > 100) {
    //     this.validation.name.success = false;
    //     this.validation.name.message =
    //       "Il nome non può superare i 100 caratteri";
    //   } else {
    //     this.validation.name.success = true;
    //     this.validation.name.message = "";
    //   }
    //   // validazione cognome
    //   if (this.form.client.cognome == "") {
    //     this.validation.cognome.success = false;
    //     this.validation.cognome.message = "Il cognome non può essere vuoto";
    //   } else if (this.form.client.cognome.length > 100) {
    //     this.validation.cognome.success = false;
    //     this.validation.cognome.message =
    //       "Il cognome non può superare i 100 caratteri";
    //   } else {
    //     this.validation.cognome.success = true;
    //     this.validation.cognome.message = "";
    //   }
    //   //validazione indirizzo
    //   if (this.form.client.address == "") {
    //     this.validation.address.success = false;
    //     this.validation.address.message = "L'indirizzo non può essere vuoto";
    //   } else if (this.form.client.address.length > 255) {
    //     this.validation.address.success = false;
    //     this.validation.address.message =
    //       "L'indirizzo non può superare i 255 caratteri";
    //   } else {
    //     this.validation.address.success = true;
    //     this.validation.address.message = "";
    //   }
    //   // validazione telefono
    //   if (this.form.client.telephone == "") {
    //     this.validation.telephone.success = false;
    //     this.validation.telephone.message = "Inserire il numero di telefono";
    //   } else if (isNaN(this.form.client.telephone)) {
    //     this.validation.telephone.success = false;
    //     this.validation.telephone.message =
    //       "Il telefono deve essere composto da numeri";
    //   } else if (
    //     this.form.client.telephone.length < 8 ||
    //     this.form.client.telephone.length > 11
    //   ) {
    //     this.validation.telephone.success = false;
    //     this.validation.telephone.message =
    //       "Il telefono deve essere compreso tra gli 8 e gli 11 caratteri";
    //   } else {
    //     this.validation.telephone.success = true;
    //     this.validation.telephone.message = "";
    //   }
    // },

    // isValidate() {
    //   for (const key in this.validation) {
    //     if (!this.validation[key].success) {
    //       return false;
    //     }
    //   }

    //   return true;
    // },

  }
}
</script>

<style>

</style>