<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from "@/Layouts/Default.vue";
import { useForm } from '@inertiajs/inertia-vue3'
    import JetButton from '@/Jetstream/Button.vue'
defineProps({
    countries: Array,
  
});
 
    const form = useForm({
        name: '',
        surname: '',
        email: '',
        

     
    })

 


    function submit() {
        form.post(route('mp.link',form), {
            onFinish: () => console.log('finish'),
        });
    //   Inertia.post('/users', form)
    }
    function submiat() {
      Inertia.post('/users', form)
    }
</script>

<template>
    <Head title="CONFERENCIA MUNDIAL DEL CLF 2022" /> 
    <app-layout>
        <section class="">
            <div class="overflow-hidden ">
                <img src="https://scontent.faep40-1.fna.fbcdn.net/v/t39.30808-6/321076563_1930925067251623_8651435648845091107_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeFT8c3w3SwYNVoZS5ynSioVitpT4b7ok2GK2lPhvuiTYfwoW6qVjtIqpzM9BMFQ8fcjCwtwuagOMuxnrlK_2ABu&_nc_ohc=otsDzzeH2wIAX9zK--A&_nc_ht=scontent.faep40-1.fna&oh=00_AfDYpTipjZubhOQ7efZ0Ut1TjXd8HrOrXQhQTCiJzUPcqQ&oe=63B429AB" alt="" class="w-full">
            </div>
        </section>
        <section class="">
            <div class="container py-20">
                <div class="row">
                    <div class="col-md-6">  
                        <p class="text-lg text-gray-600">
                            Dios quiere trabajar poderosamente por medio de los lideres cristianos,
                            como usted, para transformar vidas e impactar positivamente a sus comunidades.
                            <br> <br>
                            En la conferencia mundial del CLF alimenta la pasión que conduce el evangelismo efectivo, proveyendo de inspiración, educación,
                            y las conexiones que usted necesita para su ministerio.
                            <br> <br>
                            A través de inspiradoras conferencias, profundas sesiones, simposios temáticos, compartir con diferentes obreros del evangelio del mundo,
                            tendrá nuevas herramientas para transformar su ministerio.
                            <br> <br>

                            La sesión central presenta al orador principal, el Reverendo <span class="font-semibold">Ock Soo Park</span>, quien da ponencias que lo guiarán de la obra humana
                            hacia la obra de Dios.
                        </p>
                    </div>
                    <div class="col-md-6">  
                         <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FPS%20Park.jpg?alt=media&token=011bdfa7-ecab-422f-8788-9ad76d8efa45" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3">  
                    <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FAudiencia%20y%20Pastor%20Park.jpg?alt=media&token=fae61cb3-06f9-4486-b08a-201933e99a57" alt="" class="w-full col-span-2 h-full">
                    <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FCoro.jpg?alt=media&token=1fa8b507-3230-46da-8d1d-529e1fd227f5" alt="" class="img-fluid w-full">
                    <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FPs%20Park%20Escenario.jpg?alt=media&token=ec9f438c-5f5f-4868-b444-233b513e6b88" alt="" class="img-fluid w-full col-span-2">
                    <!-- <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2Fescuchando.jpg?alt=media&token=c873e0f9-7108-42c6-a9c4-b4476dba747f" alt="" class="img-fluid "> -->
                    <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FAcademia.jpg?alt=media&token=f45e4c1b-5d68-49d6-a481-b33dd8a49028" alt="" class="w-full h-full">
            </div>
        </section>
  

        <section class="bg-[#325153] py-20">
            <div class="container"> 
                <h2 class="font-bold text-white">PALABRAS DE BIENVENIDA</h2>
                <div class="row text-white">
                    <div class="col-md-4">
                        <img src="https://static.wixstatic.com/media/125365_1f3b0b0814384026b5f32340841bb889~mv2.png/v1/crop/x_161,y_0,w_499,h_643/fill/w_386,h_498,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/recommandation.png" alt="" class="img-fluid">
                        <p class="pl-20">
                            
                            Independientemente de las denominaciones o doctrinas, cuando descubrimos y unimos nuestros corazones con el corazón de Dios que está contenido solo en la Biblia, Dios obrará poderosamente en nuestros ministerios. Esta creencia es la fuerza impulsora del movimiento CLF. 
 
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://static.wixstatic.com/media/125365_1f3b0b0814384026b5f32340841bb889~mv2.png/v1/crop/x_664,y_0,w_499,h_643/fill/w_387,h_500,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/recommandation.png" alt="" class="img-fluid">
                        <p class="pl-20">
                            Quiero invitarte personalmente a la Fraternidad de Líderes Cristianos. Es un tiempo dinámico para ministros de muchas denominaciones de todo el mundo. Vienen con un propósito... recibir el corazón de Dios y sembrar ese corazón en otros. El compañerismo que ocurre aquí, la Palabra que sale... vas a ver a Dios moviéndose poderosamente en tu vida. 
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://static.wixstatic.com/media/125365_1f3b0b0814384026b5f32340841bb889~mv2.png/v1/crop/x_1174,y_0,w_499,h_643/fill/w_387,h_500,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/recommandation.png" alt="" class="img-fluid">
                        <p class="pl-20">
                            Quiero felicitar al CLF durante esta pandemia. No se achicaron. Siguieron avanzando en el evangelio, encontrando maneras de que la gente se reuniera globalmente para volver a las escrituras. Quiero animaros a todos a participar. La Conferencia Mundial CLF no es sólo para líderes y no es sólo para pastores; es para todos. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
 
    </app-layout>

</template>

<style  >
 
.style-chooser .vs__dropdown-toggle {
  padding: 0;
  background: white;
}
.style-chooser .vs__search {
  padding: 1rem;
  margin: 0;
}

 
</style>
