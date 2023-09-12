<template>
  <nav
    class="navbar navbar-dark navbar-expand-lg fixed-top border-bottom bg-primary"
  >
    <div class="container-fluid">
      <a class="navbar-brand" href="/"
        ><img src="assets/img/logo-lalexpo.png" alt="" /></a
      ><span class="navbar-text"
        ><button
          type="button"
          class="bg-secundary text-white d-block d-sm-block d-md-block d-lg-none"
        >
          Iniciar sesión
        </button></span
      ><button
        class="navbar-toggler custom-toggler"
        type="button"
        data-bs-toggle="collapse"
      
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span id="menuBurger"
          ><i class="fas fa-bars" aria-hidden="true"></i
        ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <button
          id="menuBurgerClose"
          class="btn-close btn-close-white d-block d-sm-block d-md-block d-lg-none"
          type="button"
          data-bs-toggle="collapse"
        
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        ></button>
        <div
          class="small-text text-white menu-text d-block d-sm-block d-md-block d-lg-none"
        >
          Menú <span class="secondary-color">principal</span>
        </div>
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <span class="menu-num d-block d-sm-block d-md-block d-lg-none"
              ></span
            ><a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <span class="menu-num d-block d-sm-block d-md-block d-lg-none"
              ></span
            ><a class="nav-link" href="/documental">Documental </a>
          </li>
          <li class="nav-item">
            <span class="menu-num d-block d-sm-block d-md-block d-lg-none"
              ></span
            ><a class="nav-link" href="#">Lalexpo VIP curazao</a>
          </li>
          <li class="nav-item">
            <span class="menu-num d-block d-sm-block d-md-block d-lg-none"
              ></span
            ><a class="nav-link" href="/workshops">Workshops</a>
          </li>
      
        </ul>
        <span class="navbar-text"
          ><button
            type="button"
            class="bg-secundary text-white d-none d-sm-none d-md-none d-lg-block"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            Iniciar sesión
          </button></span
        >
        <div class="info-blocks d-block d-sm-block d-md-block d-lg-none">
          <div class="mb-2"><b>Dirección</b></div>
          <div>
            Av 12 # 46-78a Sede Principal <br />
            Cali, Colombia
          </div>
          <div class="mb-2 mt-4"><b>Contáctanos</b></div>
          <div>
            info@lalexpo.com<br />
            Tel: 312 345 67890
          </div>
        </div>
        <div class="social-icons">
          <a href="https://es-la.facebook.com/lalexpo/" target="_blank"
            ><img width="35" src="assets/img/facebook.png" alt="" /></a
          ><a href="https://twitter.com/ViveLalexpo" target="_blank"
            ><img width="35" src="assets/img/twitter.png" alt="" /></a
          ><a href="https://www.instagram.com/lal_expo/" target="_blank"
            ><img width="35" src="assets/img/instagram.png" alt=""
          /></a>
        </div>
      </div>
    </div>
  </nav>
</template>
<script setup>
</script>
<style scoped>
</style>