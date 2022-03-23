<template>
    <div>
        <h1>Pagamento avvenuto con successo</h1>
    </div>
</template>

<script>
export default {
    name : 'Success',
    data() {
        return {
            foods : [],
            restaurant : {}
        }
    },
    methods : {
        clearCart() {
            this.foods = JSON.parse(localStorage.getItem("foods"));
            this.restaurant = JSON.parse(localStorage.getItem("restaurant"));
            localStorage.removeItem("foods");
        },
        getTotal() {
            let total = 0;
            if (this.restaurant.shipping) {
                total += this.restaurant.shipping;
            }
            this.foods.forEach((food) => {
                total += food.price * food.quantity;
            });
            return total;
        }
    },
    created() {
        this.clearCart();
    }
}
</script>

<style lang="scss" scoped>
    .success_page {
        // height: calc(100vh - 80px);
        background-image: url('/storage/uploads/wave.svg');
        background-repeat: no-repeat;
        padding: 40px 0;
        
        .image_deliveboo {
            display: flex;
            align-items: center;
            justify-content: center;
            img {
                width: 85%;
            }
        }
        .summary_card {
            width: 100%;
            background-color: var(--white);
            border: 1px solid var(--dark-grey);
            border-radius: 10px;
            padding: 20px;
            .info-order {
                text-align: center;
            }
            .img_restaurant {
                width: 200px;
                margin: 10px auto;
                img {
                    width: 100%;
                }
            }
            ul {
                margin: 10px 0;
                li {
                    font-size: .9rem;
                }
            }
        }
        a {
            color: var(--white);
        }
    }
    @media screen and (min-width: 576px) {
        .success_page {
            .summary_card {
                display: flex;
                justify-content: space-around;
                align-items: center;
                .img_restaurant {
                    margin: 0;
                }
            }            
        }
    }
    @media screen and (min-width: 576px) {
        .my_container_fluid {
            min-height: calc(100vh - 80px);
        }
    }
</style>
