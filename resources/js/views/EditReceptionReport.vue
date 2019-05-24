<template>
  <div class="container">
    <!-- <h3 class="center">Informe de recepción de taller</h3> -->
    <br>
    <br>
    <ul class="collapsible">
      <li>
        <div class="collapsible-header">
          <i class="material-icons">list_alt</i>HOJAS DE RECEPCIÓN
        </div>
        <div class="collapsible-body">
          <div class="search-wrapper">
            <input id="search" placeholder="Buscar..." v-model="search">
            <i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>

          <ul class="collapsible active-icon">
            <li v-for="sheet in filterSheets" v-bind:key="sheet.id">
              <div class="blue accent-4 collapsible-header white-text">
                Hoja de recepción ID: {{sheet.id}}, vehículo de placa:
                <strong>{{sheet.vehicle.license_plate}}</strong>

                <a class="secondary-content right">
                  <i class="material-icons white-text">keyboard_arrow_right</i>
                </a>
              </div>
              <div class="collapsible-body">
                <div class="row">
                  <div class="input-field col s12">
                    <textarea
                      v-model="sheet.description"
                      :id="'description' + sheet.id"
                      class="materialize-textarea"
                      :date-is="initTextarea('description' + sheet.id)"
                    ></textarea>
                    <label for="description">Descripción</label>
                  </div>
                </div>

                <div class="right-align">
                  <a
                    v-on:click="save(sheet)"
                    class="btn blue accent-4 waves-effect white-text waves-light"
                  >
                    <i class="material-icons right">save</i>
                    Guardar
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</template>

<style lang="scss" scoped>
.collapsible li div a {
  transition: all 0.4s ease-in-out;
}
.collapsible-header {
  position: relative;
  .secondary-content {
    position: absolute;
    right: 1rem;
  }
}
.collapsible.active-icon .active > div > a {
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
</style>


<script>
import Axios from "axios";
import EventBus from "../eventBus";

export default {
  data() {
    return {
      receipt_sheets: [],
      search: ""
    };
  },
  methods: {
    save(sheet) {
      Axios.post(
        "api/edit-receipt-sheet",
        {
          id: sheet.id,
          description: sheet.description
        },
        {
          headers: {
            Authorization: "Bearer " + window.localStorage.getItem("token")
          }
        }
      )
        .then(data => {
          M.toast({ html: data.data.message });
        })
        .catch(() => {
          M.toast({ html: "Ha ocurrido un error." });
          EventBus.$emit("LOGOUT");
        });
    },
    initTextarea(id) {
      setTimeout(() => {
        M.textareaAutoResize($(`#${id}`));
        M.updateTextFields();
      }, 500);
    }
  },
  computed: {
    filterSheets() {
      return this.receipt_sheets.filter(sheet => {
        return sheet.vehicle.license_plate
          .toLowerCase()
          .includes(this.search.toLowerCase());
      });
    }
  },
  mounted() {
    Axios.get("api/get-receipt-sheets", {
      headers: {
        Authorization: "Bearer " + window.localStorage.getItem("token")
      }
    })
      .then(data => {
        this.receipt_sheets = data.data.data;
        M.AutoInit();
      })
      .catch(error => {
        M.toast({ html: "Ha ocurrido un error." });
        EventBus.$emit("LOGOUT");
      });
  }
};
</script>
