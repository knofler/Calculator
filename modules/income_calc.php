<!--Income DIV-->
     <div class="input_div" id="income">
      
    <article>
    <form id="incomeform" action="api/cal_invest_income.php" method="get" >
        <fieldset class="calc_field" id="container_field">
            <legend>Income</legend>
            
           <fieldset class="inner_field" id="input_field">
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec1">
            
            
            <label for="weekly_rental">Weekly Rental</label>
            <input class="investment" id="weekly_rental" type="text" name="weekly_rental"/>
            
            <label for="rented_weeks">Rented Weeks</label>
            <input class="investment" id="rented_weeks" type="text" name="rented_weeks" />
            
            <label for="Other_Rental_Related_Income">Other Rental Related Income</label>
            <input class="investment" id="Other_Rental_Related_Income" type="text" name="Other_Rental_Related_Income" />
            
            
            </div>
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec2">
            <label for="Property_Price">Property Price</label>
            <input class="investment" id="property_price" type="text" name="propertyPrice"/> 
                
             <label for="total_outgoing">Total Outgoing Cost</label>
            <input class="investment" id="total_outgoing" type="text" name="total_outgoing" />
            
             <label for="interest_on_loan">Interest on Loan</label>
            <input class="investment" id="interest_on_loan" type="text" name="interest_on_loan" /><br /><br />
            
            <input class="investment" id="button" type="submit" value="Calculate" />
            
            </div>
            
           </fieldset>
           </form>
        
        <fieldset class="gap_field"></fieldset>
        
        <!--Result DIV-->
        <fieldset class="result_field" id="result_income">

            <table>
                <tr><th>Annual Rental</th><td></td></tr>
                <tr><th>Gross Rental Yield</th><td></td></tr>
                <tr><th>Net Rental Yield</th><td></td></tr>
                <tr><th>Net Rental Yield (After Interest)</th><td></td></tr>
                <tr><th>Gross Rent</th><td></td></tr>
            </table>
                     
        </fieldset>
        
        </fieldset>
    </article>
               
    </div><!--end of Income Div-->