<template>
  <div>
    <div v-for="item in carrello" :key="item.id">
      <div>
        <span>{{item.name}}</span>
        <span>{{item.quantity}}</span>
        <span> Totale piatto : €{{item.price * item.quantity}}</span>
        <button @click=" addDish(item)" class="generalBtn btn--green">+</button>
        <button @click=" removeDish(item)" class="generalBtn btn--green">-</button>
        
      </div>
    </div>
      <button @click=" removeCart()" class="generalBtn btn--white">Svuota carrello</button>
     <span> TOTALE ORDINE € {{totalPrice()}}</span>
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

<style>



</style>