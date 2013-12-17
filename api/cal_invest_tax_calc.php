         <?php
         
         //use this function to grab input from html form
       function fetch($name){
       
       return (isset($_GET[$name])? $_GET[$name]:''); 
       }
       
       
       //variables to grab Outgoing expenses form data
       $adv_tenants=fetch('adv_tenants');
       $body_corp=fetch('body_corp');
       $cleaning=fetch('cleaning');
       $council_rates=fetch('council_rates');
       $gardening=fetch('gardening');
       $Insurance=fetch('Insurance');
       $land_tax=fetch('land_tax');
       $legal_exp=fetch('legal_exp');
       $your_deposit=fetch('pest_control');
       $agent_fees=fetch('agent_fees');
       $repair_maintenance=fetch('repair_maintenance');
       $stationery=fetch('stationery');
       $Travel_Expenses=fetch('Travel_Expenses');
       $Water_Charges=fetch('Water_Charges');
       $Rental_Expenses=fetch('Rental_Expenses');
       $home_loan_input=fetch('home_loan_input'); 
       $interest_rate=fetch('interest_rate');
    
        
       //Calculation for Outgoing Expenses Page
       
        //Calculate Interest on Homeloan amount   
       $interest_on_loan = ($home_loan_input*$interest_rate)/100;
       
        //Calculate Total Outgoing Cost   
       $total_out_going=$adv_tenants+$body_corp+$cleaning+$council_rates+$gardening+$Insurance+$land_tax+$legal_exp+$your_deposit+$agent_fees+$repair_maintenance+$stationery+$Travel_Expenses+$Water_Charges+$Rental_Expenses ;
       
        //Calculate Weekly Outgoing Cost   
       $weekly_out_going=$total_out_going/52;
       
      //Create Array to pass to Ajax Call
            
            $out_tax_calc =array(
         'interest_loan'=>$interest_on_loan,
         'total_out_going'=>$total_out_going,
         'weekly_out_going'=>$weekly_out_going
           );
            
            //output correct format
switch(strtolower(fetch('format'))){
    
    //plain text
        case 'text':
            header('Content-Type:text/plain; charset=UTF-8');
            foreach ($out_tax_calc as $n => $v){
                echo $n,':',$v,'\n';
            }
            break;
        
        // Output HTML
        case 'html':
            header('Content-Type:text/HTML; charset=UTF-8');
            echo "<table>\n";
            foreach($out_tax_calc as $n => $v){
                echo '<tr><th>',$n,'</th><td>',number_format($v,2),'</td></tr>\n';
            }
            echo "</table>";
            break;
        
        // Output XML
        case 'xml':
            header('Content-Type:text/xml; charset=UTF-8');
          $xml=new SimpleXMLElement('<cost/>');
          array_walk($out_tax_calc,create_function('$i,$k','global $xml;$xml->addChild($k,$i);'));
          echo $xml->asXML();
          break;
        case 'jsonp':
            header('Content-Type:application/javascript;charset=UTF');
            echo fetch('callback'),'(',json_encode($out_tax_calc),');';
            break;
        default:
            header('Content-Type:application/json; charset=UTF-8');
            echo json_encode($out_tax_calc);
            break;
}

         ?>