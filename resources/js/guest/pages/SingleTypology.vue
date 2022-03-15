<template>
    <section>
        <CardUser :usersList="typology"/>
    </section>
</template>

<script>

import CardUser from "../components/commons/CardUser.vue";

export default {

    name: "SingleTypology",

    components : {
        CardUser
    },

    data() {
        return {
            typology: []
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