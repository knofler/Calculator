<!--This is the header template that inludes HTML head,CSS files and Starting of the body element including Header DIV-->
<?php

//include "init.php" ;
include "/template/header.php" ;

?>

<!--This is left DIV,which is kept blank for design purpose-->
<div class="mainDiv" id="left">
   
   <?php include "widgets/side_menu.php" ; ?>

</div>

<!--This is Main Container DIV,which contains main HTML structures for this page.-->
<div class="mainDiv" id="container" >

    <!--includes all the individual modules here-->
 <?php include "modules/module_group.php" ; ?>

</div><!--End of container DIV-->

<!--This is Right DIV,which is kept blank for design purpose--> 
<div class="mainDiv" id="right"></div>

<!--This is the footer template that inludes JavaScripts and Ending of All HTML elements including Footer DIV-->
<?php include "/template/footer.php" ; ?>
