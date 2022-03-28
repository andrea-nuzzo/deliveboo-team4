
<template>
<div>
    <div class="background">
        <img class="backImage" :src="`/storage/image/notFound/background-7edaa013aceff22965bdb7fbf274b4a2.svg`" alt="NotFound-Image"/>
        <div class="center">
        <img :src="`/storage/image/notFound/roo-5c784b3ea96399e6269af8a11ec6349c.svg`" alt="NotFound-Image"/>
        </div>
    </div>
     <div class="container my-5 py-5 d-flex flex-column align-items-center">
        <h1>Pagina non trovata</h1>
        <h5 class="mt-3">Siamo spiacenti, ma la pagina che stai cercando non esiste.</h5>
        <h5>Se vuoi sapere perchè contatta<a href="https://www.instagram.com/samuelemadrigali/"> Samuele Madrigali</a></h5>
     </div>
    
 

</div>
</template>

<script>
export default {
    name: 'PageNotFound'
}
</script>

<style lang="scss" scoped> 
    .background{
        position: relative;
        
    }
    .backImage{
        width: 100%;
    }
    .center{
        position: absolute;
        bottom: -20%;
        right: 50%;
        transform: translate(50%);
    }
    
        
</style>