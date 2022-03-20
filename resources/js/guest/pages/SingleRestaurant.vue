§<template>
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
              <div v-show="dish.visible">
                <div>{{dish.name}}</div>
                <div class="menu-img">
                    <img :src="`/storage/${dish.image}`" alt="">
                </div>
                <div>
                  <span>
                    {{dish.price}} 
                  </span>
                  <div>
                    <button @click="addToCart(dish)" class="generalBtn btn--green">Aggiungi al carrello</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-4">
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

      addToCart(dish) {
        console.log(...new Set(this.carrello.map(dish => dish.risto_id)))
         let first_restaurant;

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

          //Setto una variabile che prenderà il risto ID del primo piatto inserito nel carrello
          first_restaurant = this.carrello.risto_id;
        } else{
          // Se il carrello non è vuoto controllo che il piatto non abbia lo stesso id
          let ids = this.carrello.map(dish => dish.id);
          // Se ha lo stesso id aumento la quantità ...
          if (ids.includes(newItem.id)) {
              this.carrello.forEach(element => {
                  if (element.id == newItem.id) {
                      element.quantity++;
                  }
              });
          } 
          // Altrimenti pusho il nuovo piatto
          else {
            // Sempre che l'id dei ristoranti coincida altrimento sollevo un eccezione
            newItem.risto_id == first_restaurant ? this.carrello.push(newItem) : alert
            ("Non puoi aggiungere piatti da un altro ristorante");
          }
        }
        localStorage.setItem("carrello", JSON.stringify(this.carrello));
      }
    },
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


.menu-img {
  img {
    width: 50%;
  }
}
</style>