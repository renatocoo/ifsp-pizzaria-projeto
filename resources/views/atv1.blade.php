@extends('common.basic-template')

@section('content')

  <!--Main Layout-->
  <main>

    <div class="container">

      <!--Section: Blog v.4-->
        <section class="section mt-5 pb-3 wow fadeIn">
                @component('components.atv1-topo')
                @endcomponent
        </section>

      <hr class="mb-5 mt-4">

      <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">
        @component('components.atv1-cadastro')
        @endcomponent
      
    </section>
<!-- Default form contact -->

      
      <!--Author box-->
      <section>
        @component('components.atv1-rodape')
        @endcomponent

  <!-- Footer -->
  <!--/Footer-->

  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });

  </script>
</body>

</html>
