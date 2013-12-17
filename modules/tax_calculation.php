<!--Tax calculation DIV-->
     <div class="input_div" id="tax_calc">
      
    <article>
    <form id="investform" action="api/cal_invest_tax_calc.php" method="get" >
        <fieldset class="calc_field" id="container_field">
            <legend>Tax Calculation</legend>
            
           <fieldset class="inner_field" id="small_input_field">
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec_small">
                
           <label for="gross_income_investor_1">Annual Gross Income Investor 1</label>
            <input class="investment" id="gross_income_investor_1" type="text" name="gross_income_investor_1" />

            <label for="gross_income_investor_2">Annual Gross Income Investor 2</label>
            <input class="investment" id="gross_income_investor_2" type="text" name="gross_income_investor_2" />
            
            <label for="total_deduction">Total Deduction</label>
            <input class="investment" id="total_deduction" type="text" name="total_deduction" />
            
            <label for="deductions_investor_1">Deductions split (%)</label>
            <input class="investment" id="deductions_investor_1" type="text" name="deductions_investor_1"  placeholder="Investor 1 share (%)"/><br /><br />
            
            <input class="investment" id="button" type="submit" value="Calculate" />
            
            </div>
            
           </fieldset>
           </form>
        
        <fieldset class="gap_field"></fieldset>
        
        <!--Result DIV-->
        <fieldset class="large_result_field" id="result_tax_calculation">
    
    
    <!--Div to subdivide the form for asthetics-->
            <div class="sec_small_1">
            <table>
                 <tr><th>Less Deductions Investor 1</th><td></td></tr>
                <tr><th>Less Deductions Investor 2</th><td></td></tr>
                <tr><th>New Assessable Income Investor 1</th><td></td></tr>
                <tr><th>New Assessable Income Investor 2</th><td></td></tr>
                <tr><th>New Tax Payable Investor 1</th><td></td></tr>
                <tr><th>New Tax Payable Investor 2</th><td></td></tr>
                <tr><th>Annual Tax Savings</th><td></td></tr>
                </table>
            </div>
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec_small_2">
                <table>
                <tr><th>Tax Payable Investor 1</th><td></td></tr>
                <tr><th>Tax Payable Investor 2</th><td></td></tr>
                <tr><th>Average Tax Rate Investor 1</th><td></td></tr>
                <tr><th>Average Tax Rate Investor 2</th><td></td></tr>
                <tr><th>New Average Tax Rate Investor 1</th><td></td></tr>
                <tr><th>New Average Tax Rate Investor 2</th><td></td></tr>
            </table>
            
            </div>
                     
        </fieldset>
        
        </fieldset>
    </article>
               
    </div><!--end of Tax Calculation Div-->