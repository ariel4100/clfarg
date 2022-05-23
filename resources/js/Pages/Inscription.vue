<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from "@/Layouts/Default.vue";
import { useForm } from '@inertiajs/inertia-vue3'
    import JetButton from '@/Jetstream/Button.vue'
defineProps({
    countries: Array,
    provinces: Array,
  
});
 
    const form = useForm({
        name: '',
        surname: '',
        email: '',
        dni: '',
        nationality: '',
        genre: '',
        age: '',
        churk: '',
        phone: '',
        wp: '',
        address: '',
        cargo: '',
        option: '10000',
        payment: 'efectivo',
        

     
    })



 


    function submit() {
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })
        console.log(form)
        if(form.age < 18){

        console.log('aca')

            Toast.fire({
                icon: 'info',
                title: 'La edad tiene que ser mayor a 17 años'
            })

            return false
        }

        // axios.post(route('email', { email: form.email})).then(response => {
        //     console.log(response )
             
       
        // })

        Swal.fire({
            title: '¿Está seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, continuar!'
            }).then((result) => {
            if (result.isConfirmed) {
               Swal.fire({
                    title: 'Procesando...',
                    html: '<div class="p-3">'+
                        '<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="visually-hidden">Loading...</span></div>'+
                        
                    ' </div>',
                    showConfirmButton: false, 
                    // timer: 4000,
                    
                })
 

                axios.post(route('mp.link',form)).then(response => { 
                    if(response.data.data.payment == 'efectivo'){
                    Swal.fire({
                            icon: 'success',
                            title: 'Su inscripción se ha realizado con éxito',
                            html: '<div class="p-3">'+
                                '  '+
                                '<div class=" " >Para completar con el pago en efectivo, un encargado se comunicara con usted via email/telefono</span></div>'+
                            ' </div>',
                            showConfirmButton: false, 
                            timer: 5000,
                            
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.relod()
                        
                            }
                        });     
                    }else{

                        Swal.fire({
                            icon: 'success',
                            title: 'Su inscripción se ha realizado con éxito',
                            html: '<div class="p-3">'+
                                '<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="visually-hidden">Loading...</span></div>'+
                                '<div class=" " >Redirigiendo a Mercado Pago</span></div>'+
                            ' </div>',
                            showConfirmButton: false, 
                            timer: 4000,
                            
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.replace(response.data.preference.init_point);
                        
                            }
                        });

                        // window.location.href = response.data.preference.init_point;
                    }

                    console.log(response.data)
                }).catch(error => {
                    console.log(error)
                     Toast.fire({
                        icon: 'error',
                        title: 'Algo salio mal! Verifica que los datos sean correctos y no se repitan'
                    })
                })
            }
        })
        
        
        
        // form.post(route('mp.link',form), {
        //     onFinish: () => console.log('finish'),
        // });
    //   Inertia.post('/users', form)
    }

 
</script>

<template>
    <Head title="CONFERENCIA MUNDIAL DEL CLF 2022 - INSCRIPCIÓN" /> 
    <app-layout>

        <section class="">
            <div class="overflow-hidden ">
                <img src="https://firebasestorage.googleapis.com/v0/b/clfargentina.appspot.com/o/images%2FBanner%20CLF%20Junio%20Facebok%20Nuevo.jpg?alt=media&token=504ffb5f-e93c-4060-bf10-5a3db7c617aa" alt="" class="w-full">
            </div>
        </section>

        <section class="py-20 bg-[#f2ece0]">

            <div class="container">
                <flash-messages />

                <h2 class="mb-5 text-center">
                    <span class="font-bold text-[#b87e29]">CONFERENCIA MUNDIAL DEL CLF 2022 </span>
                    <!-- <span class="font-light">Info</span> -->
                </h2>
                

                <form @submit.prevent="submit" class="row">
                    <div class="col-md-6 order-2">  
                        <img src="https://static.wixstatic.com/media/a37883_0f3c6dc2ffcf4191a16f070b3d2b58fa~mv2.jpeg/v1/crop/x_0,y_560,w_6720,h_3448/fill/w_576,h_299,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/24.jpeg" alt="" class="img-fluid d-none d-md-block">

                        <div class="text-2xl mt-4">
                            <p class="font-bold ">
                                <span class=" first-letter: font-bold">FECHA:</span>
                            </p>
                            <p class="font-semibold ">
                                <span class=" ">1 (Mie) al 4 (Sáb) de Junio</span>
                            </p>

                            <p class="  font-bold">
                                MEDIOS DE PAGO:
                            </p>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio"  id="p2" value="efectivo" v-model="form.payment">
                                <label class="form-check-label" for="p2">
                                    <span class="">En efectivo:</span>
                                    <span class="text-sm block">Un encagado especifico se comunicara con usted</span>
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio"  id="p1" value="MP" v-model="form.payment" >
                                <label class="form-check-label" for="p1">
                                    <span class="">Pagar con Mercado Pago:</span>
                                </label>
                            </div>
                            <div class="pl-3 text-lg" v-if="form.payment == 'MP'">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio"  id="exampleRadios1" value="10000" v-model="form.option" >
                                    <label class="form-check-label" for="exampleRadios1">
                                        <span class="">Sin alojamiento:</span>
                                        <span class="font-bold"> $10.000</span>
                                        <span class="text-sm block">(Entrada del evento + comida + transporte) </span>
                                    </label>
                                </div>
                                <!-- <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio"  id="exampleRadios2" value="26000" v-model="form.option">
                                    <label class="form-check-label" for="exampleRadios2">
                                        <span class="">Con alojamiento:</span>
                                        <span class="font-bold"> $26.000</span>
                                        <span class="text-sm block">(Entrada del evento + comida + transporte + en 1 habitación para 4 personas por 4 noches)</span>
                                    </label>
                                </div> -->
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio"  id="exampleRadios3" value="22000" v-model="form.option"  >
                                    <label class="form-check-label" for="exampleRadios3">
                                        <span class="">Con alojamiento:</span>
                                        <span class="font-bold"> $22.000</span>
                                        <span class="text-sm block">(Entrada del evento + comida + transporte + en 1 habitación para 3 personas por 4 noches)</span>
                                    </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio"  id="exampleRadios4" value="24000" v-model="form.option"  >
                                    <label class="form-check-label" for="exampleRadios4">
                                        <span class="">Alojamiento Matrimonial:</span>
                                        <span class="font-bold"> $24.000</span>
                                        <span class="text-sm block">(Entrada del evento + comida + transporte + en 1 habitación matrimonial por 4 noches)</span>
                                    </label>
                                </div>
                            </div>
                        
                        </div>
                          <div class="flex items-center justify-center mt-5  ">
                               

                            <jet-button class="ml-4 bg-black text-lg d-block d-md-none " :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Registrar
                            </jet-button>
                        </div>
                    </div>
                    <div class="col-md-6 order-1"> 
                        <div   class="grid grid-cols-2 gap-3 mt-4 text-left ">
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
                                <input v-model="form.dni" class="w-full p-3 border rounded" type="number" placeholder="" required autofocus autocomplete="surname">
                            </div>
                            <div class="mb-2">
                                <label for="">Género</label>
                                <select v-model="form.genre" required class="w-full p-3 border rounded">
                                    <option value="M">Hombre</option>
                                    <option value="F">Mujer</option>
                                </select>
                            </div>
                            <div class="col-span-2 ">
                                <div class="flex ">
                                    <div class="mb-2 w-20">
                                        <label for="Edad">Edad</label>
                                        <input v-model="form.age" class="w-full p-3 border rounded" type="number" placeholder="" required autofocus autocomplete="edad">
                                    </div>
                                    <div class="mb-2 flex-1 pl-3">
                                        <label for="Nacionalidad">Nacionalidad</label>
                                        <v-select v-model="form.nationality" :options="countries" label="name" required class="style-chooser">
                                              <template #search="{attributes, events}">
                                                <input
                                                class="vs__search"
                                                :required="!form.nationality"
                                                v-bind="attributes"
                                                v-on="events"
                                                />
                                            </template>
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <label for="">Correo electrónico</label>
                                <input v-model="form.email" class="w-full p-3 border rounded" type="email" placeholder="" required>
                            </div>
                            <div class="mb-2 col-span-1">
                                <label for="Nacionalidad">Provincia</label>
                                <v-select v-model="form.province" :options="provinces" label="name" required class="style-chooser">
                                        <template #search="{attributes, events}">
                                        <input
                                        class="vs__search"
                                        :required="!form.province"
                                        v-bind="attributes"
                                        v-on="events"
                                        />
                                    </template>
                                </v-select>
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
                                <select v-model="form.cargo" class="w-full p-3 border rounded">
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
                               

                                <jet-button class="ml-4 bg-black text-lg d-none d-md-block " :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Registrar
                                </jet-button>
                            </div>
                        </div> 
                        <!-- <img src="https://static.wixstatic.com/media/a37883_0f3c6dc2ffcf4191a16f070b3d2b58fa~mv2.jpeg/v1/crop/x_0,y_560,w_6720,h_3448/fill/w_576,h_299,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/24.jpeg" alt="" class="img-fluid"> -->
                    </div>
                </form>
                <!-- <div class="text-center pt-5">
                    <a href="https://forms.gle/uRg4SZsNTgYbsN2j8" target="_blank" class="inline-block px-4 py-2 rounded-lg text-2xl font-semibold text-center uppercase no-underline text-white border-2 bg-base">REGISTRATE AHORA</a>
                </div> -->
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
