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

  <div class="row bg-primary justify-content-center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card custom-card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-4 col-sm-12 lzn-item">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                      <img
                        src="/assets/img/brasil-escudo.png"
                        alt=""
                        class="img-brasil"
                      />
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12">
                      <span class="text-mid">WORKSHOP</span><br />
                      <span>
                        <span class="secondary-color"><b>BRASIL,</b></span
                        ><span><b> SAO PAULO</b></span>
                      </span>
                      <p class="anio">
                        <b>2023</b>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-12 lzn-item">
                  <p><b>DIRECCION</b></p>
                  <span class="text-mid">
                    Scandallo Lounge - Rua Coronel Diogo, 1199 - Jardim da
                    Glória
                  </span>
                  <span class="secondary-color">
                    São Paulo <i class="fa fa-flag"></i>
                  </span>
                </div>
                <div
                  class="col-md-6 col-lg-4 col-sm-12 lzn-item justify-content-center"
                >
                  <p><b>UBICACION</b></p>
                  <button
                    class="bg-secundary border text-white text-uppercase"
                    data-bs-toggle="modal"
                    data-bs-target="#RegisterModal"
                  >
                    <b>VER LOCALIZACION</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import countryDate from "./countryDate.vue";
</script>

<style scoped>
.img-brasil {
  width: 120px;
  border: 5px solid #c3bcbc; /* Agrega un borde de 2 píxeles sólidos blancos */
  border-radius: 50%; /* Hace que la imagen sea redonda */
  margin-right: 10px; /* Espacio entre la imagen y el texto */
}
.custom-card {
  border-radius: 15px;
  border: 1px solid #ccc;
  background-color: #fff;
  margin: 60px;
  padding: 10px;
}

.anio {
  margin-top: -18px !important;
  color: rgb(177, 177, 177);
  font-size: 40px;
}
</style>

