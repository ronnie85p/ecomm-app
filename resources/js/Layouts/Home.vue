<script setup>
import { Head } from '@inertiajs/vue3'
import Header from './Home/Header.vue'
import Footer from './Home/Footer.vue'

</script>

<template>
    <Head>
        <!-- <title>Home page</title> -->
    </Head>

    <main class="page">
        <header class="page-header mb-5">
            <slot name="header">
                <Header />
            </slot>
        </header>

        <section class="page-body">
            <div class="container">
                <slot />
            </div>
        </section>

        <footer class="page-footer">
            <slot name="footer">
                <Footer />
            </slot>
        </footer>
    </main>
</template>

<style>
.page-footer {
    background-color: #232323;
    color: white;
    padding: 50px 0 5px 0;
    font-weight: 200;
}

.page-footer a:hover {
    color: #dddddd;
    text-decoration: underline;
}

.page-footer a {
    color: #a5a5a5;
    text-decoration: none;
}
</style>