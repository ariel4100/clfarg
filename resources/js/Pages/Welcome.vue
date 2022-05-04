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
    <Head title="Welcome" /> 
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-color">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://secureservercdn.net/104.238.68.130/15u.1b1.myftpupload.com/wp-content/uploads/2020/11/CLF-Logo-Blanco-2021-2.png?time=1651296918" alt="" class="img-fluid w-28">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active font-bold" aria-current="page" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                  
                </ul> 
            </div>
        </div>
    </nav>
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
        ></button>
        <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="1"
        aria-label="Slide 2"
        ></button>
        <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="2"
        aria-label="Slide 3"
        ></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100" alt="Sunset Over the City"/>
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="Canyon at Nigh"/>
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- Carousel wrapper -->

    <div class="container my-5 wow fadeIn"  data-wow-delay="0.2s">
        <h1 class="oswald font-weight-bolt mb-5 text-center">DIA NACIONAL DE ORACIÓN</h1>
        <p class="text-center">
            Muchas Gracias por Acompañarnos al 2do Día Nacional de Oración. <br>
            Evento en la que se reunieron muchos Líderes Cristianos de las diferentes Provincias de Nuestra Nación, para Orar en conjunto por este tiempo. Donde a pesar de cualquier denominación, Dios nos impulsa a reunirnos y con un mimo corazón poder cumplir con la gran comisión, de ser testigos de su obra.
        </p>
        <div class="">
   
            <div class="row autoplay">
            
                    <div class="col-md-4">
                        <img src=" " class="img-fluid" alt="">
                    </div>
                
            </div>

        </div>

    </div>


    <div class="container mt-5 wow fadeIn" data-wow-delay="0.2s">
        <h1 class="font-weight-bolt oswald text-center mb-5">¿ESTÁ LISTO PARA SU RETORNO?</h1>
        <div class="row">
            <div class="col-md-6 fz-18">
                <p class="line-h">
                    Creemos que Dios ha permanecido igual a lo largo de los desafíos, tribulaciones y dificultades que hemos enfrentado este año y todavía está expresando claramente su eterna voluntad a través de la Biblia. A pesar de la tristeza y el dolor, Dios sigue diciéndonos que “He aquí os digo: Alzad vuestros ojos y mirad los campos, porque ya están blancos para la siega”.(San Juan 4:35). Muchos pastores de todo el mundo han tenido un mismo sentir. Saben que a través de las grandes tormentas y dificultades se encuentra la oportunidad de llevar más almas al único salvador, Jesucristo. Sin embargo, se encuentran haciendo preguntas:
                </p>
            </div>
            <div class="col-md-6 fz-18">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tudoJ7IjrpI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-12 fz-18 mt-4">
                <p class="line-h">
                    "¿Seremos capaces de volver de esto?”,"¿Cómo podemos llegar a más almas que están desesperadas?", y "Nuestra iglesia necesita más líderes y trabajadores que se levanten en estos tiempos difíciles, pero ¿cómo sucederá esto?"

                </p>

                <br>
                <p class="line-h">
                    Ahí es donde el CLF da un paso. A través de la Fraternidad que compartiremos en nuestras conferencias y reuniones mundiales, creemos que Dios nos bendecirá con su sabiduría y su gracia para que prediquemos el evangelio de maneras más poderosas como nunca antes.

                </p>



                <br>
                <p class="line-h">
                    ¿Está listo para su retorno?
                </p>


            </div>
        </div>

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

<div class="" style="background-color: #111111">
    <div class="container py-5 wow fadeIn text-white"  data-wow-delay="0.2s">
        <h1 class="oswald   my-5 text-center">COMUNIÓN GRUPAL</h1>
        <h6 class="line-h fz-18 text-center wow fadeIn"  data-wow-delay="0.2s">
            En un entorno de grupo, identificar las causas de los problemas que se producen en la vida de creencia y en los ministerios. Compartiendo sus luchas y lluvia de ideas para soluciones juntos con la ayuda de un experimentado moderador de CLF.
        </h6>
        <div class="row mt-5">
            <div class="col-md-4 mt-4 wow fadeInUp"  data-wow-delay="0.1s">
                <img src="/uploads/image/clf-01.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 mt-4 wow fadeInUp"  data-wow-delay="0.2s">
                <img src="/uploads/image/clf-02.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 mt-4 wow fadeInUp"  data-wow-delay="0.3s">
                <img src="/uploads/image/clf-03.jpg" class="img-fluid" alt="">
            </div>
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
</style>
