<template>
  <div>
    <div v-for="item in carrello" :key="item.id">
      <div>
        <span>{{item.name}}</span>
        <span>{{item.quantity}}</span>
        <span> Totale piatto : €{{item.price * item.quantity}}</span>
      </div>
    </div>
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
  }

}
</script>

<style>

</style>