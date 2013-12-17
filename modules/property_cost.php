 <!--Property Cost DIV-->
    <div class="input_div" id="prop_cost">
      
    <article>
    <form id="propertyform" action="api/cal_invest_property.php" method="get" >
        
        <!--Data input DIV-->
        <fieldset class="calc_field" id="container_field">
            <legend>Property Cost</legend>
            
           <fieldset class="inner_field" id="input_field">
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec1">
            
            <label for="property_price">Property Price</label>
            <input class="investment" id="property_price" type="text" name="property_price" placeholder="House Price" required />
            
            <label for="solicitors_fee">Solicitors' Fee</label>
            <input class="investment" id="solicitors_fee" type="text" name="solicitors_fee" />
            
            <label for="stamp_duty">Stamp Duty</label>
            <input class="investment" id="stamp_duty" type="text" name="stamp_duty" placeholder="" />
            
            <label for="reg_fee">Land Transfer/Registration Fee</label>
            <input class="investment" id="reg_fee" type="text" name="reg_fee" />
            
            <label for="inspection">Pre-purchase Inspections</label>
            <input class="investment" id="inspection" type="text" name="inspection" placeholder="eg:Pest Report"/>
            
            </div>
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec2">
            
            <label for="strata_report">Strata Report</label>
            <input class="investment" id="strata_report" type="text" name="strata_report"/>
            
            <label for="other_cost">Other Cost</label>
            <input class="investment" id="other_cost" type="text" name="other_cost" placeholder="eg:Tree Removal"/>
            
            <label for="renovations">Renovations</label>
            <input class="investment" id="renovations" type="text" name="renovations"/>
            
            <label for="Your_Deposit">Your Deposit</label>
            <input class="investment" id="your_Deposit" type="text" name="your_Deposit"/><br /><br />
            
            <input class="investment" id="button" type="submit" value="Calculate" />
            
             </div>
            
            </fieldset>
           </form>
        
        <fieldset class="gap_field"></fieldset>
        
        <!--Result DIV-->
        <fieldset class="result_field" id="result_property">

            <table>
                <tr><th>Total Property Cost</th><td></td></tr>      
                <tr><th>Total Funds Required</th><td></td></tr>
                <tr><th>Your Deposit</th><td></td></tr>
                 <tr><th>Home Loan Amount</th><td></td></tr>
                <tr><th>Loan to Value Ration (LVR)</th><td></td></tr>
                <tr><th>Initial Cash Outlay</th><td></td></tr>
            </table>
                     
        </fieldset>
        
        </fieldset>
    </article>
               
    </div><!--end of Property Cost Div-->