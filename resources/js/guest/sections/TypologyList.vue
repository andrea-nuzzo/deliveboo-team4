<template>
      <div class="container-fluid mt-3">
        <vue-horizontal class="horizontal">
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
    width: calc(100%  / 3 - 10px);
    
    img {
        width:100%;
    }
}
@media (min-width: 640px) {
  .card--typo {
    width: calc(100%  / 3 - 10px);

  }
}

@media (min-width: 768px) {
  .card--typo {
    width: calc(100%  / 4 - 10px);
  }
}

@media (min-width: 1024px) {
  .card--typo {
    width: calc(100%  / 5 - 10px);
  }
}

@media (min-width: 1280px) {
  .card--typo {
    width: calc(100% / 6 - 10px);
  }
}

@media (min-width: 1440px) {
  .card--typo {
    width: calc(100% / 7 - 10px);
  }
}

@media (min-width: 1600px) {
  .card--typo {
    width: calc(100% / 8 - 10px);
  }
}


</style>