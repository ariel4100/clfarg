<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/Default.vue'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Congreso de Lideres Cristianos CLF" /> 
    <app-layout>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
            
                <div class="carousel-item active">
                <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FBanner%20CLF%20Junio%20Facebok%20Nuevo.jpg?alt=media&token=504ffb5f-e93c-4060-bf10-5a3db7c617aa" class="d-block w-100" alt="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h1 class="font-bold" >¡TE ESPERAMOS!</h1>
                    <p class="text-2xl">CONFERENCIA MUNDIAL DEL CLF 2022</p> -->
                    <a href="/eventos" class="inline-block px-4 py-2 rounded-2xl text-2xl font-semibold text-center uppercase no-underline text-[#946100] bg-white mb-5">Ver más</a>

                </div>
                </div>
        
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section class="banner py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-white">
                            <h1 class="">
                                <span class="font-bold text-2xl block">
                                    EL GRAN <br> AVIVAMIENTO
                                </span>
                                <span class="font-extrabold text-6xl block bg-clip-text text-transparent bg-gradient-to-r from-[#5f3e00] to-[#1d1403]">
                                    LIBRANDO
                                </span>
                            </h1>
                            <p class="font-bold">
                                CONFERENCIA MUNDIAL DEL CLF 2022
                            </p>
                            <p class="font-bold text-4xl">
                                1 al 4 de Junio
                            </p>
                        </div>
                        <div class="">
                            <a href="https://forms.gle/uRg4SZsNTgYbsN2j8" target="_blank" class="block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-white border-2 outline-white">Registrarte</a>
                            <a href="/eventos" class="block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-[#946100] bg-white mt-3">Más información</a>
                        </div>
                    </div>
                    <div class="col-md-8 grid items-center">
                        <iframe width="100%" height="415" src="https://www.youtube-nocookie.com/embed/dAh-z9-4RCg?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <div class="">
                            <a href="https://forms.gle/uRg4SZsNTgYbsN2j8" class="block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-white border-2 outline-white">Registrarte</a>
                            <a href="" class="block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-[#946100] bg-white mt-3">Mas información</a>
                        </div> -->
                    </div>   
                </div>
            </div>
        </section>
    


        <div class="container mt-5">
            <h1 class="font-bold text-center ">¿Qué es CLF?</h1>
            <div class="row justify-center mt-5">
                <div class="col-md-8 flex items-center text-center">
                    <div class="">
                        <p class="text-lg">
                            El Congreso de Líderes Cristianos (CLF) es una reunión de líderes cristianos que va más allá de la doctrina y la denominación para volver a la Biblia. Implementar soluciones prácticas de ministerio y alentar el compañerismo arraigado en el evangelio.
                        </p>
                        <a href="/nosotros" class="bt bg-[#d8b257] text-white text-lg uppercase mt-3 inline-block">Sobre nosotros</a>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/dAh-z9-4RCg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> -->
            
            </div>
            <div class="row pt-20">
                <div class="col-md-6 mt-5">
                    <img src="https://static.wixstatic.com/media/48eca6_4de28841a7da4494b03485f2765297c3~mv2.jpg/v1/fill/w_827,h_583,al_c,lg_1,q_85,enc_auto/48eca6_4de28841a7da4494b03485f2765297c3~mv2.jpg" alt="" class="img-fluid rounded-lg">
                </div>
                <div class="col-md-6 flex items-center mt-5">
                    <div class="">
                        <h2 class="text-4xl font-bold uppercase">
                            Conferencia Mundial CLF EN LÍNEA
                        </h2>
                        <p class="">
                            Haga clic a continuación para encontrar todas las conferencias de la Conferencia Mundial CLF 2021
                        </p>
                        <a href="/conferencias" class="bt bg-[#d8b257] text-white text-lg uppercase mt-3 inline-block">Ver más</a>
                    </div>
                </div>
            
            </div>

        </div>
    
        <div class="my-20 bg-slate-800 bg-opacity-60 relative">
            <div class="absolute w-full h-full grid items-center">
                <div class="w-3/4 mx-auto text-white text-center text-sm md:text-2xl">
                    <p class="">Síguelos, porque ciertamente los alcanzarás,
                    y de cierto librarás a todos los cautivos</p>
                    <p class="">1 Samuel 30:8</p>
                </div>
            </div>
            <img src="https://static.wixstatic.com/media/a37883_1b475bd65d8f449da3facd421784d49e~mv2.jpg/v1/fill/w_1920,h_597,al_c,q_85,enc_auto/a37883_1b475bd65d8f449da3facd421784d49e~mv2.jpg" alt="" class="img-fluid relative -z-10">
        </div>

        <div class="">
            <div class="container">
                <h1 class="font-bold text-center ">CLF GLOBAL</h1>
            </div>
            <img src="https://secureservercdn.net/104.238.68.130/15u.1b1.myftpupload.com/wp-content/uploads/2021/11/Mapa-de-CLF112021_END.png" alt="" class="w-full bg-[#d0d7ee] md:p-24 p-0">
        </div>
        
 
    </app-layout>




</template>

<style scoped>
 .navbar-color{
    background: rgb(213,182,104);
    background: linear-gradient(270deg, rgba(213,182,104,1) 35%, rgba(121,108,84,1) 100%);
 }

 .banner{
    background: rgb(213,182,104);
    background: linear-gradient(25deg, rgba(213,182,104,1) 0%, rgba(128,83,1,1) 100%);
 }
</style>
