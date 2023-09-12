<template>
  <div class="button" :class="classes">
    <img :src="urlImg" alt="Imagen" />
    <div class="text">
        <p>{{ country }}</p>
        <p>{{ date }}</p>
    </div>
  </div>
</template>

<script setup>
    defineProps({
        urlImg: {
            type:String,
            required: true
        },
        country: {
            type:String,
            required: true
        },
        date: {
            type:String,
            required: true
        },
        classes: {
            type:String,
            required: true
        }
    })
</script>



<style scoped>
/* Estilo para el contenedor del botón */
.button {
  display: inline-flex;
  align-items: center;
  border-radius: 50px; /* Esto crea la forma semi-ovalada */
  padding: 10px 20px;
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  width: 80%;
}

/* Estilo para la imagen */
.button img {
  width: 40px; /* Ajusta el ancho de la imagen según tus necesidades */
  margin-right: 10px; /* Espacio entre la imagen y el texto */
}


/* Estilo para el texto más pequeño y ajustado verticalmente */
.text {
    display: flex;
    flex-direction: column;
    text-align: left;
    font-size: 14px; /* Cambia el tamaño de la fuente según tus necesidades */
}

/* Estilo para el párrafo */
.text p {
    margin: 0;
    line-height: 1.2; /* Ajusta el espacio entre líneas verticalmente */
}

/* Estilo para la imagen con borde */
.button img {
    width: 40px; /* Ajusta el ancho de la imagen según tus necesidades */
    height: 40px; /* Ajusta la altura de la imagen según tus necesidades */
    border: 2px solid #fff; /* Agrega un borde de 2 píxeles sólidos blancos */
    border-radius: 50%; /* Hace que la imagen sea redonda */
    margin-right: 10px; /* Espacio entre la imagen y el texto */
}
</style>