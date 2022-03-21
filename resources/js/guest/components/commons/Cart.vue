<template>
  <div>
    <div class="container my-5" v-if="carrello.length == 0">
      <div class="cart d-flex flex-column align-items-center">
        <i class="fa-solid fa-cart-shopping"></i>
        <div class="m-1">Il carrello &egrave; vuoto</div>
        <button type="button" class="generalBtn btn--disable mt-5 py-2 w-100" disabled>Vai al pagamento</button>
      </div>
    </div>

    <div class = "container" v-else>
      <div class="cart">
        <div>Il tuo ordine</div>
        <div v-for="item in carrello" :key="item.id">
          <div class="row">
            <div class=" mx-3">{{item.name}}</div>
            <div @click=" removeDish(item)">
              <i class="fa-solid fa-circle-minus"></i>
            </div>
            <div class="mx-2">{{item.quantity}}</div>
            <div @click=" addDish(item)">
              <i class="fa-solid fa-circle-plus"></i>
            </div>
             <div class="mx-3">{{item.price * item.quantity}} €</div>
          </div>
        </div>
        <button @click=" removeCart()" type="button" class="generalBtn btn--white my-3">Svuota carrello</button>
        <div class="row">
         <span> Totale {{totalPrice()}} €</span>
          <router-link :to="{ name: 'page-cart'}">
            <button type="button" class="generalBtn btn--green mt-5 py-2 w-100">Vai al pagamento</button>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: 'Cart',

    props : {
      carrello : Array,
    },

  methods: {

    totalPrice() {
      let total = 0;
      this.carrello.forEach(item => {
          total += item.quantity * item.price;
      });
      return total;
    },

    addDish(dish) {
      dish.quantity++;
      localStorage.setItem("carrello", JSON.stringify(this.carrello));
    },

    removeDish(dish) {
      if(dish.quantity > 1 ){
        dish.quantity--;
        localStorage.setItem("carrello", JSON.stringify(this.carrello));
      }else if(dish.quantity == 1){
        this.carrello.splice(this.carrello.indexOf(dish), 1);
        localStorage.setItem("carrello", JSON.stringify(this.carrello));
      }
    },

    removeCart() {
     this.carrello.forEach(item => {
        this.carrello.splice(item);
        localStorage.setItem("carrello", JSON.stringify(this.carrello));
     });
    },
  }
}
</script>

<style lang="scss" scoped>

.cart{
  padding: 60px;
  box-shadow: 0px 30px 40px -20px hsl(229, 6%, 66%);
  
  & i{
    font-size: 50px;
    color: #ababad;
  }

  & div{
    color: #ababad;
  }

  & .btn--disable{
    color: #abadad;
    background-color: #e2e5e5;
  }

  & .row{
    & div {
      color: black;
    }

    & i{
      color: #00ccbc;
      font-size: 1rem;
      cursor: pointer;
    }
  } 
}



</style>