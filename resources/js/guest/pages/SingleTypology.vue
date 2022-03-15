<template>
  <div>
      <h1>prova</h1>
  </div>
</template>

<script>
export default {
    name: "SingleTypology",
    data() {
        return {
            typology: {}
        }
    },

    created() {
        axios.get(`/api/typologies/${this.$route.params.slug}`)
            .then((response) => {
                this.typology = response.data;
            });
            // .catch((error) => {
            //     this.$router.push({name: 'page-404'})
            // });
    }
}

</script>

<style>

</style>