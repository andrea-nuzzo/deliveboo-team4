<template>
    <div>
        <TypologyList :listTypo="typologies"/>
        <div v-for="user in users" :key="user.id">
        <div>{{user.name}}</div>
        <div>
            <img :src="`storage/${user.image}`" alt="">
        </div>
    </div>

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