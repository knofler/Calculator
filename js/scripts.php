<?php
?>
   <!--jQuery Source-->
   
   <!--First two sources for Auto Complete jQuery-->
   <script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script> 
   <script type="text/javascript" src="./js/jquery-ui-1.8.2.custom.min.js"></script>
        

   <!--jQuery CSS-->
   <link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" />

   <!--jQuery Script for search grouped Auto search -->
   <script type="text/javascript" src="./js/autosearch_dbs.js"></script>
 
   <!--jQuery Script for Accordion -->
   <script src="ar_accordion.js"></script>
 
 
   <!--Hide results div on page load -->
   <script>
      $(document).ready(function(){
	 $("#prop_cost").hide()
	 $("#borw_exp").hide();
	 $("#outg_exp").hide()
	 $('#income').hide();
	 $("#deduction").hide();
	 $('#tax_calc').hide();
	 $('#sell_cost').hide();
	 
       
   
    //click to show type of DIV you want to calculate result for. each click_li item will be clicked to display associated DIV.   
   $("#click_prop_cost").click(function(){
    $('#prop_cost').slideToggle("slow");
	 $("#borw_exp").hide();
	 $("#outg_exp").hide()
	 $('#income').hide();
	 $("#deduction").hide();
	 $('#tax_calc').hide();
	 $('#sell_cost').hide();
	    $("#click_prop_cost").css({"background-color":"#bab6b6"});
	       $("#click_outg_exp").css({"background-color":"#e8e8e8"});
	       $("#click_borw_exp").css({"background-color":"#e8e8e8"});
	       $("#click_income").css({"background-color":"#e8e8e8"});
	       $("#click_deduction").css({"background-color":"#e8e8e8"});
	       $("#click_tax_calc").css({"background-color":"#e8e8e8"});
	       $("#click_sell_cost").css({"background-color":"#e8e8e8"});
	    
})
   $("#click_outg_exp").click(function(){
    $('#outg_exp').slideToggle("slow");
	 $("#prop_cost").hide();
	 $("#borw_exp").hide()
	 $('#income').hide();
	 $("#deduction").hide();
	 $('#tax_calc').hide();
	 $('#sell_cost').hide();
	    $("#click_outg_exp").css({"background-color":"#bab6b6"});
	       $("#click_prop_cost").css({"background-color":"#e8e8e8"});
	       $("#click_borw_exp").css({"background-color":"#e8e8e8"});
	       $("#click_income").css({"background-color":"#e8e8e8"});
	       $("#click_deduction").css({"background-color":"#e8e8e8"});
	       $("#click_tax_calc").css({"background-color":"#e8e8e8"});
	       $("#click_sell_cost").css({"background-color":"#e8e8e8"}); 
}) 
   $("#click_borw_exp").click(function(){
    $('#borw_exp').slideToggle("slow");
	 $("#prop_cost").hide();
	 $("#outg_exp").hide()
	 $('#income').hide();
	 $("#deduction").hide();
	 $('#tax_calc').hide();
	 $('#sell_cost').hide();
	    $("#click_borw_exp").css({"background-color":"#bab6b6"});
	       $("#click_prop_cost").css({"background-color":"#e8e8e8"});
	       $("#click_outg_exp").css({"background-color":"#e8e8e8"});
	       $("#click_income").css({"background-color":"#e8e8e8"});
	       $("#click_deduction").css({"background-color":"#e8e8e8"});
	       $("#click_tax_calc").css({"background-color":"#e8e8e8"});
	       $("#click_sell_cost").css({"background-color":"#e8e8e8"}); 
})
   $("#click_income").click(function(){
    $('#income').slideToggle("slow");
	 $("#prop_cost").hide();
	 $("#outg_exp").hide()
	 $('#borw_exp').hide();
	 $("#deduction").hide();
	 $('#tax_calc').hide();
	 $('#sell_cost').hide();
	    $("#click_income").css({"background-color":"#bab6b6"});
	       $("#click_prop_cost").css({"background-color":"#e8e8e8"});
	       $("#click_outg_exp").css({"background-color":"#e8e8e8"});
	       $("#click_borw_exp").css({"background-color":"#e8e8e8"});
	       $("#click_deduction").css({"background-color":"#e8e8e8"});
	       $("#click_tax_calc").css({"background-color":"#e8e8e8"});
	       $("#click_sell_cost").css({"background-color":"#e8e8e8"}); 
})
   $("#click_deduction").click(function(){
    $('#deduction').slideToggle("slow");
	 $("#prop_cost").hide();
	 $("#outg_exp").hide()
	 $('#borw_exp').hide();
	 $("#income").hide();
	 $('#tax_calc').hide();
	 $('#sell_cost').hide();
	    $("#click_deduction").css({"background-color":"#bab6b6"});
	       $("#click_prop_cost").css({"background-color":"#e8e8e8"});
	       $("#click_outg_exp").css({"background-color":"#e8e8e8"});
	       $("#click_borw_exp").css({"background-color":"#e8e8e8"});
	       $("#click_income").css({"background-color":"#e8e8e8"});
	       $("#click_tax_calc").css({"background-color":"#e8e8e8"});
	       $("#click_sell_cost").css({"background-color":"#e8e8e8"}); 
})
   $("#click_tax_calc").click(function(){
    $('#tax_calc').slideToggle("slow");
    	 $("#prop_cost").hide();
	 $("#outg_exp").hide()
	 $('#borw_exp').hide();
	 $("#income").hide();
	 $('#deduction').hide();
	 $('#sell_cost').hide();
	    $("#click_tax_calc").css({"background-color":"#bab6b6"});
	       $("#click_prop_cost").css({"background-color":"#e8e8e8"});
	       $("#click_outg_exp").css({"background-color":"#e8e8e8"});
	       $("#click_borw_exp").css({"background-color":"#e8e8e8"});
	       $("#click_income").css({"background-color":"#e8e8e8"});
	       $("#click_deduction").css({"background-color":"#e8e8e8"});
	       $("#click_sell_cost").css({"background-color":"#e8e8e8"}); 
})
   $("#click_sell_cost").click(function(){
    $('#sell_cost').slideToggle("slow");
         $("#prop_cost").hide();
	 $("#outg_exp").hide()
	 $('#borw_exp').hide();
	 $("#income").hide();
	 $('#deduction').hide();
	 $('#tax_calc').hide();
	    $("#click_sell_cost").css({"background-color":"#bab6b6"});
	       $("#click_prop_cost").css({"background-color":"#e8e8e8"});
	       $("#click_outg_exp").css({"background-color":"#e8e8e8"});
	       $("#click_borw_exp").css({"background-color":"#e8e8e8"});
	       $("#click_income").css({"background-color":"#e8e8e8"});
	       $("#click_deduction").css({"background-color":"#e8e8e8"});
	       $("#click_tax_calc").css({"background-color":"#e8e8e8"});
})
   
   
   //DISPLAY IMAGE-grab class of sliding div and combined its ID with variable and call slideToggle function on that element to get the sliding effect   
   $(".show_hide_image").click(function(){
    var $str = $(this).attr("id");
    console.log($str);
    var $index = $str.replace('show_hide_image', '');
      console.log($index);
    var divName = "#imageDiv" + $index;
     console.log(divName);
    $(divName).slideToggle();

});
   
   });
      
      
var click=document.getElementById("profile_menuDiv");
var show=document.getElementById("profile_submenu");

click.addEventListener("click",function(e){
   
    show.show();
    e.preventDefault;
    
});







   </script>   
   
   
  <!--running javascript to hijack calculator form and make an ajax call to calculate the expenses-->
   <script src="js/ajax-invest.js"></script>
   
   
   

<?php
?>