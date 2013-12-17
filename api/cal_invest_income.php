         <?php
         
         //use this function to grab input from html form
       function fetch($name){
       
       return (isset($_GET[$name])? $_GET[$name]:''); 
       }
       
       
       //variables to grab Outgoing expenses form data
       $propertyPrice=fetch('propertyPrice');
       $weekly_rental=fetch('weekly_rental');
       $rented_weeks=fetch('rented_weeks');
       $Other_Rental=fetch('Other_Rental_Related_Income');
       $total_outgoing=fetch('total_outgoing');
       $interest_on_loan=fetch('interest_on_loan');

       
    
        
       //Calculation for Outgoing Expenses Page
       
        //Calculate Annual Rental Income   
       $annual_rental= ($weekly_rental*$rented_weeks);
       
        //Calculate Gross Rental Yield   
      $gross_rental_yield=($annual_rental/$propertyPrice)*100;
      
       //Calculate Net Rental Yield
       $net_rental_yield=(($annual_rental-$total_outgoing+$interest_on_loan)/$propertyPrice)*100;
       
       //Calculate Net Rental Yield (After Interest)
       $NRY_after_tax=(($annual_rental-$total_outgoing)/$propertyPrice)*100;
       
       //Calculate Gross Rent
       $gross_rent=$annual_rental+$Other_Rental;
       
      //Create Array to pass to Ajax Call
            
            $out_income =array(
         'annual_rental'=>$annual_rental,
         'gross_rental_yield'=>$gross_rental_yield,
         'net_rental_yield'=>$net_rental_yield,
         'NRY_after_tax'=>$NRY_after_tax,
         'gross_rent'=>$gross_rent
           );
            
            //output correct format
switch(strtolower(fetch('format'))){
    
    //plain text
        case 'text':
            header('Content-Type:text/plain; charset=UTF-8');
            foreach ($out_income as $n => $v){
                echo $n,':',$v,'\n';
            }
            break;
        
        // Output HTML
        case 'html':
            header('Content-Type:text/HTML; charset=UTF-8');
            echo "<table>\n";
            foreach($out_income as $n => $v){
                echo '<tr><th>',$n,'</th><td>',number_format($v,2),'</td></tr>\n';
            }
            echo "</table>";
            break;
        
        // Output XML
        case 'xml':
            header('Content-Type:text/xml; charset=UTF-8');
          $xml=new SimpleXMLElement('<cost/>');
          array_walk($out_income,create_function('$i,$k','global $xml;$xml->addChild($k,$i);'));
          echo $xml->asXML();
          break;
        case 'jsonp':
            header('Content-Type:application/javascript;charset=UTF');
            echo fetch('callback'),'(',json_encode($out_income),');';
            break;
        default:
            header('Content-Type:application/json; charset=UTF-8');
            echo json_encode($out_income);
            break;
}

         ?>