<!--Outgoing Expenses DIV-->
     <div class="input_div" id="outg_exp">
      
    <article>
    <form id="outgExpform" action="api/cal_invest_outgoing.php" method="get" >
        <fieldset class="calc_field" id="container_field">
            <legend>Outgoing Expenses</legend>
            
           <fieldset class="inner_field" id="input_field">
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec1">
                
            <label for="adv_tenants">Advertising for Tenants</label>
            <input class="investment" id="adv_tenants" type="text" name="adv_tenants"/>
            
            <label for="body_corp">Body Corporate Fees/Charges</label>
            <input class="investment" id="body_corp" type="text" name="body_corp" />
            
            <label for="cleaning">Cleaning</label>
            <input class="investment" id="cleaning" type="text" name="cleaning" />
            
            <label for="council_rates">Council Rates</label>
            <input class="investment" id="council_rates" type="text" name="council_rates" placeholder="Per Annum" />
            
            <label for="gardening">Gardening/Lawn Mowing</label>
            <input class="investment" id="gardening" type="text" name="gardening"/>
            
            <label for="Insurance">Insurance</label>
            <input class="investment" id="Insurance" type="text" name="Insurance" placeholder="Per Annum"/>
            
            <label for="land_tax">Land Tax</label>
            <input class="investment" id="land_tax" type="text" name="land_tax" placeholder="Per Annum"/>
            
            <label for="legal_exp">Legal Expenses</label>
            <input class="investment" id="legal_exp" type="text" name="legal_exp" />
            
            <label for="pest_control">Pest Control</label>
            <input class="investment" id="pest_control" type="text" name="pest_control" />
            
            </div>
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec2">
                
            <label for="agent_fees">Property Agent Fees/Commission</label>
            <input class="investment" id="agent_fees" type="text" name="agent_fees" />
            
            <label for="repair_maintenance">Repairs and Maintenance</label>
            <input class="investment" id="repair_maintenance" type="text" name="repair_maintenance" />
            
            <label for="stationery">Stationery, Telephone & Postage</label>
            <input class="investment" id="stationery" type="text" name="stationery"/>
            
            <label for="Travel_Expenses">Travel Expenses</label>
            <input class="investment" id="Travel_Expenses" type="text" name="Travel_Expenses"/>
            
            <label for="Water_Charges">Water Charges</label>
            <input class="investment" id="Water_Charges" type="text" name="Water_Charges" placeholder="Per Annum"/>
            
            <label for="Rental_Expenses">Sundry Rental Expenses</label>
            <input class="investment" id="Rental_Expenses" type="text" name="Rental_Expenses" /><br /><br />
            
            <label for="home_loan_input">Home Loan Amount</label>
            <input class="investment" id="home_loan_input" type="text" name="home_loan_input" />
            
            <label for="interest_rate">Interest Rate</label>
            <input class="investment" id="interest_rate" type="text" name="interest_rate" placeholder="Calculated per annum"/><br /><br />
            
            <input class="investment" id="button" type="submit" value="Calculate" />
            
            </div>
            
           </fieldset>
           </form>
        
        <fieldset class="gap_field"></fieldset>
        
        <!--Result DIV-->
        <fieldset class="result_field" id="result_outgExp">

            <table>
                <tr><th>Interest on Loan(s)</th><td></td></tr>      
                <tr><th>Total Outgoings</th><td></td></tr>
                <tr><th>Weekly Outgoings</th><td></td></tr>
            </table>
                     
        </fieldset>
        
        </fieldset>
    </article>
               
    </div><!--end of Outgoing Expenses Div-->