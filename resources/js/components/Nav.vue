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
            <router-link to="/">Inicio</router-link>
          </li>

          <li v-if="isAuth && role == 3">
            <a class="black-text" href="#">Cliente</a>
          </li>
          <li v-if="isAuth && role == 4">
            <a class="black-text" href="#">Mecánico</a>
          </li>
          <li v-if="isAuth && role == 2">
            <router-link to="/receptionist">Recepcionista</router-link>
          </li>
          <li v-if="isAuth && role == 1">
            <a class="black-text" href="#">Administrador</a>
          </li>
          <li v-if="!isAuth">
            <a class="black-text modal-trigger" href="#modal1">Iniciar sesión</a>
          </li>

          <li v-if="isAuth">
            <a v-on:click="logout()" class="black-text modal-trigger" href="#">Cerrar sesión</a>
          </li>
        </ul>

        <h1 class="title">Santa Marta Auto Workshop</h1>
        <p class="subtitle">Nuestra prioridad es su satisfacción</p>

        <ul id="nav-mobile" class="sidenav">
          <li>
            <router-link to="/">Inicio</router-link>
          </li>

          <li v-if="isAuth && role == 3">
            <a class="black-text" href="#">Cliente</a>
          </li>
          <li v-if="isAuth && role == 4">
            <a class="black-text" href="#">Mecánico</a>
          </li>
          <li v-if="isAuth && role == 2">
            <router-link to="/receptionist">Recepcionista</router-link>
          </li>
          <li v-if="isAuth && role == 1">
            <a class="black-text" href="#">Administrador</a>
          </li>
          <li v-if="!isAuth">
            <a class="black-text modal-trigger" href="#modal1">Iniciar sesión</a>
          </li>

          <li v-if="isAuth">
            <a v-on:click="logout()" class="black-text modal-trigger" href="#">Cerrar sesión</a>
          </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
      </div>
    </nav>
  </div>
</template>

<script>
import EventBus from "./../eventBus";
export default {
  data: function() {
    return {
      isAuth: false,
      role: 0
    };
  },
  methods: {
    logout() {
      window.localStorage.clear();
      this.$router.push("/");
      this.isAuth = false;
    }
  },
  mounted() {
    EventBus.$on("LOGOUT", payload => {
      this.logout();
    });
    EventBus.$on("LOGIN_USER", payload => {
      console.log(payload);
      if (payload) {
        this.isAuth = true;
        this.role = payload.user.rolId;
        window.localStorage.setItem("user", JSON.stringify(payload));
        window.localStorage.setItem("token", payload.access_token);
      }
    });

    let user = window.localStorage.getItem("user");
    if ((user != null) | undefined) {
      this.isAuth = true;
      user = JSON.parse(user);
      this.role = user.user.rolId;
    }
  }
};
</script>

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
  text-align: center;
}
@media (max-width: 990px) {
  .brand-logo {
    display: none;
  }
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
