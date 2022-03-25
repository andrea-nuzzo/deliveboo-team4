<template>
  <div>
    <div class="container-fluid">
      <div class="row">
        <div v-for="user in usersList" :key="user.id" class="col-xs-12 col-md-6 col-lg-3 cardUser p-3">   
            <div class="image">
              <router-link :to="{ name: 'single-restaurant', params: {slug: user.slug}}"> 
                <img :src="`/storage/${user.image}`" alt="Users-Image"/>
                <div class="RestaurantName px-2 py-1">
                  {{user.name}}
                </div>
              </router-link>
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {

  name: 'CardUser',

  props : {
    usersList : Array,
  },

}
</script>

<style lang="scss" scoped>

  .cardUser{    
    
    img{
       width: 100%;
       border-radius: 1rem;
       box-shadow: 0px 30px 40px -20px hsl(229, 6%, 66%);
    }
  }

  .image{
    position: relative;
    

  }
  .RestaurantName{
    position: absolute;
    left: 20px;
    bottom: 15px;

    background-color: #00ccbc;
    color: white;
    border-radius: .2rem;
  }

 .cardUser:hover{
  transform: scale(1.05);
  transition: 0.6s;
 }
</style>