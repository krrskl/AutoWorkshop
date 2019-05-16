<template>
  <div>
    <Nav></Nav>
    <router-view></router-view>
    <Footer></Footer>
    <ModalLogin></ModalLogin>
  </div>
</template>


<script>
import Nav from "./../components/Nav";
import Footer from "./../components/Footer";
import ModalLogin from "./../components/ModalLogin";
export default {
  components: { Nav, Footer, ModalLogin }
};

(function($) {
  $(function() {
    $(".sidenav").sidenav();
    $(".parallax").parallax();
    $(".modal").modal();
  });
})(jQuery);
</script>