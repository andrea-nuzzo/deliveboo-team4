<template> 
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img :src="`/storage/image/logo/LogoColored.png`" alt="Logo-DeliveBoo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                <div  class="mx-auto"></div>
                <div class="d-flex justify-content-end mt-2">
                    <button class="generalBtn btn--white d-flex align-items-center mx-3">
                        <i class="fa-solid fa-user-astronaut"></i>
                        <a class="nav-link" href="/login">Accedi</a>
                    </button>

                    <button class="generalBtn btn--white d-flex align-items-center">
                        <i class="fa-solid fa-user-plus"></i>
                        <a class="nav-link" href="/register">Registrati</a>
                    </button>

                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'Header',

}
</script>

<style lang='scss' scoped>
.btn {
    border: 1px solid;
    margin-left: 5px;
}

.header{
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 9999;
    background-color: var(--);
}

</style>