<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from "@/Layouts/Default.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Testimonios CLF" /> 
    <app-layout>
        <!-- <section class="">
            <img src="https://secureservercdn.net/104.238.68.130/15u.1b1.myftpupload.com/wp-content/uploads/2015/12/960-01.svg?time=1651663614" alt="" class="img-fluid">
        </section> -->
        <section class="">
            <div class="container py-20">
                <div class="row">
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/OpFbfvZLUCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/OjFOOGpci3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/OwXWYTo5XDU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/3QxvMa347YU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/Ao6BRFfT9m4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/-fTs1R2RAZ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/Y5HIuVnx0Z0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/dRaMYBpGvU4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/jZTFVPazsbE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/Y4v2S7TM68E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/rWxYzFXLcDI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/F4ETYklBlN4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/gPI7puERtuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/xUzHuQDWtUE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/NZqAFbkDqOc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                </div>
            </div>
        </section>
    </app-layout>

</template>

<style scoped>
 
</style>
