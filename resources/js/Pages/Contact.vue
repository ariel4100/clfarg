<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Contacto" /> 
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-color">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2Fclf-logo.png?alt=media&token=9d10db21-8be7-423b-91e9-122563a6a8fa" alt="" class="img-fluid w-28">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link font-bold text-white" aria-current="page" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold text-white" aria-current="page" href="#">Conferencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold text-white" aria-current="page" href="#">Congresos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold text-white" aria-current="page" href="#">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold text-white" href="#">Contacto</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                  
                </ul> 
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        
            <div class="carousel-item active">
            <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FFONDO%20WEB%201280x720.jpg?alt=media&token=4d64cbba-cad8-4b93-beb3-e744079c138a" class="d-block w-100" alt="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="font-bold" >¡TE ESPERAMOS!</h2>
                <p>CONFERENCIA MUNDIAL DEL CLF 2022</p>
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
                    <div class="">
                        <a href="https://forms.gle/uRg4SZsNTgYbsN2j8" class="block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-white border-2 outline-white">Registrarte</a>
                        <a href="" class="block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-[#946100] bg-white mt-3">Mas información</a>
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
                    <a href="" class="bt bg-[#d8b257] text-white text-lg uppercase mt-3 inline-block">Sobre nosotros</a>
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
                        Haga clic a continuación para encontrar todas las conferencias de la Conferencia Mundial CLF 2020
                    </p>
                    <a href="" class="bt bg-[#d8b257] text-white text-lg uppercase mt-3 inline-block">Ver mas</a>
                </div>
            </div>
        
        </div>

    </div>
 
    <div class="my-20 bg-slate-800 bg-opacity-60 relative">
        <div class="absolute w-full h-full grid items-center">
            <div class="w-3/4 mx-auto text-white text-center">
                <h2 class="">Síguelos, porque ciertamente los alcanzarás,
                y de cierto librarás a todos los cautivos</h2>
                <p class="">1 Samuel 30:8</p>
            </div>
        </div>
        <img src="https://static.wixstatic.com/media/a37883_1b475bd65d8f449da3facd421784d49e~mv2.jpg/v1/fill/w_1920,h_597,al_c,q_85,enc_auto/a37883_1b475bd65d8f449da3facd421784d49e~mv2.jpg" alt="" class="img-fluid relative -z-10">
    </div>

    <div class="">
        <div class="container">
            <h2 class="font-bold ">CLF GLOBAL</h2>
        </div>
        <img src="https://secureservercdn.net/104.238.68.130/15u.1b1.myftpupload.com/wp-content/uploads/2021/11/Mapa-de-CLF112021_END.png" alt="" class="img-fluid">
    </div>
    <div class="container my-5 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald mb-0">ORADOR PRINCIPAL</h1>
        <h3 class="color-clf oswald">
            REV. OCK SOO PARK
        </h3>
        <div class="row mt-5 fz-18 wow fadeIn"  data-wow-delay="0.4s">
            <div class="col-md-3">
                <img src=" " class="img-fluid" alt="">
            </div>
            <div class="col-md-9 mt-4 mt-md-0 line-h">
                <ul>
                    <li>
                        Fundador de la Misión Buenas Nuevas: 760 iglesias activas en 80 países de los 6 continentes.
                    </li>
                    <li>
                        Pastor de Good News Gangnam Church
                    </li>
                    <li>
                        Fundador de la Fraternidad Internacional de Jóvenes: Educando y activando a la juventud en más de 80 países
                    </li>
                    <li>
                        Autor más vendido con 70 publicaciones del evangelio y el autodesarrollo que han transformado vidas
                    </li>
                    <li>
                        Innovador educativo pionero de la "educación del intelecto patenta para escuelas, empresas e iglesias."
                    </li>
                    <li>
                        Consejero espiritual de jefes de estado en América del Sur, África, Asia y el Pacífico Sur.
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="container my-5 fz-18 py-5 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald mb-0">ETERNA REDENCIÓN</h1>
        <h3 class="color-clf oswald">
            PASTOR JOSEPH PARK
        </h3>
        <div class="row mt-5 wow fadeIn"  data-wow-delay="0.4s">
            <div class="col-md-9 line-h">
                <p class="line-h">
                    Una explicación sistemática de cómo un alma se salva de la destrucción eterna a la vida eterna. Afirmar o reafirmar el evangelio del perdón de los pecados a través de un estudio bíblico profundo y sistemático ofrecido cada mañana.
                </p>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <img src="/uploads/image/yosep.webp" class="img-fluid" alt="">
            </div>
        </div>

    </div>
  
    <div class="container mt-5 pt-4 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald text-center">CLF GLOBAL</h1>

        <div class="row">
            <div class="col-md-12">
                <img src="/uploads/image/map_clf.webp" class="img-fluid" alt="">
            </div>
        </div>

    </div>



    <div class="container mt-5 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald font-weight-bolt mb-5 text-center">TESTIMONIOS</h1>

        <div class="">
 
            <div class="row autoplay">
              
                <div class="col-md-4">
                    <img src="/uploads/image/1.webp" class="img-fluid" alt="">
                </div>
        
            </div>

        </div>

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small pt-5 mt-5 wow fadeIn"  data-wow-delay="0.2s" style="background-color: #111111">

        <!-- Footer Elements -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">CLF ARGENTINA</h5>
                    <p>
                        Mediante la conferencia mundial del Congreso de Líderes Cristianos, usted será equipado de la palabra refrescándose espiritualmente y conectara profundamente con el corazón de Dios para traer un cambio poderoso a su ministerio.</p>

                </div>
                <div class="col-md-4">

                        <h5 class="text-uppercase font-weight-bold">CONTACTANOS</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Leopardi 47, Villa Luro, C.A.B.A</a>
                            </li>
                            <li>
                                <a href="#!">info@clfargentina.org</a>
                            </li>
                            <li>
                                <a href="#!">+54 11-5408-5660</a>
                            </li>
                            <li>
                                <a href="#!">+54 11-2637-6700</a>
                            </li>
                        </ul>

                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <!-- Social buttons -->
                    <ul class="list-unstyled list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/CLFArgentina/" target="_blank" class="btn-floating btn-fb mx-1">
                                <i class="fab fa-facebook-f"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/clf_argentina" target="_blank" class="btn-floating btn-tw mx-1">
                                <i class="fab fa-twitter"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/clf_argentina/" target="_blank" class="btn-floating mx-1" style="background-color: #c32aa3">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>


            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Copyright © 2020 CLF Argentina, todos los derechos reservados.

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- SCRIPTS -->
    <a href="https://wa.me/541159805967" target="_blank" class="btn p-0 rounded-pill  mb-3 d-flex justify-content-center align-items-center " style="z-index: 5; right: 10px; position: fixed; bottom: 0px; height: 50px; width: 50px; background-color: #25d366;">

        <i class="fab fa-whatsapp text-white fa-2x"></i>
    </a>


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
