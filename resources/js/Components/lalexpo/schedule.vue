<template>
  <div class="row mt-4  bg-primary">
    <div class="col text-center mt-4">
      <h4 class="titulo pb-3">
        <span class="text-white"> Programación </span>
        <span class="secondary-color">2023</span>
      </h4>
      <p class="text-white">Lalexpo International | Cali - Colombia</p>
    </div>

    <div class="row mb-4" style="margin-top: 60px;">
        <div class="col-md-6">
            <div class="row container-fluid">
                <div class="col-md-6">
                    <input type="text" placeholder="Nombre completo" class="form-control" >
                </div>
                <div class="col-md-6">
                    <input type="email" placeholder="Correo electrónico"  class="form-control" >
                </div>
            </div>
            <div class="row container-fluid mt-4">
                <div class="col-md-6">
                    <input type="text" placeholder="Celular" class="form-control" >
                </div>
                <div class="col-md-6">
                    <select name="" class="form-control" id="">
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
                    <input type="text" placeholder="Asunto" class="form-control" >
                </div>
            </div>

            <div class="row container-fluid mt-4">
                <div class="col-md-12">
                   <textarea class="form-control" cols="30" rows="6"></textarea>
                </div>
            </div>

            <div class="row container-fluid mt-4 text-center text-white mb-4">
                <label>
                    <input type="radio" class="form-check-input">
                    Acepto términos y condiciones personales
                </label>
            </div>

            <div class="row container-fluid mt-4  text-white mb-4">
                <div class="col text-center">
                    <button class="bg-secundary text-white text-uppercase " style="display: inline-block; width: 500px;">
                        <b>SOLICITAR PROGRAMACION</b>
                    </button>
                </div>
            </div>


        </div>
        <div class="col-md-4">
            <span class="secondary-color"><b>CONTACTENOS</b></span><br>
            <span class="text-white">Sí quieres recibirm mas información escríbenmos a: <b>info@lalexpo.com</b></span>

            <div class="row mt-4 align-items-center">
                <div class="col-md-1 ">
                    <img src="/assets/img/cellphone-icon.png" style="height: 50px; margin-left: -6px;">
                </div>
                <div class="col-md-11 text-white">
                    <p class="text-mid"><b>USA:</b> <br><span>+1 347568-0230</span></p>
                </div>
            </div>
            <div class="row mt-4 align-items-center">
                <div class="col-md-1 ">
                    <img src="/assets/img/cellphone-icon.png" style="height: 50px; margin-left: -6px;">
                </div>
                <div class="col-md-11 text-white">
                    <p class="text-mid"><b>COLOMBIA:</b> <br><span>(+57) 316 763 6500</span></p>
                </div>
            </div>
            <div class="row mt-4 align-items-center">
                <div class="col-md-1 ">
                    <img src="/assets/img/cellphone-icon.png" style="height: 50px; margin-left: -6px;">
                </div>
                <div class="col-md-11 text-white">
                    <p class="text-mid"><b>ARGENTINA:</b> <br><span>(+54) 9 11 7650-8009</span></p>
                </div>
            </div>
            <div class="row mt-4 align-items-center">
                <div class="col-md-1 ">
                    <img src="/assets/img/cellphone-icon.png" style="height: 50px; margin-left: -6px;">
                </div>
                <div class="col-md-11 text-white">
                    <p class="text-mid"><b>BRASIL:</b> <br><span>(+55) 11 98610-7223</span></p>
                </div>
            </div>
            <div class="row mt-4 align-items-center">
                <div class="col-md-1 ">
                    <img src="/assets/img/cellphone-icon.png" style="height: 50px; margin-left: -6px;">
                </div>
                <div class="col-md-11 text-white">
                    <p class="text-mid"><b>MEXICO:</b> <br><span>(+52) 1 56 3227 5830</span></p>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>


<script setup>
</script>