<?php
session_start();
include("nav.php");
?>
<html> 
    <div class="col-sm-12 col-md-9 col-md-offset-1" id="wcadmin" style="opacity:0.3">
            Hello ADMIN !
    </div>
    <div class="col-md-9 col-xs-offset-1" id="wcadmin1" style="opacity:0.3">
        Welcome <?php echo $_SESSION['email']; ?>
    </div>
    <div class="col-md-9" id="homedesc">
     Eletricity is most powerful company.it is India's largest private power distribution company, serving 64 lakh consumers with 24 x 7 uninterrupted, reliable and quality power.Eletricity subsidiary companies have commissioned three transmission projects by installing eight national grid lines, being the first set of lines commissioned in India by the private sector.
    </div>
    </div>
<?php
    include("footer.php");
?>
<script> 
$(document).ready(function(){
         $("#wcadmin").animate({left: '220px',
                                opacity:'0.9'});
    
         $("#wcadmin1").animate({left: '290px',
                                  opacity:'0.9'});
    
         $("#homedesc").animate({left: '90px',
                                  opacity:'0.9'});
         
    });
</script>
</html>