<template>
  <div>
    <div id="modalCreateVehicle" class="modal bottom-sheet">
      <div class="modal-content">
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input id="license_plate" type="text" class="validate">
                <label for="license_plate">Placa</label>
              </div>

              <div class="input-field col s6">
                <input id="model" type="text" class="validate">
                <label for="model">Modelo</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input id="brand" type="text" class="validate">
                <label for="brand">Marca</label>
              </div>

              <div class="input-field col s6">
                <input id="mileage" type="text" class="validate">
                <label for="mileage">Kilometraje</label>
              </div>
            </div>
            <a class="btn blue accent-4 waves-effect white-text waves-light">
              <i class="material-icons right">save</i>
              Guardar
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.modal.bottom-sheet {
  max-height: 55%;
}
</style>

