         <?php
         
         //use this function to grab input from html form
       function fetch($name){
       
       return (isset($_GET[$name])? $_GET[$name]:''); 
       }
       
       
       //variables to grab borrowing expenses form data
       $property_price=fetch('property_price');
       $your_Deposit=fetch('your_Deposit');
       $mort_reg_fee=fetch('mort_reg_fee');
       $Valuation_Fee=fetch('Valuation_Fee');
       $loan_establishment_fees=fetch('loan_establishment_fees');
       $Title_Search_Fees=fetch('Title_Search_Fees');
       $add_security_fee=fetch('add_security_fee');
       $Sattlement_fees=fetch('Sattlement_fees');
       $item=fetch('item');
    
    
       //Calculation for borrowing expenses Page
       
       
       //Calculate LMI
       $homeloan=$property_price-$your_Deposit;
       $lvr=($homeloan/$property_price)*100;
       
    function get_lmi($lvr,$home_loan){
    
       $lvr_range=array(80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95);
       $homeloan_range=array(300000,400000,500000,600000,700000,800000,900000,1000000);
       $lmi_range=array(0.382,0.503,0.736,1.034,0.578,0.755,1.286,0.727,0.951,1.547,0.876,1.128,1.771,1.025,1.333,1.603,2.134,3.252,1.817,2.405,3.522,2.003,2.665,3.699);
       
       
        foreach($lvr_range as $lvr_key=>$each_lvr){
            
           foreach($homeloan_range as $key=>$each_homeloan){
                 
        if( (  ($lvr >= $each_lvr) && ($lvr <$lvr_range[$lvr_key+1]) )  &&  (   ($home_loan>=$each_homeloan) && ($home_loan <$homeloan_range[$key+1])  )   ){
    
                
               $lmi_ratio= ($lmi_range[$key])/100;
               $lmi_notax=$home_loan*$lmi_ratio;
               $state_tax=$lmi_notax * 0.1;
               $lmi=$lmi_notax+$state_tax;
               return $lmi;
              
             }// end of if statement
            }//end of foreach homeloan_range
        }//end of foreach lvr_range
    }//end of function
    
  
    //Calculate Interest on Homeloan amount
    $borrowing_exp = $mort_reg_fee+$Valuation_Fee+$loan_establishment_fees+$Title_Search_Fees+$add_security_fee+$Sattlement_fees+$item+$lmi;
    
    
    //Calculate LMI based on homeloand,property price and user deposit
    
    $lmi=get_lmi($lvr,$homeloan);
       
       
      //Create Array to pass to Ajax Call
            
            $out_borwExp =array(
        'stamp_duty'=>$stamp_duty,
         'lmi'=>$lmi,
         'borrowing_exp'=>$borrowing_exp
           );
            
            //output correct format
switch(strtolower(fetch('format'))){
    
    //plain text
        case 'text':
            header('Content-Type:text/plain; charset=UTF-8');
            foreach ($out_borwExp as $n => $v){
                echo $n,':',$v,'\n';
            }
            break;
        
        // Output HTML
        case 'html':
            header('Content-Type:text/HTML; charset=UTF-8');
            echo "<table>\n";
            foreach($out_borwExp as $n => $v){
                echo '<tr><th>',$n,'</th><td>',number_format($v,2),'</td></tr>\n';
            }
            echo "</table>";
            break;
        
        // Output XML
        case 'xml':
            header('Content-Type:text/xml; charset=UTF-8');
          $xml=new SimpleXMLElement('<cost/>');
          array_walk($out_borwExp,create_function('$i,$k','global $xml;$xml->addChild($k,$i);'));
          echo $xml->asXML();
          break;
        case 'jsonp':
            header('Content-Type:application/javascript;charset=UTF');
            echo fetch('callback'),'(',json_encode($out_borwExp),');';
            break;
        default:
            header('Content-Type:application/json; charset=UTF-8');
            echo json_encode($out_borwExp);
            break;
}

         ?>