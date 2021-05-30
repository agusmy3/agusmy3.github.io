<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://agusmy3.github.io">Agusmy3</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Filterizr-->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });

    $(document).on('click', '.modal-port', function(event) {
        event.preventDefault();
        let index = $(this).data('index');
      $.ajax({
      type:"get",
      url:"portfolio_data.php",
      data:{"data":index},
      dataType:"html",
      success:

      function(data){
        $(".desc_port").html(data);            
      },
      
      });
    });
  })
</script>

</body>
</html>