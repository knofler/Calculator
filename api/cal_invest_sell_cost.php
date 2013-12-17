         <?php
         
         //use this function to grab input from html form
       function fetch($name){
       
       return (isset($_GET[$name])? $_GET[$name]:''); 
       }
       
       
       //variables to grab Outgoing expenses form data
       $purchase_price=fetch('purchase_price');
       $years=fetch('years');
       $Value_Increase=fetch('Value_Increase');
       $Property_Agent_Commission=fetch('Property_Agent_Commission');
       $Advertising_Cost=fetch('Advertising_Cost');
       $Auction_Cost=fetch('Auction_Cost');
       $discharge_mortgage=fetch('discharge_mortgage');
       $Settlement_Fee=fetch('Settlement_Fee');
       $Mortgage_Exit_Fee=fetch('Mortgage_Exit_Fee');
       $Solicitors_Fee=fetch('Solicitors_Fee');
       $Removalist_Cost=fetch('Removalist_Cost');
       $other_cost1=fetch('other_cost1');
       $other_cost2=fetch('other_cost2');
       $Capital_Work_Deduction=fetch('Capital_Work_Deduction');
        
       //Calculation for Outgoing Expenses Page
    
       //Calculate Value increase to change it to percentage value
       $Value_Increase=$Value_Increase/100;
       
        //Calculate Total selling Cost   
       $total_selling_cost=$Property_Agent_Commission+$Advertising_Cost+$discharge_mortgage+$Settlement_Fee+$Mortgage_Exit_Fee+$Solicitors_Fee+$Removalist_Cost+$other_cost;
       
        //Calculate Property Sell Price Cost   
       $property_sellprice=$purchase_price*(1+$Value_Increase);
       
        //Calculate Property Cost Base  
       $property_costbase=$property_price+$total_selling_cost;
       
       //CalculateCapital Works ZDeduction for number of years  
       $less_capital_work_deduction=$Capital_Work_Deduction*$years;
       
        //Calculate Reduced Property Cost Base  
       $reduced_costbase=$property_costbase-$less_capital_work_deduction;
       
       
       //Calculate Gross Gain  
       $gross_gain=$property_sellprice-($purchase_price+$total_selling_cost);
       
      //Create Array to pass to Ajax Call
            
            $out_sell_cost =array(
            'property_sellprice'=>$property_sellprice,
            'purchase_price'=>$purchase_price,
            'selling_cost'=>$total_selling_cost,
            'property_costbase'=>$property_costbase,
            'less_capital_work_deduction'=>$less_capital_work_deduction,
            'reduced_costbase'=>$reduced_costbase,
            'gross_gain'=>$gross_gain
           );
            
            //output correct format
switch(strtolower(fetch('format'))){
    
    //plain text
        case 'text':
            header('Content-Type:text/plain; charset=UTF-8');
            foreach ($out_sell_cost as $n => $v){
                echo $n,':',$v,'\n';
            }
            break;
        
        // Output HTML
        case 'html':
            header('Content-Type:text/HTML; charset=UTF-8');
            echo "<table>\n";
            foreach($out_sell_cost as $n => $v){
                echo '<tr><th>',$n,'</th><td>',number_format($v,2),'</td></tr>\n';
            }
            echo "</table>";
            break;
        
        // Output XML
        case 'xml':
            header('Content-Type:text/xml; charset=UTF-8');
          $xml=new SimpleXMLElement('<cost/>');
          array_walk($out_sell_cost,create_function('$i,$k','global $xml;$xml->addChild($k,$i);'));
          echo $xml->asXML();
          break;
        case 'jsonp':
            header('Content-Type:application/javascript;charset=UTF');
            echo fetch('callback'),'(',json_encode($out_sell_cost),');';
            break;
        default:
            header('Content-Type:application/json; charset=UTF-8');
            echo json_encode($out_sell_cost);
            break;
}

         ?>