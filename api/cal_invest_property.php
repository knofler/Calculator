         <?php
         
         //use this function to grab input from html form
       function fetch($name){
       
       return (isset($_GET[$name])? $_GET[$name]:''); 
       }
       
       //variables to grab property cost form data
       $property_price=fetch('property_price');
       $solicitors_fee=fetch('solicitors_fee');
       $stamp_duty=fetch('stamp_duty');
       $reg_fee=fetch('reg_fee');
       $inspection=fetch('inspection');
       $strata_report=fetch('strata_report');
       $other_cost=fetch('other_cost');
       $renovations=fetch('renovations');
       $your_deposit=fetch('your_Deposit');
       
       
       //Calculation for Property Cost Page
       
       //Total funds required
       $funds_required=$property_price+$solicitors_fee+$stamp_duty+$reg_fee+$inspection+$strata_report+$other_cost+$renovations;
       
       //Total home loan required
       $home_loan=$funds_required-$your_deposit;
       
       //Loan to value Ration(LVR)
       $lvr=$home_loan/$property_price;
       
       //initial Cash Outlay
       $initial_cash_outlay=$funds_required-$home_loan;
       
       
       
       //Create Array to pass to Ajax Call

        $out_property =array(
         'property_cost'=>$property_price,
         'Funds_Required'=>$funds_required,
         'your_deposit'=>$your_deposit,
         'home_loan'=>$home_loan,
         'lvr'=>$lvr,
         'ICO'=>$initial_cash_outlay,
         'two'=>$strata_report,
         'other_cost'=>$other_cost,
         'renovations'=>$renovations
           );
            
            //output correct format
switch(strtolower(fetch('format'))){
    
    //plain text
        case 'text':
            header('Content-Type:text/plain; charset=UTF-8');
            foreach ($out_property as $n => $v){
                echo $n,':',$v,'\n';
            }
            break;
        
        // Output HTML
        case 'html':
            header('Content-Type:text/HTML; charset=UTF-8');
            echo "<table>\n";
            foreach($out_property as $n => $v){
                echo '<tr><th>',$n,'</th><td>',number_format($v,2),'</td></tr>\n';
            }
            echo "</table>";
            break;
        
        // Output XML
        case 'xml':
            header('Content-Type:text/xml; charset=UTF-8');
          $xml=new SimpleXMLElement('<cost/>');
          array_walk($out_property,create_function('$i,$k','global $xml;$xml->addChild($k,$i);'));
          echo $xml->asXML();
          break;
        case 'jsonp':
            header('Content-Type:application/javascript;charset=UTF');
            echo fetch('callback'),'(',json_encode($out_property),');';
            break;
        default:
            header('Content-Type:application/json; charset=UTF-8');
            echo json_encode($out_property);
            break;
}

         ?>