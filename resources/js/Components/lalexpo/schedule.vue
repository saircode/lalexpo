<template>
  <div class="row mt-4 bg-primary">
    <div class="col text-center mt-4">
      <h4 class="titulo pb-3">
        <span class="text-white"> Programación </span>
        <span class="secondary-color">2023</span>
      </h4>
      <p class="text-white">Lalexpo International | Cali - Colombia</p>
    </div>

    <div class="row mb-4" style="margin-top: 60px">
      <div class="col-md-6">
        <div class="row container-fluid">
          <div class="col-md-6">
            <input
              v-model="form.name"
              type="text"
              placeholder="Nombre completo"
              class="form-control"
            />
          </div>
          <div class="col-md-6">
            <input
              v-model="form.email"
              type="email"
              placeholder="Correo electrónico"
              class="form-control"
            />
          </div>
        </div>
        <div class="row container-fluid mt-4">
          <div class="col-md-6">
            <input v-model="form.cellphone" type="text" placeholder="Celular" class="form-control" />
          </div>
          <div class="col-md-6">
            <select v-model="form.country" name="" class="form-control" id="">
              <option value="USA">USA</option>
              <option value="COLOMBIA">COLOMBIA</option>
              <option value="ARGENTINA">ARGENTINA</option>
              <option value="BRASIL">BRASIL</option>
              <option value="MEXICO">MEXICO</option>
            </select>
          </div>
        </div>
        <div class="row container-fluid mt-4 mb-4">
          <div class="col-md-12">
            <input
              v-model="form.subject"
              type="text"
              placeholder="Asunto"
              class="form-control"
            />
          </div>
        </div>

        <div class="row container-fluid mt-4">
          <div class="col-md-12">
            <textarea
              v-model="form.message"
              class="form-control"
              cols="30"
              rows="6"
            ></textarea>
          </div>
        </div>

        <div class="row container-fluid mt-4 text-center text-white mb-4">
          <label>
            <input
              v-model="form.accept"
              type="radio"
              class="form-check-input"
            />
            Acepto términos y condiciones personales
          </label>
        </div>

        <div class="row container-fluid mt-4 text-white mb-4">
          <div class="col text-center">
            <div
              class="alert alert-primary"
              role="alert"
              v-show="showMessageSuccess"
            >
              El mensaje se envió correctamente !
            </div>

            <div class="alert alert-danger" role="alert" v-show="errors">
              <p class="text-small" v-for="(err, index) in errors" :key="index">
                {{ err[0] }}
              </p>
            </div>
            <button
              @click="!isloading ? sendMail() : ''"
              class="bg-secundary text-white text-uppercase"
              style="display: inline-block; width: 500px"
            >
              <b>{{ isloading ? 'ENVIANDO...' : 'SOLICITAR PROGRAMACION' }}</b>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <span class="secondary-color"><b>CONTACTENOS</b></span
        ><br />
        <span class="text-white"
          >Sí quieres recibirm mas información escríbenmos a:
          <b>info@lalexpo.com</b></span
        >

        <div class="row mt-4 align-items-center">
          <div class="col-md-1">
            <img
              src="/assets/img/cellphone-icon.png"
              style="height: 50px; margin-left: -6px"
            />
          </div>
          <div class="col-md-11 text-white">
            <p class="text-mid">
              <b>USA:</b> <br /><span>+1 347568-0230</span>
            </p>
          </div>
        </div>
        <div class="row mt-4 align-items-center">
          <div class="col-md-1">
            <img
              src="/assets/img/cellphone-icon.png"
              style="height: 50px; margin-left: -6px"
            />
          </div>
          <div class="col-md-11 text-white">
            <p class="text-mid">
              <b>COLOMBIA:</b> <br /><span>(+57) 316 763 6500</span>
            </p>
          </div>
        </div>
        <div class="row mt-4 align-items-center">
          <div class="col-md-1">
            <img
              src="/assets/img/cellphone-icon.png"
              style="height: 50px; margin-left: -6px"
            />
          </div>
          <div class="col-md-11 text-white">
            <p class="text-mid">
              <b>ARGENTINA:</b> <br /><span>(+54) 9 11 7650-8009</span>
            </p>
          </div>
        </div>
        <div class="row mt-4 align-items-center">
          <div class="col-md-1">
            <img
              src="/assets/img/cellphone-icon.png"
              style="height: 50px; margin-left: -6px"
            />
          </div>
          <div class="col-md-11 text-white">
            <p class="text-mid">
              <b>BRASIL:</b> <br /><span>(+55) 11 98610-7223</span>
            </p>
          </div>
        </div>
        <div class="row mt-4 align-items-center">
          <div class="col-md-1">
            <img
              src="/assets/img/cellphone-icon.png"
              style="height: 50px; margin-left: -6px"
            />
          </div>
          <div class="col-md-11 text-white">
            <p class="text-mid">
              <b>MEXICO:</b> <br /><span>(+52) 1 56 3227 5830</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script setup>
import { reactive, ref } from "vue";

const form = reactive({
    name: null,
    email: null,
    cellphone: null,
    country: null,
    subject: null,
    message: null,
    accept: null,
  }),
  errors = ref(null),
  showMessageSuccess = ref(false),
  isloading = ref(false)

const sendMail = () => {
  errors.value = null;
  isloading.value = true;
  axios
    .post(route("send.email.schedule"), form)
    .then((res) => {
      showMessageSuccess.value = true;
      setTimeout(() => {
        showMessageSuccess.value = false;
      }, 3000);

      form.name= null;
      form.email= null;
      form.cellphone= null;
      form.country= null;
      form.subject= null;
      form.message= null;
      form.accept= null;
    })
    .catch((err) => {
      errors.value = err.response.data;
    })
    .finally(()=>{
        isloading.value = false;

      
    })
};
</script>