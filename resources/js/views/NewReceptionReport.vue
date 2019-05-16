<template>
  <div class="container">
    <h3 class="center">Informe de recepción de taller</h3>
    <br>
    <br>

    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Nombre propietario</label>
          </div>

          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Teléfono</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Marca</label>
          </div>

          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>RUT</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Modelo</label>
          </div>

          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Dirección</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Color</label>
          </div>

          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Correo</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id type="text" class="validate">
            <label for>Kilometraje</label>
          </div>

          <div class="input-field col s6">
            <button type="submit" class="btn blue accent-4">GUARDAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {};
M.updateTextFields();
</script>

<style lang="scss" scoped>
.center {
  text-align: center;
}
</style>
