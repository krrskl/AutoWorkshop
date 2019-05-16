<template>
  <div>
    <div class="container-fluid">
      <h3 class="title">Registro del vehículo</h3>
      <div class="row">
        <div class="col s3 center">
          <svg
            preserveAspectRatio="xMidYMid meet"
            data-bbox="13 0 173.814 199.9"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="13 0 173.81381225585938 199.90000915527344"
            fill="#0066e3"
            class="img-svg"
          >
            <g>
              <path
                d="M182.6 0H17.4C15 0 13 1.9 13 4.3v191.3c0 2.4 1.9 4.3 4.3 4.3h165.2c2.4 0 4.3-1.9 4.3-4.3V4.3C187 1.9 185 0 182.6 0zm-4.3 191.3H21.7V8.7h156.5v182.6z"
              ></path>
              <path
                d="M52.2 147.8h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 169.6h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 125.9h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M72.5 75.1c0 11.2 12.1 20 27.5 20s27.5-8.8 27.5-20c0-7.1-4.9-16.2-11.5-22.2.8-2.6 1.3-5.2 1.3-7.5 0-9.5-7.7-17.2-17.2-17.2S82.8 36 82.8 45.5c0 2.3.4 4.9 1.3 7.4-6.7 6-11.6 15.2-11.6 22.2zM100 37c4.7 0 8.5 3.8 8.5 8.5 0 5.9-5 14.4-8.5 14.4s-8.5-8.5-8.5-14.4c0-4.7 3.8-8.5 8.5-8.5zm0 31.6c4.8 0 8.9-3.1 11.9-7.4 4.2 4.5 6.9 10.3 6.9 14 0 6.1-8.6 11.3-18.8 11.3-10.2 0-18.8-5.2-18.8-11.3 0-3.6 2.7-9.5 6.9-14 3 4.3 7.1 7.4 11.9 7.4z"
              ></path>
            </g>
          </svg>
          <h5 class="title">Hoja de recepcion</h5>
          <br>
          <br>
          <router-link class="btn-round" to="/reception-sheet">INGRESAR</router-link>
        </div>

        <div class="col s3 center">
          <svg
            preserveAspectRatio="xMidYMid meet"
            data-bbox="13 0 173.814 199.9"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="13 0 173.81381225585938 199.90000915527344"
            fill="#0066e3"
            class="img-svg"
          >
            <g>
              <path
                d="M182.6 0H17.4C15 0 13 1.9 13 4.3v191.3c0 2.4 1.9 4.3 4.3 4.3h165.2c2.4 0 4.3-1.9 4.3-4.3V4.3C187 1.9 185 0 182.6 0zm-4.3 191.3H21.7V8.7h156.5v182.6z"
              ></path>
              <path
                d="M52.2 147.8h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 169.6h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 125.9h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M72.5 75.1c0 11.2 12.1 20 27.5 20s27.5-8.8 27.5-20c0-7.1-4.9-16.2-11.5-22.2.8-2.6 1.3-5.2 1.3-7.5 0-9.5-7.7-17.2-17.2-17.2S82.8 36 82.8 45.5c0 2.3.4 4.9 1.3 7.4-6.7 6-11.6 15.2-11.6 22.2zM100 37c4.7 0 8.5 3.8 8.5 8.5 0 5.9-5 14.4-8.5 14.4s-8.5-8.5-8.5-14.4c0-4.7 3.8-8.5 8.5-8.5zm0 31.6c4.8 0 8.9-3.1 11.9-7.4 4.2 4.5 6.9 10.3 6.9 14 0 6.1-8.6 11.3-18.8 11.3-10.2 0-18.8-5.2-18.8-11.3 0-3.6 2.7-9.5 6.9-14 3 4.3 7.1 7.4 11.9 7.4z"
              ></path>
            </g>
          </svg>
          <h5 class="title">Reparaciones y trabajos solicitados</h5>
          <br>
          <br>
          <router-link class="btn-round" to="/repair-and-requested-works">INGRESAR</router-link>
        </div>

        <div class="col s3 center">
          <svg
            preserveAspectRatio="xMidYMid meet"
            data-bbox="13 0 173.814 199.9"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="13 0 173.81381225585938 199.90000915527344"
            fill="#0066e3"
            class="img-svg"
          >
            <g>
              <path
                d="M182.6 0H17.4C15 0 13 1.9 13 4.3v191.3c0 2.4 1.9 4.3 4.3 4.3h165.2c2.4 0 4.3-1.9 4.3-4.3V4.3C187 1.9 185 0 182.6 0zm-4.3 191.3H21.7V8.7h156.5v182.6z"
              ></path>
              <path
                d="M52.2 147.8h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 169.6h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 125.9h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M72.5 75.1c0 11.2 12.1 20 27.5 20s27.5-8.8 27.5-20c0-7.1-4.9-16.2-11.5-22.2.8-2.6 1.3-5.2 1.3-7.5 0-9.5-7.7-17.2-17.2-17.2S82.8 36 82.8 45.5c0 2.3.4 4.9 1.3 7.4-6.7 6-11.6 15.2-11.6 22.2zM100 37c4.7 0 8.5 3.8 8.5 8.5 0 5.9-5 14.4-8.5 14.4s-8.5-8.5-8.5-14.4c0-4.7 3.8-8.5 8.5-8.5zm0 31.6c4.8 0 8.9-3.1 11.9-7.4 4.2 4.5 6.9 10.3 6.9 14 0 6.1-8.6 11.3-18.8 11.3-10.2 0-18.8-5.2-18.8-11.3 0-3.6 2.7-9.5 6.9-14 3 4.3 7.1 7.4 11.9 7.4z"
              ></path>
            </g>
          </svg>
          <h5 class="title">Imprimir registro</h5>
          <br>
          <br>
          <router-link class="btn-round" to>INGRESAR</router-link>
        </div>

        <div class="col s3 center">
          <svg
            preserveAspectRatio="xMidYMid meet"
            data-bbox="13 0 173.814 199.9"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="13 0 173.81381225585938 199.90000915527344"
            fill="#0066e3"
            class="img-svg"
          >
            <g>
              <path
                d="M182.6 0H17.4C15 0 13 1.9 13 4.3v191.3c0 2.4 1.9 4.3 4.3 4.3h165.2c2.4 0 4.3-1.9 4.3-4.3V4.3C187 1.9 185 0 182.6 0zm-4.3 191.3H21.7V8.7h156.5v182.6z"
              ></path>
              <path
                d="M52.2 147.8h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 169.6h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3-.1 2.3 1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M52.2 125.9h95.7c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3H52.2c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3z"
              ></path>
              <path
                d="M72.5 75.1c0 11.2 12.1 20 27.5 20s27.5-8.8 27.5-20c0-7.1-4.9-16.2-11.5-22.2.8-2.6 1.3-5.2 1.3-7.5 0-9.5-7.7-17.2-17.2-17.2S82.8 36 82.8 45.5c0 2.3.4 4.9 1.3 7.4-6.7 6-11.6 15.2-11.6 22.2zM100 37c4.7 0 8.5 3.8 8.5 8.5 0 5.9-5 14.4-8.5 14.4s-8.5-8.5-8.5-14.4c0-4.7 3.8-8.5 8.5-8.5zm0 31.6c4.8 0 8.9-3.1 11.9-7.4 4.2 4.5 6.9 10.3 6.9 14 0 6.1-8.6 11.3-18.8 11.3-10.2 0-18.8-5.2-18.8-11.3 0-3.6 2.7-9.5 6.9-14 3 4.3 7.1 7.4 11.9 7.4z"
              ></path>
            </g>
          </svg>
          <h5 class="title">Eliminar registro</h5>
          <br>
          <br>
          <router-link class="btn-round" to>INGRESAR</router-link>
        </div>
      </div>

      <h3 class="title">Tipo de reparación</h3>
      <div class="row">
        <div class="col s4">
          <div class="card">
            <br>
            <div class="card-image">
              <img src="https://static.wixstatic.com/media/27a06cdb5a084ae0be018077f40291ff.jpeg">
            </div>

            <div class="card-content">
              <h4 class="title">Externo</h4>
              <br>
              <router-link class="btn-round" to>INGRESAR</router-link>
            </div>
          </div>
        </div>

        <div class="col s4">
          <div class="card">
            <br>
            <div class="card-image">
              <img
                src="https://static.wixstatic.com/media/baef83_437ba1f9c7b848afb8ae0e3f7c6212c0~mv2.jpg"
              >
            </div>

            <div class="card-content">
              <h4 class="title">Interno</h4>
              <br>
              <router-link class="btn-round" to>INGRESAR</router-link>
            </div>
          </div>
        </div>

        <div class="col s4">
          <div class="card">
            <br>
            <div class="card-image">
              <img
                src="https://static.wixstatic.com/media/baef83_4ba3fb11c44b4e6d85c2f75b9e086c26~mv2.png"
              >
            </div>

            <div class="card-content">
              <h4 class="title">Mecánico</h4>
              <br>
              <router-link class="btn-round" to>INGRESAR</router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped lang="scss">
.title {
  color: #0066e3;
  text-align: center;
  font-weight: bold;
}
.card-image {
  text-align: center;
  img {
    border-radius: 50%;
    width: 200px;
    height: 200px;
    margin: auto;
  }
}
.card-content {
  text-align: center;
}
.btn-round {
  border-radius: 10px;
  border: 1px solid #0066e3;
  padding: 0.5rem 2rem;
  a {
    text-decoration: none !important;
  }
}
.img-svg {
  width: 3rem;
  position: absolute;
  top: 4rem;
}
.center {
  text-align: center;
  min-height: 300px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: center;
}
</style>
