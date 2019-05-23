<template>
  <div class="container">
    <h3 class="center">Informe de recepción de taller</h3>
    <br>
    <br>
    <ul class="collapsible">
      <li>
        <div class="collapsible-header">
          <i class="material-icons">person</i>CLIENTES
        </div>
        <div class="collapsible-body">
          <div class="search-wrapper">
            <input id="search" placeholder="Buscar..." v-model="search">
            <i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>
          <ul class="collection">
            <li
              class="collection-item avatar blue accent-4"
              v-for="client in filterClients"
              v-bind:key="client.id"
              v-on:click="setClient(client)"
            >
              <img :src="client.photo + client.id" class="circle">
              <strong class="title white-text">{{client.names}}</strong>
              <div class="white-text">
                {{client.lastnames}}
                <div class="badge-rc black-text">
                  <i class="material-icons">directions_car</i>
                  <span>{{client.cars.length}}</span>
                </div>
              </div>
              <a class="blue accent-4 no-shadow secondary-content">
                <i class="material-icons white-text">send</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li>
        <div class="collapsible-header">
          <i class="material-icons">directions_car</i>VEHÍCULOS
        </div>
        <div class="collapsible-body">
          <div v-if="client && client.cars.length == 0" class="center-align">
            <div style="font-size: 5em">😮</div>
            <p>
              El usuario
              <strong>{{client.names}}</strong> no tiene ningún vehículo registrado.
            </p>

            <a
              class="btn waves-effect white-text waves-light blue accent-4 modal-trigger"
              href="#modalCreateVehicle"
            >Registrar vehículo.</a>
          </div>
          <ul class="collection">
            <li
              class="collection-item blue accent-4"
              v-for="vehicle in client.cars"
              v-bind:key="vehicle.id"
              v-on:click="setVehicle(vehicle)"
            >
              <div>
                <strong class="white-text">{{vehicle.license_plate}}</strong>
                <a class="secondary-content">
                  <i class="material-icons white-text">send</i>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </li>

      <li>
        <div class="collapsible-header">
          <i class="material-icons">assignment</i>DETALLES DE INGRESO
        </div>
        <div class="collapsible-body">
          <div class="row">
            <div class="input-field col s12">
              <textarea
                v-model="description"
                id="description"
                class="materialize-textarea"
                data-length="1000"
              ></textarea>
              <label for="description">Descripción</label>
            </div>
          </div>

          <div class="right-align">
            <a v-on:click="save()" :disabled="!vehicle" class="btn blue accent-4 waves-effect white-text waves-light">
              <i class="material-icons right">save</i>
              Guardar
            </a>
          </div>
        </div>
      </li>
    </ul>

    <br>
    <br>
    <ModalCreateVehicle></ModalCreateVehicle>
  </div>
</template>

<script>
import Axios from "axios";
function initialState() {
  return {
    clients: [],
    client: { cars: [] },
    vehicle: null,
    instance: null,
    description: "",
    search: ""
  };
}
import ModalCreateVehicle from "./../components/ModalCreateVehicle";
export default {
  data: () => {
    return initialState();
  },
  computed: {
    filterClients() {
      return this.clients.filter(client => {
        return (
          client.names.toLowerCase().includes(this.search.toLowerCase()) ||
          client.lastnames.toLowerCase().includes(this.search.toLowerCase())
        );
      });
    }
  },
  components: { ModalCreateVehicle },
  mounted() {
    M.AutoInit();
    this.getData();
    var elems = document.querySelector(".collapsible");
    this.instances = M.Collapsible.init(elems);
    M.CharacterCounter.init(document.querySelectorAll("textarea#textarea2"));
  },
  methods: {
    getData() {
      Axios.get("api/start", {
        headers: {
          Authorization: "Bearer " + window.localStorage.getItem("token")
        }
      })
        .then(data => {
          this.clients = data.data.data.clients;
        })
        .catch(() => {
          window.localStorage.clear();
          window.location.href = "/";
        });
    },
    setClient(client) {
      this.client = client;
      this.nextCollapsible(1);
    },
    setVehicle(vehicle) {
      this.vehicle = vehicle;
      this.nextCollapsible(2);
    },
    nextCollapsible(id) {
      this.instances.open(id);
    },
    save() {
      Axios.post(
        "api/store-receipt-sheet",
        { vehicleId: this.vehicle.id, description: this.description },
        {
          headers: {
            Authorization: "Bearer " + window.localStorage.getItem("token")
          }
        }
      )
        .then(data => {
          M.toast({ html: "Creación correcta." });
          Object.assign(this.$data, initialState());
          this.nextCollapsible(0);
          this.getData();
        })
        .catch(() => {
          M.toast({ html: "Ha ocurrido un error." });
        });
    }
  }
};
</script>

<style lang="scss" scoped>
.center {
  text-align: center;
}
.collection .collection-item.avatar {
  min-height: 62px;
}
.collection-item {
  cursor: pointer;
}
.badge-rc {
  max-width: 50px;
  background: white;
  border-radius: 13px;
  display: flex;
  align-items: center;
  padding: 0px 0.5rem;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<style>
.no-shadow,
.no-shadow:focus {
  box-shadow: none;
}
strong {
  font-weight: bold;
}
.search-wrapper {
  display: flex;
  width: 40%;
  align-items: center;
}
.search-wrapper input#search {
  color: #777;
  display: block;
  font-size: 16px;
  font-weight: 300;
  width: 100%;
  height: 62px;
  margin: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0 45px 0 30px;
  border: 0;
}
#nav-mobile li.search .search-wrapper i.material-icons {
  position: absolute;
  top: 21px;
  right: 10px;
  cursor: pointer;
}
</style>

