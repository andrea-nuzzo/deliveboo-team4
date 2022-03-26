<template>
  <div>
    <div class="container my-5" v-if="carrello.length == 0">
      <div class="cart d-flex flex-column align-items-center">
        <i class="fa-solid fa-cart-shopping"></i>
        <div class="m-1">Il carrello &egrave; vuoto</div>
        <button type="button" class="generalBtn btn--disable mt-5 py-2 w-100" disabled>Vai al pagamento</button>
      </div>
    </div>

    <div class = "" v-else>
      <div class="cart">
        <div class="row"><div class="order">Il tuo ordine :</div></div>
        <div v-for="item in carrello" :key="item.id">
          <div class="row flex-column dish">
            <div class="name my-2">{{item.name}}</div>
            <div class="d-flex justify-content-between">
              <div class="d-flex"> 
                <div @click=" removeDish(item)">
                  <i class="fa-solid fa-circle-minus"></i>
                </div>
                <div class="mx-2">{{item.quantity}}</div>
                <div @click=" addDish(item)">
                  <i class="fa-solid fa-circle-plus"></i>
                </div>
              </div>
              <div class="mx-3 my-1">{{rounde(item.price, item.quantity)}} €</div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between align-items-center">
          <button @click=" removeCart()" type="" class="generalBtn btn--white my-3">Svuota carrello</button>
          <div><strong>Totale: </strong>{{totalPrice()}} €</div>
        </div>
        <div class="row justify-content-center ">
          <router-link :to="{ name: 'page-cart'}">
            <button type="button" class="generalBtn btn--green py-2 px-5 mt-5">Vai al pagamento</button>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: 'Cart',

    data (){
      return {
        priceDishes: 0,
      }
    },

    props : {
      carrello : Array,
    },

  methods: {

    rounde(numb, quantity){
       let total = numb * quantity;
        return total.toFixed(2)
    },

    totalPrice() {
      let total = 0;
      this.carrello.forEach(item => {
          total += item.quantity * item.price;
          total;
      });
      return total.toFixed(2);
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

.order {
  font-size: 1.3rem;
  text-transform: uppercase;
  color: #ababad;
}

.name{
  font-weight: 700;
  font-size: 17px;
}

.cart{
  padding: 60px;
  box-shadow: 0px 30px 40px -20px hsl(229, 6%, 66%);
  
  & i{
    font-size: 50px;
    color: #ababad;
  }

  & .btn--disable{
    color: #abadad;
    background-color: #e2e5e5;
  }

  & .row{
    & i{
      color: #00ccbc;
      font-size: 1.5rem;
      cursor: pointer;
    }
  } 
}

.dish{
  border-bottom: 1px solid #abadad;
}

</style>