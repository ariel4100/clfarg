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
    <Head title="Conferencias CLF" /> 
    <app-layout>
        <section class="">
            <img src="https://secureservercdn.net/104.238.68.130/15u.1b1.myftpupload.com/wp-content/uploads/2015/12/960-01.svg?time=1651663614" alt="" class="img-fluid">
        </section>
        <section class="">
            <div class="container py-20">
                <div class="row">
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/Sj0jXfSgwDw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/j3Tnk6ZI63M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/oN0LAXKw8Lo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/6gyW7GFvXYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/XCaC-z6jWKE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/51cL_lUw4U8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/ji0UH3hNFzs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/P6iL-LOrpQE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div class="col-md-4 mt-4">
                        <iframe width="100%" height="299" src="https://www.youtube.com/embed/bTvBWQZa1AE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                </div>
            </div>
        </section>
    </app-layout>

</template>

<style scoped>
 
</style>
