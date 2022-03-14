<template>
    <div>
        <TypologyList :listTypo="typologies"/>

    </div>
</template>

<script>
import TypologyList from '../sections/TypologyList.vue'
export default {
    name: 'Home',
    components: {
        TypologyList,
    },
    data() {
        return {
            typologies: [],
        }
    },
    created() {
        axios.get(`/api/typologies`)
            .then((response) => {
                this.typologies = response.data;
            })
            // .catch((error) => {
            //     this.$router.push({name: 'page-404'})
            // });
    }

}
</script>

<style>

</style>