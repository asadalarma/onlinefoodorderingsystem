<!--/end:Site wrapper -->
<!-- Bootstrap core JavaScript
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/headroom.js"></script>
<script src="js/foodpicky.min.js"></script>
<script type="text/javascript">
    /*$(function(){
        $('li a').click(function(e) {
            e.preventDefault();
            $('a').removeClass('active');
            $(this).addClass('active');

        });
    });*/



$(function() {
  var href = window.location.href;
  $('nav a').each(function(e,i) {
    if (href.indexOf($(this).attr('href')) >= 0) {
      $('a').removeClass('active');
      $(this).addClass('active');
    }
  });
});





  /*  $(document).ready(function() {
        $('li a').each(function () {
            if (window.location.href.indexOf($(this).find('a:first').attr('href')) > -1) {

                $(this).addClass('active').siblings().removeClass('active');
            }
        });
    });*/

</script>