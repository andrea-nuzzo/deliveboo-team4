<template> 
    <header class="header pt-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home">
                <img src="https://drive.google.com/uc?export=view&id=1AFtmmqIiVfX-1hcAgdOBmpuRSNKD5cFv" alt="Logo-DeliveBoo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <form class="form-inline my-2 my-lg-0 mr-auto">
                    <input class="form-control mr-sm-2 paddingBtn" type="search" placeholder="Cerca Ristorante" aria-label="Search">
                    <button class="generalBtn btn--green mx-3 nav-link" type="submit">Cerca</button>
                </form>

                <button class="generalBtn btn--white d-flex align-items-center mx-3">
                    <i class="fa-solid fa-user-astronaut"></i>
                    <a class="nav-link" href="/login">Accedi</a>
                </button>

                <button class="generalBtn btn--white d-flex align-items-center">
                    <i class="fa-solid fa-user-plus"></i>
                    <a class="nav-link" href="/register">Registrati</a>
                </button>
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
</style>