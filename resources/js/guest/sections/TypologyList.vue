<template>
      <div class="container-fluid mt-3">
        <vue-horizontal>
            <div v-for="typology in listTypo" :key="typology.id" class="card--typo">
                <div>{{typology.type}}</div>
                <div class="containerImage">
                    <img :src="`/storage/${typology.image}`" alt="">
                </div>
            </div>
        </vue-horizontal>
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
    width: calc(100% / 6 - 10px);
    margin: 0 5px;
    
    img {
        width:100%;
    }
}
</style>