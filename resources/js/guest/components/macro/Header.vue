<template> 
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home">
                <img src="https://drive.google.com/uc?export=view&id=1AFtmmqIiVfX-1hcAgdOBmpuRSNKD5cFv" alt="Logo-DeliveBoo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <form class="form-inline my-2 my-lg-0 mr-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cerca Ristorante" aria-label="Search">
                    <button class="btn btn--green my-2 my-sm-0" type="submit">Cerca</button>
                </form>

                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <button class="btn btn--white">
                            <a class="nav-link " href="/login"><i class="fa-solid fa-user-astronaut"></i> Log in</a>
                        </button>
                    </li>
                    <li class="nav-item ">
                        <button class="btn btn--white">
                            <a class="nav-link" href="/register"><i class="fa-solid fa-user-plus"></i> Registrati</a>
                        </button>
                    </li>
                </ul>
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