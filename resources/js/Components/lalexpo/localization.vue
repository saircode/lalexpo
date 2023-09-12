<template>
  <div class="row bg-primary justify-content-center">
    <div class="col-12 col-lg-10">
      <div class="row align-items-center mt-4 mb-4">
        <div class="col-12 col-md-6 col-lg-3 justify-content-center">
          <span class="text-white text-uppercase">NAVEGAR POR</span><br /><span
            class="secondary-color text-uppercase"
            >LOS WORKSHOPS</span
          ><br />
          <span style="font-size: 16px" class="text-white">
            Selecciona una opción para ver la información por país.
          </span>
        </div>
        <div
          class="col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center"
        >
          <countryDate
            urlImg="/assets/img/argentina-escudo.png"
            country="ARGENTINA"
            date="25 DE ABRIL 2023"
            classes="bg-transparent border text-white"
          />
        </div>
        <div
          class="col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center"
        >
          <countryDate
            urlImg="/assets/img/brasil-escudo.png"
            country="BRASIL"
            date="28 DE ABRIL DE 2023"
            classes="bg-secundary"
          />
        </div>
        <div
          class="col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center"
        >
        <countryDate
            urlImg="/assets/img/mexico-escudo.png"
            country="MEXICO"
            date="01 DE MAYO DE 2023"
            classes="bg-transparent border text-white"
          />
         
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import countryDate from "./countryDate.vue";
</script>
