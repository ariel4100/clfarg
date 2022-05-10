<template>
  <div>
 
    <!-- <Header></Header> -->
    <!-- <div class="bg-gradient-to-tl from-blue-700 to-sky-500 p-2 flex flex-wrap items-center justify-center sticky top-0 z-50">
        <p class="text-center font-semibold   text-base text-white mr-3">
            ¡Garantiza tu lugar en el Atomic English 100% online y Gratis!, ¡Inscribete ahora!
        </p>
        <vue-countdown :time="time" v-slot="{ days, hours, minutes, seconds }" class="text-sm text-gray-300 mr-3">
                <span class="font-bold text-yellow-200 text-base">{{ days }}</span> D |
                <span class="font-bold text-yellow-200 text-base">{{ hours }}</span> H |
                <span class="font-bold text-yellow-200 text-base">{{ minutes }}</span> M |
                <span class="font-bold text-yellow-200 text-base">{{ seconds }}</span> S
        </vue-countdown>
        <a href="/atomic-english" class="p-3   rounded-lg font-bold block text-white bg-gradient-to-r from-pink-600 to-purple-600 uppercase">
          <i class="fa-solid fa-star fa-lg"></i>
          ATOMIC ENGLISH
        </a>
    </div> -->
    <header class=" sticky top-0 z-50">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-color shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2Fclf-logo.png?alt=media&token=9d10db21-8be7-423b-91e9-122563a6a8fa" alt="" class="img-fluid w-28">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0"> 
                        <li class="nav-item">
                            <a class="nav-link font-bold hover:border-black border-b-2 border-b-transparent " :class="route().current('nosotros') ? 'border-dark ' : ''" aria-current="page" href="/nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold hover:border-black border-b-2 border-b-transparent " :class="route().current('eventos') ? 'border-dark' : ''" aria-current="page" href="/eventos">Evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold hover:border-black border-b-2 border-b-transparent " :class="route().current('conferencias') ? 'border-dark' : ''" aria-current="page" href="/conferencias">Conferencias</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link font-bold hover:border-black border-b-2 border-b-transparent " :class="route().current('testimonios') ? 'border-dark  ' : ''" aria-current="page" href="/testimonios">Testimonios</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link font-bold hover:border-black border-b-2 border-b-transparent " :class="route().current('contacto') ? 'border-dark  ' : ''" href="/">Contacto</a>
                        </li> -->
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
    </header>
    <main>
      <!-- <pre>

      {{ $page }}
      </pre> -->
      <slot></slot>
      <!-- <transition name="fade" mode="out-in">
        <router-view></router-view> 
      </transition> -->
        <!-- <router-view></router-view> --> 
    </main>

  <a href="https://wa.me/541132797885" class="whatsapp float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>

  <footer class="bg-[#322408] text-white p-5">
    <div class="container text-center mx-auto">
      <Link href="/">
        <img src="/uploads/ahwey w.png" alt="" class="mx-auto w-32  ">
      </Link>
       <div class=" ">
                             <!-- Facebook -->
                <a
                    class="btn btn-link btn-floating btn-lg text-white border m-1"
                    href="https://www.facebook.com/CLFArgentina/"
                    role="button"
                    target="_blank"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a
                    class="btn btn-link btn-floating btn-lg text-white border m-1"
                    href="https://mobile.twitter.com/clf_argentina"
                    role="button"
                    target="_blank"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-twitter"></i
                ></a>

              

                <!-- Instagram -->
                <a
                    class="btn btn-link btn-floating btn-lg text-white border m-1"
                    href="https://www.instagram.com/clf_argentina/?hl=es"
                    role="button"
                    target="_blank"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-instagram"></i
                ></a>
          
        </div>
    
      <div class="mt-4">
        <h6 class="text-center">
          Copyright © 2022. Todos los derechos reservados.
        </h6>
      </div>
    </div>
  </footer>
  </div>
</template>

<script>
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'

export default {
    components: {
      Head,
      Link,
      JetDropdown,
      JetDropdownLink,
    },
    data() {
      return {
           redes: [
            {
              name: 'Pagina de Facebook',
              icon: 'fab fa-facebook-square',
              url: 'Facebook',
            },
            {
              name: 'Instagram',
              icon: 'fab fa-instagram',
              url: 'Instagram',
            },
            {
              name: 'Youtube',
              icon: 'fab fa-youtube',
              url: 'Youtube',
            },
            {
              name: 'Tiktok',
              icon: 'fab fa-tiktok',
              url: 'Tiktok',
            },
            {
              name: 'Whatssap',
              icon: 'fab fa-whatsapp',
              url: 'Whatssap',
            },
          ],
          showMenu: 0,
          showLang: 0,
          navbarclass: 'navbar-transparent',
          time: 0,
      }
    },
    mounted() {
          const now = new Date();
          const evento  = new Date(2022,3,4,19,0,0);
          this.time = evento - now;
      // navbar scroll animation
      // console.log('acacaca',this.$page.url.includes('/'));
      this.navbarclass = 1;
      // if(['/'].includes(this.$page.url))
      // {
      //   window.addEventListener('scroll', () => {
      //     if (window.scrollY > 50) {
      //       this.navbarclass = 1;
      //     } else {
      //       this.navbarclass = this.showMenu ? 1 : 0;;
      //     }
      //   });
      // }else{
      //   this.navbarclass = 1;
      // }
    },
    methods: {
  	  toggleNavbar: function(){
          this.showMenu = !this.showMenu;
          this.navbarclass = this.showMenu ? 1 : 0;
      },
  	  toggleLang: function(){
          this.showLang = !this.showLang;
      
      }
  }
}
</script>
<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.35s ease;
}

.fade-enter-from,
.fade-leave-active {
  opacity: 0;
}

.dropdown .dropdown-menu {
  display: none;
}
.dropdown:hover .dropdown-menu {
  display: block;
}


.float{
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 90px;
    right: 20px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 40px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}
</style>
 