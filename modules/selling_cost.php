<!--Selling Cost DIV-->
    <div class="input_div" id="sell_cost">
      
    <article>
    <form id="selling_cost_form" action="api/cal_invest_sell_cost.php" method="get" >
        
        <!--Data input DIV-->
        <fieldset class="calc_field" id="container_field">
            <legend>Selling Cost</legend>
            
           <fieldset class="inner_field" id="input_field">
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec1">
            
            <label for="purchase_price">Purchase Price</label>
            <input class="investment" id="purchase_price" type="text" name="purchase_price"/>
            
            <label for="years">Years</label>
            <input class="investment" id="years" type="text" name="years" placeholder="Age of the property"/>
            
            <label for="Value_Increase">Value Increase</label>
            <input class="investment" id="Value_Increase" type="text" name="Value_Increase" placeholder="Assumption (%)"/>

            
            <label for="Property_Agent_Commission">Property Agent Commission</label>
            <input class="investment" id="Property_Agent_Commission" type="text" name="Property_Agent_Commission" />
            
            <label for="Advertising Cost">Advertising Cost</label>
            <input class="investment" id="Advertising_Cost" type="text" name="Advertising_Cost" />
            
            <label for="Auction_Cost">Auction Cost</label>
            <input class="investment" id="Auction_Cost" type="text" name="Auction_Cost"/>
            
            <label for="discharge_mortgage">Discharge of Mortgage</label>
            <input class="investment" id="discharge_mortgage" type="text" name="discharge_mortgage"/>
            
            </div>
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec2">
            
            <label for="Settlement_Fee">Settlement Fee</label>
            <input class="investment" id="Settlement_Fee" type="text" name="Settlement_Fee"/>
            
            <label for="Mortgage_Exit_Fee">Mortgage Exit Fee</label>
            <input class="investment" id="Mortgage_Exit_Fee" type="text" name="Mortgage_Exit_Fee" />
            
            <label for="Solicitors_Fee">Solicitors' Fee</label>
            <input class="investment" id="Solicitors_Fee" type="text" name="Solicitors_Fee" />
            
            <label for="Removalist_Cost">Removalist Cost</label>
            <input class="investment" id="Removalist_Cost" type="text" name="Removalist_Cost" />
            
            
            <label for="other_cost1">Capital Work Deduction</label>
            <input class="investment" id="Capital_Work_Deduction" type="text" name="Capital_Work_Deduction" />
            
            <label for="other_cost1">Other Cost</label>
            <input class="investment" id="other_cost" type="text" name="other_cost" /><br /><br />
            
            <input class="investment" id="button" type="submit" value="Calculate" />
            
             </div>
            
            </fieldset>
           </form>
        
        <fieldset class="gap_field"></fieldset>
        
        <!--Result DIV-->
        <fieldset class="result_field" id="result_sell_cost">

            <table>
                <tr><th>Property Sale Price</th><td></td></tr> 
                <tr><th>Property Purchase Cost</th><td></td></tr>
                <tr><th>Total Selling Cost</th><td></td></tr>  
                <tr><th>Property Cost Base</th><td></td></tr>
                <tr><th>Less Capital Works Deductions</th><td></td></tr>
                <tr><th>Reduced Cost Base</th><td></td></tr>
                <tr><th>Gross Gain</th><td></td></tr>
            </table>
                     
        </fieldset>
        
        </fieldset>
    </article>
               
    </div><!--end of Selling Cost Div-->