<template>
  <div>
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h3 class="center-align">Iniciar sesión</h3>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input id="first_name" type="email" class="validate">
                <label for="first_name">Correo</label>
              </div>
              <div class="input-field col s12">
                <input id="last_name" type="password" class="validate">
                <label for="last_name">Contraseña</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
        <a href="#" class="waves-effect waves-green btn btn-blue">Iniciar</a>
      </div>
    </div>
  </div>
</template>

<style scoped>
.modal {
  height: 50%;
}
.btn-blue {
  background: #0066e3;
  color: #ffffff;
}
</style>

