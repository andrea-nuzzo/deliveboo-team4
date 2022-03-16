<template>
  <div>
    <div v-for="item in carrello" :key="item.id">
      <div>
        <span>{{item.name}}</span>
        <span>{{item.quantity}}</span>
        <span> Totale : €{{item.price * item.quantity}}</span>
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

}
</script>

<style>

</style>