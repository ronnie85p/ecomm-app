<script setup>
import { onMounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import Logo from './Logo.vue'
import SearchForm from './Search.vue'

const items = [
    {
        text: 'Адрес производства',
        uri: '/'
    },
    {
        text: 'Доставка и Самовывоз',
        uri: '/'
    }
];

const links = [
    {

    }
];

const userItems = [
    {
        text: '',
        uri: '/profile/favorites',
        icon: `<svg style="
                position: relative; 
                top: 5px;" 
                xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
            </svg>`
    },
    {
        text: '',
        uri: '/cart',
        icon: `<svg style="position: relative;
                top: 5px;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg>`
    },
    {
        text: '',
        uri: '/profile',
        icon: `<svg style="position: relative;
                top: 5px;"  xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>`
    }
];

onMounted(function () {

    const target = document.getElementById('header');
    const offsetTop = target.offsetTop;
    const offsetLeft = target.offsetLeft;
    const offsetHeight = target.offsetHeight;
    const parentNode = target.parentNode;

    const setStyles = (offsetLeft, offsetHeight) => {
        target.style.left = offsetLeft ? offsetLeft + 'px' : '';
        parentNode.style.height = offsetHeight ? offsetHeight + 'px' : '';
    }

    window.addEventListener('scroll', (e) => {
        if (window.scrollY > offsetTop) {
            target.classList.add('sticky-header');
            setStyles(offsetLeft, offsetHeight);
        } else {
            target.classList.remove('sticky-header');
            setStyles('', '');
        }
    });

})
</script>

<template>

    <div class="wrapper bg-dark_"  style="font-size: .95rem">

        <div class="container bg-light">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="flex-fill nav col-12 col-lg-auto my-2 justify-content-center_ my-md-0 text-small">

                    <li v-for="item in items">
                        <Link :href="item.uri" class="nav-link me-4 px-0">
                            {{ item.text }}
                        </Link>
                    </li>
      
                </ul>
                
                <div class="font-end text-white_">
                    Заказать звонок
                    <a href="" style="font-size: .8rem">
                       
                    </a>
                    с 8:00 до 20:00
                </div>

            </div>
                        
        </div>
    </div>

    <div class="wrapper mb-2">
        <div class="container rounded d-flex flex-wrap justify-content-center align-items-center shadow-sm p-3 bg-white" id="header">

            <div class="me-5">
                <Logo text="Company" />
            </div>
                            
            <div class="d-flex align-items-center">
                <Link href="/categories" class="btn btn-danger rounded-end-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list mb-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg> Каталог
                </Link>
            </div>

            <SearchForm />

            <div class="ms-4 d-flex">
                <div v-for="item in userItems" class="mx-4 mb-3">
                    <Link :href="item.uri" class="text-decoration-none text-muted">
                        <div class="text-center" v-html="item.icon"></div>
                        <span style="">{{ item.text }}</span>
                    </Link>
                </div> 
            </div>           

        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <nav class="nav">
                <a class="nav-link" href="#">Бетонные блоки</a>
                <a class="nav-link" href="#">Вибропрессованный кирпич</a>
                <a class="nav-link" href="#">Брусчатка</a>
                <a class="nav-link" href="#">Цемент в мешках</a>
                <a class="nav-link" href="#">Инертные материалы</a>
                <a class="nav-link" href="#">Бардюр садовый</a>
                <a class="nav-link text-danger" href="#">Новинки</a>
            </nav>
        </div>
    </div>
</template>

<style scoped>
.sticky-header {
    top: 0;
    position: fixed;
    z-index: 1234
}
</style>