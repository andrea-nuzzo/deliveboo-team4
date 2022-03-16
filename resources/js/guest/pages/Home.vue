<template>
    <div>
        <TypologyList :listTypo="typologies"/>

        <div class="container-fluid mt-5">
            <CardUser :usersList="users"/>
        </div>
    </div>

    </div>
</template>

<script>
import TypologyList from '../sections/TypologyList.vue';
import CardUser from "../components/commons/CardUser.vue";

export default {
    name: 'Home',
    components: {
        TypologyList,
        CardUser,
    },
    data() {
        return {
            typologies: [],
            users: [],
        }
    },
    created() {
        axios.get(`/api/typologies`)
            .then((response) => {
                this.typologies = response.data;
            });
            // .catch((error) => {
            //     this.$router.push({name: 'page-404'})
            // });

        axios.get(`/api/users`)
            .then((response) => {
                this.users = response.data;
            })
            // .catch((error) => {
            //     this.$router.push({name: 'page-404'})
            // });
    }

}
</script>

<style>

</style>