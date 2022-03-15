<template>
  <div class="contenitore d-flex">
    


    <div v-for="typology in listTypo" :key="typology.id" class="card--typo">
        <div>{{typology.type}}</div>
        <div>
            <img :src="`storage/${typology.image}`" alt="">
        </div>
    </div>
    
  </div>
</template>

<script>
export default {
    name: 'TypologyList',
    props: {
        listTypo: Array
    }
}
</script>

<style lang='scss' scoped>

.card--typo{
    width: calc(100% / 10 - 10px);
    margin: 0 5px;
    img {
        width:100%;

    }
}
</style>