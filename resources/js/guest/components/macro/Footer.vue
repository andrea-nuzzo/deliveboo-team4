<template> 
    <footer class="footer">
        <div class="container-custom">
                <div class="grid-item">
                    <div class="bg--custom">
                        <h4>Scopri DeliveBoo</h4>
                        <ul>
                            <li>Investitori</li>
                            <li>Chi siamo</li>
                            <li>Ristoranti</li>
                            <li>Altro</li>
                            <li>Pressroom</li>
                            <li>Il nostro blog</li>
                            <li>Programazzione</li>
                            <li>Design</li>
                            <li>Lavora con noi</li>
                            <li>Diventa nostro partner</li>
                        </ul>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="bg--custom">
                        <h4>Note legali</h4>
                        <ul>
                            <li>Termini & Condizioni</li>
                            <li>Informativa sulla privacy</li>
                            <li>Cookies</li>
                        </ul>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="bg--custom">
                        <h4>Aiuto</h4>
                        <ul>
                            <li>Contatti</li>
                            <li>FAQ</li>
                            <li>Tipi cucina</li>
                        </ul>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="bg--custom d-flex flex-column align-items-center">
                        <h4>Porta DeliveBoo con te</h4>
                        <div class="img mt-3">
                            <img :src="`/storage/image/logo/ios.png`" class="w-100" alt="scarica su ios">
                        </div>
                        <div class="img">
                            <img :src="`/storage/image/logo/android.png`" class="w-100" alt="scarica su android">
                        </div>
                    </div>
                </div>
        </div>
        <div class="container--author">
                <div class="footer--author">
                    Made with by <a href="https://github.com/andrea-nuzzo">Andrea</a> <a href="https://github.com/Sergjio97">Sergio</a> <a href="https://github.com/Jurypassa">Jury</a> <a href="https://github.com/AnaisDiGenua">Anais</a> <a href="https://github.com/Papa97">Guido</a>
                </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer',

}
</script>

<style lang='scss' scoped>
.footer {
    .container-custom {
        max-width: 1074px;
        margin: 0 auto;
    }

    background-color: #2e3333;
    color: #fff;

    .grid-item {
        background-color: #434848;
        padding:10px;
        h4{
            margin-top: 10px;
        }
        .img {
            text-align: center;
            img{
                cursor: pointer;
            }
        }
        ul {
            padding: 0;

            li{
                cursor: pointer;
                list-style: none;
                font-size: 14px;
            }
            li:hover {
                color: #00ccbc;
            }
        }
    }
}

.bg--custom{
    h4{
        font-weight: 500;
    }
}
.container--author{
    width: 100%;
    max-width: 1074px;
    margin: 0 auto;
}

.footer--author{
    width: 100%;
    text-align: end;
    color: gray;
    & a {
         color: gray;
    }
}

@media (max-width: 640px) {
  .container-custom {
    display: grid; 
    grid-template-columns: 1fr;
    grid-template-rows: auto repeat(4, 1fr);
    gap:10px;
    padding:10px;
    height: 100%;
  }
}

@media (min-width: 641px) {
  .container-custom {
    display: grid; 
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows:  auto repeat(2, 1fr);
    gap:15px;
    padding:15px;

  }
}

@media (min-width: 768px) {
  .container-custom {
    display: grid; 
    gap:20px;
    padding:20px;
    grid-template-columns: repeat(4,1fr);
    grid-template-rows: 1fr; 
  }
}

// @media (min-width: 1024px) {
//   .container {
//     width: calc(100%  / 5 - 10px);
//   }
// }

// @media (min-width: 1280px) {
//   .container {
//     width: calc(100% / 6 - 10px);
//   }
// }

// @media (min-width: 1440px) {
//   .container {
//     width: calc(100% / 7 - 10px);
//   }
// }

// @media (min-width: 1600px) {
//   .container {
//     width: calc(100% / 8 - 10px);
//   }
// }
</style>