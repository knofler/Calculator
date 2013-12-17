<!--Deduction DIV-->
     <div class="input_div" id="deduction">
      
    <article>
    <form id="investform" action="api/cal_invest_deduction.php" method="get" >
        <fieldset class="calc_field" id="container_field">
            <legend>Deduction</legend>
            
           <fieldset class="inner_field" id="input_field">
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec1">
                
            <label for="borrowing_exp">Borrowing Expenses</label>
            <input class="investment" id="borrowing_exp" type="text" name="borrowing_exp"/>
            
            <label for="outgoing_exp">Outgoing Expenses</label>
            <input class="investment" id="outgoing_exp" type="text" name="outgoing_exp"/>
            
            <label for="weekly_rental">Weekly Rental</label>
            <input class="investment" id="weekly_rental" type="text" name="weekly_rental"/>
            
            <label for="rented_weeks">Rented Weeks</label>
            <input class="investment" id="rented_weeks" type="text" name="rented_weeks" />   
            
            </div>
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec2">
            
             <label for="decline_in_value">Deductions for Decline in Value</label>
            <input class="investment" id="decline_in_value" type="text" name="decline_in_value"/>
            
            <label for="Capital_Works_Deductions">Capital Works Deductions</label>
            <input class="investment" id="Capital_Works_Deductions" type="text" name="Capital_Works_Deductions"/>    
                
            <label for="deductions_investor_1">Deductions split (%)</label>
            <input class="investment" id="deductions_investor_1" type="text" name="deductions_investor_1"  placeholder="Investor 1 share (%)"/><br /><br />
            
            <input class="investment" id="button" type="submit" value="Calculate" />
            
            </div>
            
           </fieldset>
           </form>
        
        <fieldset class="gap_field"></fieldset>
        
        <!--Result DIV-->
        <fieldset class="result_field" id="result_deduction">

            <table>
                <tr><th>Gross Rent</th><td></td></tr>
                <tr><th>Total Outgoings</th><td></td></tr>
                <tr><th>Before Tax Cashflow</th><td></td></tr>
                <tr><th>Borrowing Expenses</th><td></td></tr>
                <!--<tr><th>Less Deductions for Decline in Value</th><td></td></tr>-->
                <!--<tr><th>Less Capital Works Deductions</th><td></td></tr>-->
                <tr><th>Total Deductions</th><td></td></tr>
                <tr><th>Deductions Investor 1 ($)</th><td></td></tr>
                <tr><th>Deductions Investor 2 ($)</th><td></td></tr>
               
            </table>
                     
        </fieldset>
        
        </fieldset>
    </article>
               
    </div><!--end of Deduction Div-->