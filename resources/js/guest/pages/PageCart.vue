<template>
    <div>
        <!-- <form @submit.prevent="sendData()">
                <label for="name" class="col-md-4 col-form-label text-md-right"> Nome *</label>
                <div class="col-md-6">
                    <input id="name" v-model="userOrder.name" type="text" class="form-control" name="name" required maxlength="255" autocomplete="name" autofocus>
                </div>

                <button type="submit" class="btn btn--green">
                    Paga
                </button>
        </form> -->
         <form @submit.prevent="sendData()">
              <div>
                <input type="text" id="name" placeholder="Inserisci il nome" v-model="userOrder.name">
              </div>
               <div>
                <input type="text" id="lastName" placeholder="Inserisci il nome" v-model="userOrder.lastName">
              </div>
              <div>
                <input type="number" id="phone" placeholder="Inserisci il nome" v-model="userOrder.phone">
              </div>
              <div>
                <input type="text" id="address" placeholder="Inserisci il nome" v-model="userOrder.address">
              </div>
                <div>
                    <button type="submit">Paga</button>
                </div>
          </form>
        <!-- LastName
        Phone
        adress
        totalPrice -->
        <!-- <input type="hidden" value="{{this.totale}}" v-model="userOrder.totalPrice"> -->
        <div>TOTALE ORDINE € {{totalPrice()}}</div>
    </div>
</template>

<script>
export default {
    name: 'PageCart',

    data() {
      return {
        carrello: [],
        totale : 0,
        userOrder:{
            name: '',
            lastName: '',
            phone: '',
            address: '',
            totalPrice: null,
        },
      }
    },

    mounted() {
        if (localStorage.carrello) {
          this.carrello = JSON.parse(localStorage.getItem("carrello"));
        }
    },

    methods: {  
        totalPrice() {
            let total = 0;
            this.totale = total;
            this.carrello.forEach(item => {
                this.totale += item.quantity * item.price;
            });
            return this.totale;
        },

        sendData(){
            axios.post(`/api/order/sent`, this.userOrder , this.userOrder.totalPrice = this.totale)
            .then( (response) => {
                console.log(response)
            })
            .catch(function (error) {
                console.log(error);
            });
        },
    }
}
</script>

<style>

</style>