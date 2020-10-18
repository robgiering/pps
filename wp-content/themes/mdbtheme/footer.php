<!-- Footer -->
<footer class="page-footer font-small blue-gradient darken-4 py-4">

  <!-- Footer Elements -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 d-flex justify-content-start">
        <!-- Copyright -->
        <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
          <a href="https://paulaspetsitting.com/"> paulaspetsitting.com</a>
        </div>
        <!-- Copyright -->
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <ul class="list-unstyled d-flex mb-0">
          <li>
          	<a class="mr-3" href="https://www.facebook.com/PaulasPetSittinginMidland/"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a class="mr-3" href="https://www.instagram.com/paulaspetsittinginmidland/" target="_blank"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a class="mr-3" href="mailto:PaulasPetSittingInMidlandMi@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer -->
<div id="demo"></p>
<!-- Footer -->
<?php wp_footer(); ?>
</body>
<script>
// MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("wp-content/themes/mdbtheme/mdb-addons/mdb-lightbox-ui.html");
new WOW().init();
});
</script>
<script>
(function() {
    var infoModal = $('#myModal');
    $('.petsitter-thumbnail').on('click', function(){
        $.ajax({ 
          type: "GET", 
          url: 'wp-content/themes/mdbtheme/getJson.php?id='+$(this).attr('id'),
          dataType: 'json',
          success: function(myObj){ 
            htmlData = '<ul><li>title: '+myObj.name+'</li><li>age: '+myObj.age+'</li></ul>';
            infoModal.find('.modal-body').html(htmlData);
          }
        });

        return false;
    });
})();
</script>

<script src="wp-content/themes/mdbtheme/getJson.php"></script>
</html>0'