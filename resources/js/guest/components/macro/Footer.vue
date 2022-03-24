<template> 
    <footer class="footer">
        <div class="container">
            <div class="row py-4 justify-content-between">
                <div class="col-6 col-md-3">
                    <div class="bg--custom">
                        <h4>Scopri Deliveroo</h4>
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
                <div class="col-6 col-md-3">
                    <div class="bg--custom">
                        <h4>Note legali</h4>
                        <ul>
                            <li>Termini & Condizioni</li>
                            <li>Informativa sulla privacy</li>
                            <li>Cookies</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bg--custom">
                        <h4>Aiuto</h4>
                        <ul>
                            <li>Contatti</li>
                            <li>FAQ</li>
                            <li>Tipi cucina</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bg--custom">
                        <h4>Porta DeliveBoo con te</h4>
                        <div class="img">IOS</div>
                        <div class="img">Android</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between text-right">
                <div class="col"></div>
                <div class="col">
                    Made with ❤️ &nbsp by <a href="https://github.com/andrea-nuzzo">Andrea</a> <a href="https://github.com/Sergjio97">Sergio</a> <a href="https://github.com/Jurypassa">Jury</a> <a href="https://github.com/AnaisDiGenua">Anais</a> <a href="https://github.com/Papa97">Guido</a>
                </div>
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
    

    background-color: #2e3333;
    color: #fff;

    .col-6 {
        padding-top: 10px;
        margin-top: 5px;
        padding: 0;
        h4{
            text-align: center;
            margin-top: 10px;
        }
        .img {
            text-align: center;
        }
        ul {
            padding: 0;

            li{
                list-style: none;
                padding-left: 10px;
            }
        }
    }
}

.bg--custom {
    padding-top: 10px;
    padding-top: 10px;
    background-color: #434848;
    width: 95%;
    height: 100%;
    margin: 0 auto;
}
</style>