<template>
      <div class="container-fluid mt-3">
        <vue-horizontal responsive class="mx-4">
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
    margin: 0 5px;
    
    img {
        width:100%;
    }
}
</style>