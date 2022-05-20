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
                <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FBanner%20CLF%20Junio%20Facebok%20Nuevo.jpg?alt=media&token=504ffb5f-e93c-4060-bf10-5a3db7c617aa" alt="" class="w-full">
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
        <section class="py-20 bg-[#f3e9dc]">
            <div class="container">
                <h2 class=" uppercase mb-4">
                    <span class="font-semibold">La fórmula del CLF para </span>
                    <span class="font-extrabold text-[#b87e29]">UN GRAN AVIVAMIENTO</span>
                </h2>
                <p class="text-lg text-gray-500">
                    En el Congreso de Líderes Cristianos (CLF), tiene tantas oportunidades durante todo el año para aprender cómo elevar su teología e involucrar a sus feligreses, jóvenes y mayores. 

                </p>
                <div class="row mt-5">
                    <div class="col-md-4 bg-[#fbc92a] p-5  text-center">
                        <h2 class="font-semibold">DESPIERTA EL ENTENDIMIENTO</h2>
                        <p class="text-lg text-gray-700">
                            Temas teólogicos basados en la Biblia y entrenamiento de evangelización

                        </p>

                    </div>
                    <div class="col-md-4 bg-[#b87e29] p-5 text-white text-center">
                        <h2 class="font-semibold">DESPIERTA EL MINISTERIO</h2>
                        <p class="text-lg text-white">
                            Estrategias basadas en la Biblia para plantar, alimentar y hacer crecer las iglesias

                        </p>

                    </div>
                    <div class="col-md-4 bg-[#86520f] p-5 text-white text-center">
                        <h2 class="font-semibold">DESPIERTA EL GRUPO JUVENIL</h2>
                        <p class="text-lg text-white">
                            Una "Educación del intelecto" inspirada en la Biblia que cultiva espiritualmente a los jovenes cristianos

                        </p>

                    </div>
                </div>
            </div>
        </section>
     
        <section class="">
            <div class="container py-20">
                <h2 class="font-bold mb-4">SIMPOSIOS Y DISCUSIONES GRUPALES</h2>
                <p class="text-lg text-gray-500">
                    Los pastores tienen la oportunidad de analizar la Biblia con otros pastores
                    y presentar sus propios conocimientos y perspectivas. Los participantes
                    comparten sus corazones y encuentran soluciones de la Biblia a los
                    problemas en sus vidas espirituales y ministerios con la ayuda de los
                    miembros de su grupo y líderes capacitados.

                </p>
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6 mt-3">
                        <div class="border-l-4 h-full pt-3 border-[#d1a34b] pl-3">
                            <h3 class="text-[#0e3f61] font-semibold">ARREPENTIMIENTO Y CONFESIÓN</h3>
                            <p class="">
                                Analizaremos en profundidad el arrepentimiento que la mayoría de las personas reconoce hoy, y lo compararemos con el verdadero significado de la confesión.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3">
                        <div class="border-l-4 h-full pt-3 border-[#d1a34b] pl-3">
                            <h3 class="text-[#0e3f61] font-semibold">JUSTIFICACIÓN Y SANTIFICACIÓN</h3>
                            <p class="">
                                Discutiremos sobre el papel de Jesús y nuestro papel en el proceso de justificación y santificación.
                            </p>
                        </div>    
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3">
                        <div class="border-l-4 h-full pt-3 border-[#d1a34b] pl-3">
                            <h3 class="text-[#0e3f61] font-semibold">FE Y PRÁCTICA</h3>
                            <p class="">
                                La gente pone gran esfuerzo en la fe para traer paz entre Dios y ellos, pero solo trae ciclos de fracaso en su vida espiritual.
                                Como resultado, caen en la desesperación. Analizaremos cómo interactúa realmente el mundo de nuestros corazones y ministerio.
                            </p>
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3">
                        <div class="border-l-4 h-full pt-3 border-[#d1a34b] pl-3">
                            <h3 class="text-[#0e3f61] font-semibold">VERDAD Y HEREJÍA</h3>
                            <p class="">
                                Las personas a menudo siguen sin rumbo sus propias preferencias y pensamientos, en lugar de buscar la verdad exacta. A través de la lente, esa es la Biblia, discutiremos con precisión la verdad y la herejía.
                            </p>
                        </div> 
                    </div>
               
                </div>
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
        <section class="py-20 bg-[#f2ece0]">
            <div class="container">
                <h2 class="mb-5">
                    <span class="font-bold text-[#b87e29]">CONFERENCIA MUNDIAL DEL CLF 2022 </span>
                    <!-- <span class="font-light">Info</span> -->
                </h2>
                

                <div class="row">
                    <div class="col-md-6">  
                        <div class="text-2xl">
                    <p class="font-bold ">
                        <span class=" first-letter: font-bold">FECHA:</span>
                    </p>
                    <p class="font-semibold ">
                        <span class=" ">1 (Mie) al 4 (Sáb) de Junio</span>
                    </p>

                    <p class="  font-bold">
                        CUOTA DEL EVENTO:
                    </p>
                    <p class="">
                        <span class="">Sin alojamiento:</span>
                        <span class="font-bold"> $10.000</span>
                        <span class="text-sm block">(Entrada del evento + comida + transporte) </span>

                    </p>
                    <!-- <p class="">
                        <span class="">Con alojamiento:</span>
                        <span class="font-bold"> $26.000</span>
                        <span class="text-sm block">(Entrada del evento + comida + transporte + en 1 habitación para 4 personas por 4 noches)</span>
                    </p> -->
                    <p class="">
                        <span class="">Con alojamiento:</span>
                        <span class="font-bold"> $22.000</span>
                        <span class="text-sm block">(Entrada del evento + comida + transporte + en 1 habitación para 3 personas por 4 noches)</span>
                    </p>
                    <p class="">
                        <span class="">Alojamiento Matrimonial:</span>
                        <span class="font-bold"> $24.000</span>
                        <span class="text-sm block">(Entrada del evento + comida + transporte + en 1 habitación matrimonial por 4 noches)</span>

                    </p>
                </div>
                    </div>
                    <div class="col-md-6"> 
                        <!-- <form @submit.prevent="submit" class="grid grid-cols-2 gap-3 mt-10 text-left ">
                            <div class="mb-2">
                                <label for="name">Nombre completo</label>
                                <input v-model="form.name" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="name"> 
                            </div>
                            <div class="mb-2">
                                <label for="surname">Apellidos</label>
                                <input v-model="form.surname" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="surname">
                            </div>
                            
                            <div class="mb-2">
                                <label for="surname">DNI</label>
                                <input v-model="form.dni" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="surname">
                            </div>
                            <div class="mb-2">
                                <label for="">Género</label>
                                <select v-model="form.genre" class="w-full p-3 border rounded">
                                    <option value="M">Hombre</option>
                                    <option value="F">Mujer</option>
                                </select>
                            </div>
                            <div class="col-span-2 ">
                                <div class="flex ">
                                    <div class="mb-2 w-20">
                                        <label for="Edad">Edad</label>
                                        <input v-model="form.age" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="edad">
                                    </div>
                                    <div class="mb-2 flex-1 pl-3">
                                        <label for="Nacionalidad">Nacionalidad</label>
                                        <v-select v-model="form.nationality" :options="countries" label="name" class="style-chooser"></v-select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-2 col-span-2">
                                <label for="">Correo electrónico</label>
                                <input v-model="form.email" class="w-full p-3 border rounded" type="email" placeholder="" required>
                            </div>
                            <div class="mb-2">
                                <label for="phone">Teléfono local</label>
                                <input v-model="form.phone" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="phone">
                            </div>
                            <div class="mb-2">
                                <label for="phone">Celular</label>
                                <small class=" pl-2 text-xs text-gray-500">(Vinculado con WhatsApp)</small>
                                <input v-model="form.wp" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="wp">
                            </div>
                            <div class="mb-2">
                                <label for="phone">Nombre de Iglesia</label>
                                <input v-model="form.churk" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="churk">
                            </div>
                            <div class="mb-2">
                                <label for="phone">Cargo</label>
                                <select v-model="form.genre" class="w-full p-3 border rounded">
                                    <option value="Pastor">Pastor</option>
                                    <option value="Pastora">Pastora</option>
                                    <option value="Presidente de Alianza o Denominación">Presidente de Alianza o Denominación</option>
                                    <option value="Pastora (Esposa del Presidente de Alianza)">Pastora (Esposa del Presidente de Alianza)</option>
                                    <option value="Directivo de Alianza">Directivo de Alianza</option>
                                    <option value="Lider">Lider</option>
                                    <option value="Funcionario">Funcionario</option>
                                    <option value="Hermano(a)">Hermano(a)</option>
                                </select>
                            </div>
                            
                            <div class="mb-2 col-span-2">
                                <label for="phone">Dirección de Iglesia</label>
                                <input v-model="form.address" class="w-full p-3 border rounded" type="text" placeholder="" required autofocus autocomplete="address">
                            </div>
                            
                          
                            <div class="flex items-center justify-end mt-4 col-span-2">
                               

                                <jet-button class="ml-4 bg-black text-lg" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Registrar
                                </jet-button>
                            </div>
                        </form>  -->
                        <img src="https://static.wixstatic.com/media/a37883_0f3c6dc2ffcf4191a16f070b3d2b58fa~mv2.jpeg/v1/crop/x_0,y_560,w_6720,h_3448/fill/w_576,h_299,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/24.jpeg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="text-center pt-5">
                    <a href="/inscription"   class="inline-block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-white border-2 bg-base">REGISTRATE AHORA</a>
                    <!-- <a href="https://forms.gle/uRg4SZsNTgYbsN2j8" target="_blank" class="inline-block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-white border-2 bg-base">REGISTRATE AHORA</a> -->
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
