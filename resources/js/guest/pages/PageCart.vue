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
                    <button type="submit">Paga</button>
                </div>
          </form>
        <!-- LastName
        Phone
        adress
        totalPrice -->
        <div>TOTALE ORDINE € {{totalPrice()}}</div>
    </div>
</template>

<script>
export default {
    name: 'PageCart',

    data() {
      return {
        carrello: [],
        userOrder:{
            name: '',
            // lastName: '',
            // phone: '',
            // address: '',
            // totalPrice:'',
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
            this.carrello.forEach(item => {
                total += item.quantity * item.price;
            });
            return total;
        },

        sendData(){
            axios.post(`/api/order`, this.userOrder).then( (response) => {
                console.log(this.userOrder.name)
            })
        },
    }
}
</script>

<style>

</style>