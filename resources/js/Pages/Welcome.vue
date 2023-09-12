<script setup>
import navbarMenu from "@/Components/lalexpo/navbarMenu.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({});
</script>

<template>
  <Head title="Welcome" />
  <navbarMenu />
  <section
      id="banner-principal"
      style="
        background-image: url(new-assets/img/home/ImgWebPrincipal-Lalexpo.webp);
        background-size: cover;
        background-repeat: no-repeat;
      "
    >
      <div class="row container mx-auto">
        <div class="col-12 text-center mb-3">
          <div class="color-blanco text-uppercase pb-4">
            <b>Lalexpo 2024</b>
          </div>
          <h1 class="titulo-big color-blanco">
            <span class="color-secundary">El evento más grande</span> de la
            industria <br />en Latinoamérica
          </h1>
        </div>
      </div>
      <div class="row mt-5">
        <div
          class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end"
        >
          <button class="bg-blanco border color-primary text-uppercase" data-bs-toggle="modal"
            data-bs-target="#RegisterModal">
            <b>Registrate ahora</b>
          </button>
        </div>
        <div
          class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start mt-5 mt-md-0"
        >
          <button class="bg-transparent border color-blanco text-uppercase">
            Agendar evento
          </button>
        </div>
      </div>
    </section>

    <section id="date-cta" class="bg-primary color-blanco">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="row align-items-center">
            <div
              class="col-12 col-md-6 col-lg-3 justify-content-center cta-item ps-5 text-uppercase"
            >
              ¿Dónde y cuándo<br /><span class="color-secundary"
                >lalexpo 2024?</span
              >
            </div>
            <div
              class="col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center cta-item"
            >
              <img class="me-4 ico-img-home" src="new-assets/ico/01.png" alt=""
              />
              <div>
                10 al 13 <br /><span style="font-weight: 300">Marzo</span>
              </div>
            </div>
            <div
              class="col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center cta-item"
            >
              <img class="me-4 ico-img-home" src="new-assets/ico/02.png" alt=""
              />
              <div>
                <span style="font-weight: 300"
                  >Cali, Colombia</span
                >
              </div>
            </div>
            <div
              class="col-12 col-md-6 col-lg-3 d-flex justify-content-center cta-item"
            >
              <div class="time">
                <div class="text-center">
                  <div id="days"></div>
                  <div
                    class="text-center color-blanco timer-font fw-normal pt-2"
                  >
                    Días
                  </div>
                </div>
                <span>:</span>
                <div>
                  <div id="hours"></div>
                </div>
                <div class="text-center">
                  <div id="minutes"></div>
                  <div
                    class="text-center color-blanco timer-font fw-normal pt-2"
                  >
                    Minutos
                  </div>
                </div>
                <span>:</span>
                <div class="text-center">
                  <div id="seconds"></div>
                  <div
                    class="text-center color-blanco timer-font fw-normal pt-2"
                  >
                    Segundos
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<style scoped>
</style>
