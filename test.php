<?php

   $lvr=82;
  $homeloan=510000;
  
       


function get_lmi($lvr,$home_loan){
    
       $lvr_range=array(80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95);
       $homeloan_range=array(300000,400000,500000,600000,700000,800000,900000,1000000);
       $lmi_range=array(0.382,0.503,0.736,1.034,0.578,0.755,1.286,0.727,0.951,1.547,0.876,1.128,1.771,1.025,1.333,1.603,2.134,3.252,1.817,2.405,3.522,2.003,2.665,3.699);
       
       
        foreach($lvr_range as $lvr_key=>$each_lvr){
            
           foreach($homeloan_range as $key=>$each_homeloan){
                 
if( (  ($lvr >= $each_lvr) && ($lvr <$lvr_range[$lvr_key+1]) )  &&  (   ($home_loan>=$each_homeloan) && ($home_loan <$homeloan_range[$key+1])  )   ){
    
                
               return $lmi_range[$key];
              
             }// end of if statement
            }//end of foreach homeloan_range
        }//end of foreach lvr_range
    }//end of function
    $lmi=get_lmi($lvr,$homeloan);
    
    echo $lmi;
     
     ?>