<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/Default.vue";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<template>
  <Head title="Acerca de CLF" />
  <app-layout>
    <section class="relative">
      <div class="absolute w-full h-full flex justify-center items-center">
        <div class="container">
          <h1 class="font-bold text-5xl text-center text-white">
            Acerca de CLF
          </h1>
        </div>
      </div>
      <img
        src="https://static.wixstatic.com/media/a37883_3bb2f620584a4d3daadff26cd5155d52~mv2.jpg/v1/fill/w_1607,h_531,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/a37883_3bb2f620584a4d3daadff26cd5155d52~mv2.jpg"
        alt=""
        class="img-fluid"
      />
    </section>

    <section class="py-20">
      <div class="container">
        <div class="flex flex-col items-center">
          <h1 class="font-bold text-3xl text-center uppercase">
            PREDICAR EL EVANGELIO DE CRISTO EN TODO EL MUNDO
          </h1>
          <p class="text-center lead text-gray-500 mt-3">
            La situación actual con el cristianismo moderno, dividido por
            doctrinas y denominaciones, exige desesperadamente pastores que
            practiquen un ministerio de verdadero arrepentimiento y fe. Es por
            eso por lo que el CLF se formó para unir y compartir compañerismo
            con líderes cristianos de todo el mundo más allá de las doctrinas y
            denominaciones bajo el lema, ‘Regresemos solo a la Biblia, corramos
            solo por fe’. Mas allá del idioma, la raza y la denominación, los
            pastores que se unen reciben nuevas fuerzas a medida que establecen
            la palabra de Dios para alinear sus intereses y trabajar
            poderosamente en la predicación del evangelio de Cristo en todo el
            mundo.
          </p>
        </div>
      </div>
    </section>
    <section class="py-20 bg-cyan-50">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-4">
            <h3 class="font-bold text-3xl text-center text-[#946100]">MISIÓN</h3>
            <p class="mt-2 text-lg text-gray-500">
              El Congreso de Líderes Cristianos (CLF) existe para poder brindar
              herramientas para poder fortalecer las iglesias, las comunidades y
              los países.
              <br />
              Las iglesias activas mejoran colectivamente sus comunidades y
              crean redes de seguridad para los jóvenes al proporcionar salidas
              seguras para el aprendizaje y la participación. <br />

              Cuando las organizaciones cristianas se conectan y descubren vías
              de colaboración, la evangelización se fortalece tanto a nivel
              local como a nivel global.
            </p>
          </div>
          <div class="col-md-6 mt-4">
            <h3 class="font-bold text-3xl text-center text-[#946100]">VISIÓN</h3>

            <p class="mt-2 text-lg text-gray-500 uppercase font-semibold">
              ¿Esta haciendo todo lo que puede con su ministerio?
            </p>
            <p class="text-lg text-gray-500">
              El CLF puede brindarle estrategias basadas en la Biblia para
              plantar, alimentar y hacer crecer las iglesias. Eventos regionales
              y nacionales que incluyen conferencias, grupos de becas y
              actividades multiculturales. <br />

              Módulos de capacitación en educación teológica y evangelización en
              línea acomodados a su horario. <br />

              Talleres que enriquecen los ministerios de su iglesia. <br />

              Trabajar en red con líderes de iglesias de todo el mundo.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="py-20">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mt-3">
            <img
              src="https://secureservercdn.net/104.238.68.130/15u.1b1.myftpupload.com/wp-content/uploads/2021/02/a37883_06fd85aaaae04943bc1f39f09533252c_mv2.jpg?time=1651663614"
              alt=""
              class="img-fluid"
            />
          </div>
          <div class="col-md-8 mt-3">
            <h4 class="font-semibold text-[#946100]">FUNDADOR </h4>
            <h2 class="font-bold text-2xl">PASTOR OCK SOO PARK</h2>
            <p class="">
              El pastor Ock Soo Park es el fundador del Congreso de Lideres
              Cristianos, una coalición cristiana que tiene como objetivo
              predicar el verdadero evangelio. Lleva a cabo sesiones de
              asesoramiento individual con numerosas personas que sufren y que
              enfrentan límites en su fe para llevarlas a adquirir nuevas
              fuerzas.
            </p>
            <ul class="list-disc">
              <li>Fundador del Congreso de Líderes Cristianos</li>
              <li class="font_8">Fundador de la Misión Buenas Nuevas</li>
              <li class="font_8">
                Fundador de Fraternidad Internacional de Jóvenes (IYF)
              </li>
              <li class="font_8">
                Doctor Honoris Causa en Educación de la Universidad Azteca de
                México
              </li>
              <li class="p1">
                Doctor Honoris Causa en Filosofía de la Universidad de Mongolia
              </li>
              <li class="font_8">
                <span class="color_31"
                  >Ponente principal del «Seminario Bíblico Online 2020», que se
                  transmitió a más de mil millones de personas en alrededor de
                  125 países a través de 655 emisoras en 26 idiomas.</span
                >
              </li>
              <li class="font_8">
                <span class="color_31"
                  >Publicación de 57 libros de ayuda Espiritual hasta el año
                  2020.</span
                >
              </li>
            </ul>
            <a href="https://ockspark.net" target="_blank" class="bt bg-[#946100] text-white py-2">
               <i class="fa-solid fa-arrow-up-right-from-square"></i>
                Website del pastor Ock Soo Park
            </a>
          </div>
        </div>
        <div class="row pt-20">
          
          <div class="col-md-9 order-md-1 order-2 mt-3">
            <h4 class="font-semibold text-[#946100] uppercase">Presidente del CLF a nivel Mundial</h4>
            <h2 class="font-bold text-2xl uppercase">Pastor Yeong Kook Park</h2>
            <p class="">
              América comenzó con el Evangelio. Los puritanos construían la Iglesia antes de construir sus propias casas, y las escuelas que establecieron educaron a sus hijos sobre cómo servir a Dios. A partir de finales del siglo XVIII, Estados Unidos de América, envió misioneros por todo el mundo para predicar el nombre de Jesucristo.
            </p>
            <p class="">
                Ahora, sin embargo, la doctrina y la denominación dividen al cristianismo e moderno a nivel mundial. Los creyentes prefieren recibir bendiciones para mejorar la calidad de sus propias vidas en lugar de sacrificarse por Dios o por los demás. Nuestras escuelas han prohibido hablar de Dios. Además, nuestros jóvenes dejan de asistir a la iglesia después de graduarse de la escuela secundaria y sufren debido a problemas como el abuso de drogas y el suicidio.
            </p>
            <p class="">
                Ahora es el momento de cambiar el liderazgo del cristianismo. Cuando los líderes cristianos se unen para enfocarse únicamente en la Biblia, dejando de lado tanto la denominación como la doctrina, entonces Dios obrará de maneras inimaginables y el mundo entero será renovado por la Palabra de Dios.
            </p>
            
          </div>
          <div class="col-md-3 order-md-2 order-1 mt-3">
            <img
              src="https://secureservercdn.net/104.238.68.130/15u.1b1.myftpupload.com/wp-content/uploads/2021/02/MBTC-yeongkookpark.jpg?time=1651663614"
              alt=""
              class="img-fluid"
            />
          </div>
        </div>
        <div class="row pt-20">
          <div class="col-md-4 mt-3">
            <img
              src="https://iyfargentina.org/storage/uploads/bloques/Pastor-Kim.png"
              alt=""
              class="img-fluid"
            />
          </div>
          <div class="col-md-8 mt-3">
            <h4 class="font-semibold text-[#946100] uppercase">Presidente del CLF Argentina </h4>
            <h2 class="font-bold text-2xl">PASTOR DO HYEON KIM</h2>
            <p class="">
              Nombre: Kim Do Hyeon <br>
              Ministro: Iglesia Misión Buenas Nuevas (Buenos Aires , Argentina)
            </p>
            <ul class="list-disc">
                <li>Presidente de CLF (Congreso de Líderes Cristianos en la Argentina)</li>
                <li>Director de IYF Argentina Unión Internacional de Jóvenes.</li>
                <li>Representante principal de las Iglesias de MBN Latinoamérica</li>
               
            </ul>
            
          </div>
        </div>
      </div>
    </section>
  </app-layout>
</template>

<style scoped>
.navbar-color {
  background: rgb(213, 182, 104);
  background: linear-gradient(
    270deg,
    rgba(213, 182, 104, 1) 35%,
    rgba(121, 108, 84, 1) 100%
  );
}

.banner {
  background: rgb(213, 182, 104);
  background: linear-gradient(
    25deg,
    rgba(213, 182, 104, 1) 0%,
    rgba(128, 83, 1, 1) 100%
  );
}
</style>
