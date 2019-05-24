<template>
  <div>
    <div id="modalCreateVehicle" class="modal bottom-sheet">
      <div class="modal-content">
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input
                  v-model="vehicleCreation.license_plate"
                  id="license_plate"
                  type="text"
                  class="validate"
                >
                <label for="license_plate">Placa</label>
              </div>

              <div class="input-field col s6">
                <input v-model="vehicleCreation.model" id="model" type="text" class="validate">
                <label for="model">Modelo</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input v-model="vehicleCreation.brand" id="brand" type="text" class="validate">
                <label for="brand">Marca</label>
              </div>

              <div class="input-field col s6">
                <input v-model="vehicleCreation.mileage" id="mileage" type="text" class="validate">
                <label for="mileage">Kilometraje</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input v-model="vehicleCreation.color" id="color" type="text" class="validate">
                <label for="color">Color</label>
              </div>

              <div class="input-field col s6">
                <a
                  v-on:click="saveVehicle()"
                  class="btn blue accent-4 waves-effect white-text waves-light"
                >
                  <i class="material-icons right">save</i>
                  Guardar
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Axios from "axios";
import EventBus from "../eventBus";
export default {
  data() {
    return {
      vehicleCreation: {
        license_plate: "",
        model: "",
        brand: "",
        mileage: "",
        color: "",
        userId: ""
      }
    };
  },
  mounted() {
    EventBus.$on("VEHICLE_CREATE", payload => {
      this.vehicleCreation.userId = payload;
      this.saveVehicle();
    });
  },
  methods: {
    saveVehicle() {
      Axios.post("/api/store-vehicle", this.vehicleCreation, {
        headers: {
          Authorization: "Bearer " + window.localStorage.getItem("token")
        }
      })
        .then(data => {
          M.toast({ html: "Creación correcta." });
        })
        .catch(() => {
          M.toast({ html: "Ha ocurrido un error." });
        });
    }
  }
};
</script>

<style scoped>
.modal.bottom-sheet {
  max-height: 55%;
}
</style>

