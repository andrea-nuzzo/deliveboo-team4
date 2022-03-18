<template>
    <div>
        <div>Questo e il carrello</div>
        <div>TOTALE ORDINE € {{totalPrice()}}</div>
    </div>
</template>

<script>
export default {
    name: 'PageCart',

    data() {
      return {
        carrello: [],
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
    }
}
</script>

<style>

</style>