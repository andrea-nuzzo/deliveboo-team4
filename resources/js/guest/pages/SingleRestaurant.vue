<template>
  <div class="restaurant--container">
    <div class="row">
      <div class="img--restaurant col-xs-10 col-sm-6 col-lg-5">
        <img :src="`/storage/${restaurant.image}`" alt="">
      </div>
      <!-- inizio colonna di dx -->
      <div class="col-xs-12 col-sm-6 col-lg-7">
        <div>
          <h2>{{restaurant.name}}</h2>
        </div>
        <div class="d-flex align-items-center">
          <div v-for="(type, index) in restaurant.typologies" :key="index" class="d-flex align-items-center">
                  <span v-if="index > 0" class="puntino">   &#9679;   </span>
                  <span class="type--restaurant"> {{type.type}} </span>
          </div>
        </div>

        <!-- informazioni -->
        <div>
          <p>
            <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Informazioni: 
            </a>

          </p>
          <div class="collapse" id="collapseExample">
            <div class="pl-3">
              <div>indirizzo: {{restaurant.address}}</div>
              <div>{{restaurant.email}}</div>
              <div>{{restaurant.phone}}</div>
            </div>
          </div>
        </div>
        <!-- fine informazioni -->
      </div>
      <!-- fine colonna di dx -->
    </div>
    <div class="row piatti-carrello">
      <div class="col-8">
        <!-- inizio menu -->
        <h3>
          Menu
        </h3>
        <div class="row">
            <div v-for="dish in restaurant.dishes" :key="dish.id" class="col-sm-12 col-md-6">
              <div>{{dish.name}}</div>
              <div>
                  <img :src="`/storage/${dish.image}`" alt="">
              </div>
            </div>
        </div>
      </div>
      <div class="col-4">
        CARRELLO
      </div>


    </div>
  </div>
</template>

<script>
export default {
    name: 'SingleRestaurant',
    data() {
      return {
        restaurant: []
      }
    },

    created() {
      axios.get(`/api/users/${this.$route.params.slug}`)
            .then((response) => {
                this.restaurant = response.data;
            });
    }
}
</script>

<style lang='scss' scoped>
.restaurant--container {
  overflow-x: hidden;
}
.img--restaurant {
  img {
    width: 100%;
  }
}

.puntino {
  font-size: 7px;
}
.type--restaurant {
  text-transform: capitalize;
}

.piatti-carrello {
  border: 1px solid;
  .col-8, .col-4 {
    border: 1px solid;
  }
}
</style>