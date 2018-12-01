    <link rel="stylesheet" href="css/sweetalert.css" />
    <script src="js/sweetalert.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script>
      $(document).ready(function() {

        // set current year
        var cy = new Date().getFullYear();
        $(".current-year").text(cy);

        // sidebar toggle
        $('.sidebar-toggle').click(function() {
            $('.sidebar').toggleClass('active');
            $('main, footer').toggleClass('sidebar-active');
        }); 

      });
    </script>
  </body>
</html>
