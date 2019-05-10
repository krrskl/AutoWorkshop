<template>
  <div>
    <nav-component></nav-component>
    <div id="index-banner" class="parallax-container">
      <div class="parallax">
        <img
          src="https://static.wixstatic.com/media/baef83_96134333ccb946c597d2c77f7bbda464~mv2.jpg"
          alt="Unsplashed background img 1"
        >
      </div>
    </div>

    <div class="container center-align">
      <br>
      <br>
      <br>
      <h2>Acerca de</h2>
      <strong>Trabajo eficiente y transparente</strong>
      <p>Eficiencia y honestidad son atributos que describen los servicios que ofrece Santa Marta Auto Workshop. Nuestro equipo está calificado para cualquier tipo de trabajo, y gestiona los proyectos con la habilidad y experiencia que nuestros clientes esperan. Buscamos que nuestros clientes queden satisfechos, por ello proporcionamos canales abiertos de comunicación durante todo el proyecto.</p>
      <br>
      <br>
      <br>
      <br>
    </div>

    <div id="index-banner" class="parallax-container">
      <div class="parallax">
        <img
          src="https://static.wixstatic.com/media/dd8a720445cf4d5b983dd5a59f6bee06.jpeg"
          alt="Unsplashed background img 1"
        >
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img
                src="https://static.wixstatic.com/media/baef83_b8da814110c24aa092c25326e87d89aa~mv2.jpg"
                alt
              >
            </div>
            <div class="card-content center-align">
              <h3 class="blue-color">Detalles grandes</h3>
              <p>Estamos para servirle</p>
            </div>
          </div>
        </div>

        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img
                src="https://static.wixstatic.com/media/baef83_066b1e8969624420a0234e817b92d981~mv2.jpg"
                alt
              >
            </div>
            <div class="card-content center-align">
              <h3>Consultoría</h3>
              <p>Atención a los detalles</p>
            </div>
          </div>
        </div>

        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img
                src="https://static.wixstatic.com/media/baef83_b7854bada14243b29c5a736a3b8208cc~mv2.jpg"
                alt
              >
            </div>
            <div class="card-content center-align">
              <h3 class="blue-color">Detalles pequeños</h3>
              <p>Asesoría de expertos</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer-component></footer-component>
  </div>
</template>

<style scoped>
.blue-color {
  color: #0066e3;
}
p {
  line-height: 2rem;
}

.sidenav-trigger {
  color: #26a69a;
}

.parallax-container {
  min-height: 380px;
  line-height: 0;
  height: auto;
  color: rgba(255, 255, 255, 0.9);
}
.parallax-container .section {
  width: 100%;
}

@media only screen and (max-width: 992px) {
  .parallax-container .section {
    position: absolute;
    top: 40%;
  }
  #index-banner .section {
    top: 10%;
  }
}

@media only screen and (max-width: 600px) {
  #index-banner .section {
    top: 0;
  }
}

.icon-block {
  padding: 0 15px;
}
.icon-block .material-icons {
  font-size: inherit;
}

.card .card-image img {
  max-height: 280px;
}
.row .col:nth-child(even) .card-content {
  background: #0066e3;
  color: #fff;
}

footer.page-footer {
  margin: 0;
}
</style>

<script>
import NavComponent from "./Nav";
import FooterComponent from "./Footer";
export default {
  components: { NavComponent, FooterComponent }
};

(function($) {
  $(function() {
    $(".sidenav").sidenav();
    $(".parallax").parallax();
  });
})(jQuery);
</script>
