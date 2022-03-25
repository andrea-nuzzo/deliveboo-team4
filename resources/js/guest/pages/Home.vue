<template>
    <div>
         <div class="container-fluid mt-3">
            <vue-horizontal class="mx-4">
                <div v-for="(typology, index) in typologies" :key="typology.id" class="card--typo" >
                    <div class="containerImage p-1"  @click="filter(typology.id)">
                        <img :src="`/storage/${typology.image}`" alt="" :class="{ shadowBlur : active.includes(index)}" @click="activeTypology(index)">
                        <div class="typologyName">{{typology.type}}</div>
                    </div>
                </div>
            </vue-horizontal>
      </div>

        <div class="container-fluid mt-5">
            <CardUser :usersList="users"/> 
        </div>
    </div>
</template>

<script>
import CardUser from "../components/commons/CardUser.vue";

export default {
    name: 'Home',
    components: {
        CardUser,
    },

    data() {
        return {
            typologies: [],
            users: [],
            filterTypologies: [],
            active: [],
        }
    },

    created() {
        axios.get(`/api/typologies`)
            .then((response) => {
                this.typologies = response.data;
            });

        axios.get(`/api/users`)
            .then((response) => {
                this.users = response.data;
            })
    },

    methods: {

        activeTypology(index){
            if(!this.active.includes(index)){
                this.active.push(index);
            }else {
                this.active.splice(this.active.indexOf(index), 1);
            }
        },
        
        filter(id) {
    
            if(!this.filterTypologies.includes(id)){
                this.filterTypologies.push(id);
            }
            else {
                this.filterTypologies.splice(this.filterTypologies.indexOf(id), 1);
            }

            if(this.filterTypologies != 0){
                axios.get(`/api/typologies/` + this.filterTypologies)
                .then((response) => {
                    this.users = response.data;
                })
            }
            else {
                 axios.get(`/api/users`)
                .then((response) => {
                this.users = response.data;
                })
            }
        },
    }
}
</script>

<style lang='scss' scoped>

    .containerImage{
        position:relative;
    }
    .typologyName{
        position: absolute;
        bottom: 5px;
        text-transform: capitalize;
        font-weight: bold;
        margin-left: 10px;
        color: var(--white-color);
    }


    // CAROUSEL
    .card--typo{
        margin: 0 5px;
        width: calc(100%  / 2 - 10px);
        font-size: 10px ;
        cursor: pointer;
        //  border: 5px solid transparent;

        img {
            width:100%;
            border-radius: 5px;
        }

    }

    @media (min-width: 640px) {
    .card--typo {
        width: calc(100%  / 2 - 10px);
        font-size: 16px ;
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

    .shadowBlur{
        box-shadow: 0px 0px 3px 3px rgba(107, 111, 111, 0.803);
    }

</style>