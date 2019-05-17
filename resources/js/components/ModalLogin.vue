<template>
  <div>
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h3 class="center-align">Iniciar sesión</h3>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input v-model="username" id="username" type="text" class="validate">
                <label for="username">Usuario</label>
              </div>
              <div class="input-field col s12">
                <input v-model="password" id="password" type="password" class="validate">
                <label for="password">Contraseña</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
        <a href="#" v-on:click="login()" class="waves-effect waves-green btn btn-blue">Iniciar</a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import EventBus from "../eventBus";
export default {
  data: () => {
    return {
      username: "",
      password: ""
    };
  },
  methods: {
    login() {
      let modal = M.Modal.getInstance($("#modal1"));

      axios
        .post("/api/user/login", {
          username: this.username._value,
          password: this.password._value
        })
        .then(data => {
          modal.close();
          EventBus.$emit("LOGIN_USER", data.data);
          M.toast({ html: `Bienvenid@ ${data.data.user.person.names}` });
        })
        .catch(error => {
          M.toast({ html: "Credenciales incorrectas." });
        });
    }
  }
};
</script>

<style scoped>
.modal {
  height: 50%;
}
.btn-blue {
  background: #0066e3;
  color: #ffffff;
}
</style>

