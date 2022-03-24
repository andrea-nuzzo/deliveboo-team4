<template>
  <div class="restaurant--container">

    <div class="row mb-3">

      <div class="img--restaurant col-xs-10 col-sm-6 col-lg-5 py-3 pl-5">
        <img :src="`/storage/${restaurant.image}`" alt="">
      </div>
      <!-- inizio colonna di dx -->
      <div class="col-xs-12 col-sm-6 col-lg-7 py-3 px-5 ">

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
        <div class="information my-3">
          <div><i class="fa-solid fa-phone mr-2"></i>{{restaurant.phone}}</div>
          <div><i class="fa-solid fa-map-location-dot mr-2 my-2"></i>{{restaurant.address}}</div>
          <div><i class="fa-solid fa-envelope mr-2"></i>{{restaurant.email}}</div>
        </div>
        <!-- fine informazioni -->

      </div>
      <!-- fine colonna di dx -->
    </div>

    <div class="row d-flex justify-content-around mx-2">

      <div class="col-sm-12 col-md-8">
        <!-- inizio menu -->
        <div v-for="dish in restaurant.dishes" :key="dish.id" class="col-sm-12 col-md-6">

          <div v-show="dish.visible">

            <div class="card-dish mb-3">

              <div class="row no-gutters d-flex align-items-center">

                <div class="col-md-7">

                  <div class="card-body">
                    <h5 class="card-title">{{dish.name}}</h5>
                    <p class="card-text">{{dish.ingredients}}</p>
                    <p class="card-text"><small class="text-muted">€ {{dish.price}}</small></p> 
                    <button class="generalBtn btn--green" @click="addToCart(dish)">Aggiungi al carrello</button>        
                  </div> 

                </div>

                <div class="col-sm-8 col-md-4 my-3">
                  <img class="rounded-circle dish-menu" :src="`/storage/${dish.image}`" alt="">
                </div>

                <!-- <div class="col-md-4 mx-3 my-3">
                  <button class="generalBtn btn--green" @click="addToCart(dish)">Aggiungi al carrello</button>
                </div> -->
                
              </div>

            </div>

          </div>

        </div>

      </div>
      <!-- carrello -->
      <div class="col-md-4">
        <Cart :carrello="carrello"/>
      </div>

    </div>

  </div>
</template>

<script>
import Cart from '../components/commons/Cart.vue';
export default {
    name: 'SingleRestaurant',

    components: {
      Cart,
    },

    data() {
      return {
        restaurant: [],
        carrello: [],
      }
    },

    created() {
      axios.get(`/api/users/${this.$route.params.slug}`)
        .then((response) => {
            this.restaurant = response.data;
        });
    },

    mounted() {
      if (localStorage.carrello) {
          this.carrello = JSON.parse(localStorage.getItem("carrello"));
        }
    },

    methods: {

      showAlertDanger() {
      this.$swal({
        background: '#fff',
        icon: 'error',
        title: 'Attenzione',
        text: 'Non puoi aggiungere piatti da un altro Ristorante',
      })
    },

      addToCart(dish) {


        let newItem = {
            risto_id: dish.user_id,
            id: dish.id,
            name: dish.name,
            price: dish.price,
            quantity: 1
        };

       

        // Se il carrello è vuoto aggiungo il piatto
        if(this.carrello.length == 0){
          this.carrello.push(newItem);
        } else{

          let firstDishCart = [
            ...new Set(this.carrello.map(dish => dish.risto_id))
          ];

          firstDishCart = firstDishCart[0]; 

          // Se il carrello non è vuoto controllo che il piatto non abbia lo stesso id
          let sameDishId = this.carrello.map(dish => dish.id);
          // Se ha lo stesso id aumento la quantità ...
          if (sameDishId.includes(newItem.id)) {
              this.carrello.forEach(element => {
                  if (element.id == newItem.id) {
                      element.quantity++;
                  }
              });
          } 

          // Altrimenti pusho il nuovo piatto
          else{
            // Sempre che l'id dei ristoranti coincida altrimento sollevo un eccezione
            firstDishCart == newItem.risto_id  ? this.carrello.push(newItem) : 
            this.$swal({
              background: '#fff',
              icon: 'error',
              title: 'Attenzione',
              confirmButtonColor: '#00ccbc',
              text: 'Non puoi aggiungere piatti da un altro Ristorante',
            })
          }
        }
        localStorage.setItem("carrello", JSON.stringify(this.carrello));
      }
    },
}
</script>

<style lang='scss' scoped>
  @import '~sweetalert2/src/variables';
  @import '~sweetalert2/src/sweetalert2';
.restaurant--container {
  overflow-x: hidden;
}
.img--restaurant {
  img {
    width: 100%;
    border-radius: 1rem;
    box-shadow: 0px 30px 40px -20px hsl(229, 6%, 66%);
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
.information i {
  color: white;
  background-color: #00ccbc;
  padding: 5px;
  border-radius: 50%;
}

div.card-dish {
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.04);
  box-shadow: 0 1px 4px rgb(0 0 0 / 8%);
  transition: box-shadow 0.2s ease-in-out;

  &:hover {
      cursor: pointer;
      box-shadow: 0 22px 24px 0 rgb(0 0 0 / 8%);
  }
  .card-text{
    overflow: hidden;
  }
  img{
    height: 200px;
    width: inherit;
    object-fit: cover;
    object-position: bottom;
  }

}

.card-body {
  max-height: 100%;
}



</style>