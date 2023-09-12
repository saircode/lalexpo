<template>
  <div class="row">
    <div class="col text-center mt-4">
      <h4 class="titulo pb-3">
        <span class="primary-color"> Patrocinadores </span>
        <span class="secondary-color">principales</span>
      </h4>
      <p>Estas marcas creen en Lalexpo 2023</p>
    </div>
  </div>

  <div class="row container-fluid text-center">
    <div class="col-3 mt-2" v-for="(img, index) in imgs" :key="index">
      <img :src="getImagePath(img)" alt="" style="width: 150px; " >
    </div>
  </div>
</template>

<script setup>
    import { ref } from 'vue';
    const imgs = ref([
    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'
    ]);

    const getImagePath = (img) => 'assets/img/brands/'+img+'.png';
</script>