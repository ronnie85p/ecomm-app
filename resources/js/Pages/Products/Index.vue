<script setup>
import { computed } from 'vue'
import { useRoute, useRouter } from 'vue-router'
</script>

<template>
        <main class="page">

<header class="bg-white">
    <div class="px-3 text-bg-dark_ border-bottom_ mb-2 bg-dark" style="font-size: .9rem">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" style="font-size: .8rem">

        <ul class="flex-fill nav col-12 col-lg-auto my-2 justify-content-center_ my-md-0 text-small">
            <li>
            <a href="#" class="nav-link text-white px-0" style="font-size: .8rem">
                Адрес производства
            </a>
            </li>
            <li>
            <a href="#" class="nav-link text-white" style="font-size: .8rem">
                Доставка и Самовывоз
            </a>
            </li>
        </ul>
            <div class="font-end text-white">
                Заказать звонок
                <a href="" class="text-white" style="font-size: .8rem">
                    +7 (495) 668‑1069   
                </a>
                с 8:00 до 20:00
            </div>

        </div>
    </div>
    </div>
    <div class="px-3 py-3 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
        <div class="me-5">
            <a href="/" class="h1 d-flex align-items-center my-2 my-lg-0 me-lg-auto text-decoration-none">
                Lateres
                <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg> -->
            </a>
        </div>
        
        <div class="d-flex align-items-center d-none_">
            <button class="btn btn-danger rounded-end-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg> Каталог
            </button>

        </div>

        <form class="flex-fill col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto me-4 d-flex_" role="search">

        <input type="search" class="form-control rounded-start-0" placeholder="Search..." aria-label="Search" style="">
        </form>
        <div class="ms-4 mx-2">
            <a href="/" class="text-decoration-none text-muted">
                <div class="text-center">
                    <svg style="position: relative;
top: 5px;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                    </svg>
                </div>
                <span style="font-size: .8rem">Избранное</span>
            </a>
        </div>
        <div class="mx-3">
            <a href="/" class="text-decoration-none text-muted">
                <div class="text-center">
                    <svg style="position: relative;
top: 5px;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                </div>
                <span style="font-size: .8rem">Корзина</span>
            </a>
        </div>
        <!-- <div class="mx-3">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                </svg>
            </div>
            <span style="font-size: .9rem">Заказы</span>
        </div> -->
        <div class="mx-3">
            <a href="/" class="text-decoration-none text-muted">
                <div class="text-center">
                    <svg style="position: relative;
top: 5px;"  xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </div>
                <span style="font-size: .8rem">Профиль</span>
            </a>
        </div>
    </div>
    </div>
</header>

<div class="border-bottom py-4 bg-white d-none">
    <div class="container d-flex">

        <div class="dropdown me-2">
            <!-- <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg> Каталог
            </button> -->
        </div>

        <ul>
            <li>Бетонные блоки</li>
        </ul>

    </div>
</div>

<div class="page-header d-none">
    <div class="container">
        <span>h</span>
        <ul class="">
            <li>Contacts</li>
            <li>Login / Register</li>
        </ul>
    </div>
</div>

<header class="mb-4 d-none">
    <div class="container d-flex">
        <ul class="">
            <li>Services</li>
            <li>Products</li>
        </ul>

        <form class="flex-fill">
            <input class="form-control">
        </form>

        <ul class="">
            <li>Favorite</li>
            <li>Cart</li>
        </ul>
    </div>
</header>

<hr class="clearfix d-none"/>

<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <p>Category</p>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                    <li>Item 5</li>
                    <li>Item 6</li>
                    <li>Item 7</li>
                </ul>
            </div>

            <div class="col">

                <p>Category <span class="text-muted">23</span></p>

                <div class="row">
                    <div class="col-3 card mb-2 me-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img class="img-thumbnail" src="" height="50" width="100">
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 card mb-2 me-2">
                        <div class="card-body"></div>
                    </div>

                    <div class="col-3 card me-2">
                        <div class="card-body"></div>
                    </div>

                    <div class="col-3 card mb-2 me-2">
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="page-footer">
    <div class="container">

    </div>
</footer>
</main>
</template>

<style scoped>

</style>