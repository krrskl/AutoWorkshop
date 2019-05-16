<template>
  <div>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container-fluid">
        <a id="logo-container" href="#" class="brand-logo">
          <img
            src="https://static.wixstatic.com/media/baef83_92226c2f9b0742a19da27723bd4432fd~mv2.jpg"
            width="213px"
          >
        </a>
        <ul class="right hide-on-med-and-down">
          <li>
            <a class="black-text" href="#">Inicio</a>
          </li>

          <li>
            <a class="black-text" href="#">Cliente</a>
          </li>
          <li>
            <a class="black-text" href="#">Mecánico</a>
          </li>
          <li>
            <router-link to="/receptionist">Recepcionista</router-link>
          </li>
          <li>
            <a class="black-text" href="#">Administrador</a>
          </li>
          <li>
            <a class="black-text modal-trigger" href="#modal1">Iniciar sesión</a>
          </li>
        </ul>

        <h1 class="title">Santa Marta Auto Workshop</h1>
        <p class="subtitle">Nuestra prioridad es su satisfacción</p>

        <ul id="nav-mobile" class="sidenav">
          <li>
            <a class="black-text" href="#">Inicio</a>
          </li>

          <li>
            <a class="black-text" href="#">Cliente</a>
          </li>
          <li>
            <a class="black-text" href="#">Mecánico</a>
          </li>
          <li>
            <a class="black-text" href="#">Recepcionista</a>
          </li>
          <li>
            <a class="black-text" href="#">Administrador</a>
          </li>
          <li>
            <a class="black-text" href="#">Iniciar sesión</a>
          </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
      </div>
    </nav>
  </div>
</template>
<style scoped>
nav {
  height: 23rem;
}
.nav-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
}
#logo-container {
  margin-top: 2rem;
}
.hide-on-med-and-down {
  margin-top: 10rem;
}
.title {
  color: #0066e3;
  line-height: 1.25em;
  font-weight: bold;
  margin: 0;
}
.subtitle {
  color: black;
  line-height: 1.67em;
  font-size: 1.67em;
}
a {
  color: black;
}
nav ul a:hover {
  background-color: transparent;
}
</style>

<script>
export default {
  name: "nav-component"
};
</script>
