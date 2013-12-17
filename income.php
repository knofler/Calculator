         
            <label class="topic" for="summary">Summary</label>
            
            <table>
                <tr><th>Weekly Outgoings</th><td></td></tr>
                <tr><th>Less Weekly Tax Savings</th><td></td></tr>
                <tr><th>Less Weekly Rental Income</th><td></td></tr>
                <tr><th>Total Weekly Investment</th><td></td></tr>
                <tr><th>Total Annual Investment</th><td></td></tr>
                    <tr><th>Investors</th><td></td></tr>
            </table>
            
        
            <label class="topic" for="who_pays">Who Pays (%)</label>
            
            <table>
                <tr><th>Weekly Outgoings</th><td></td></tr>
                <tr><th>Taxman</th><td></td></tr>
                <tr><th>Tenant</th><td></td></tr>
                <tr><th>Investors</th><td></td></tr>
            </table>
            
            <label class="topic" for="funds">Funds</label>
            
            <table><tr><th>Total Funds Required</th><td></td></tr></table>
            
            <label for="Less_Deposit">Less Deposit</label>
            <input class="investment" id="Less_Deposit" type="text" name="Less_Deposit"/>
            
            <table>
                <tr><th>Home Loan Amount</th><td></td></tr>
                <tr><th>Loan to Value Ration (LVR)</th><td></td></tr>
            </table>
            
            <label for="Interest_Rate">Interest Rate</label>
            <input class="investment" id="Interest_Rate" type="text" name="Interest_Rate"/>
            
        </fieldset>
    </form>

 
 
    
    
  <div class="input_div" id="assmp">
        
    <article>
    <form id="investform" action="api/cal_invest.php" method="get" >
        <fieldset>
            <legend>Capital Gain</legend>
            
            <label class="topic" for="Assumptions">Assumptions</label><br />
            
            
            
            <table><tr><th>Total Selling Costs
</th><td></td></tr></table>
            
        </fieldset>
    </form>
</article>
    </div>
    
 
   <div class="input_div" id="capital_gain">
        
    <article>
    <form id="investform" action="api/cal_invest.php" method="get" >
        <fieldset>
            <legend>Capital Gain</legend>
            
            <label class="topic" for="Assumptions">Capital Gain</label><br />
            
            <table>
                
            </table>                
            
            <label class="topic" for="Taxable_Income">Taxable Income (Sold Year)</label><br />
            
            <label for="Annual_Gross_Income_Investor_1">Annual Gross Income Investor 1</label>
            <input class="investment" id="Annual_Gross_Income_Investor_1" type="text" name="Annual_Gross_Income_Investor_1" />
            
            <label for="Annual_Gross_Income_Investor_2">Annual Gross Income Investor 2</label>
            <input class="investment" id="Annual_Gross_Income_Investor_2" type="text" name="Annual_Gross_Income_Investor_2" />
            
            
            <table>
                <tr><th>Add Taxable Capital Gain Investor 1</th><td></td></tr>
                <tr><th>Add Taxable Capital Gain Investor 2</th><td></td></tr>
                <tr><th>New Assessable Income Investor 1</th><td></td></tr>
                <tr><th>New Assessable Income Investor 2</th><td></td></tr>
            </table>
            
            <label class="topic" for="Taxable_Income">New Tax Payable</label><br />            
            
            
            <label for="New_Tax_Payable_Investor_1">New Tax Payable Investor 1</label>
            <input class="investment" id="New_Tax_Payable_Investor_1" type="text" name="New_Tax_Payable_Investor_1" />
            
            <label for="New_Tax_Payable_Investor_2">New Tax Payable Investor 2</label>
            <input class="investment" id="New_Tax_Payable_Investor_2" type="text" name="New_Tax_Payable_Investor_2" />

            <table><tr><th>Add Taxable Capital Gain Investor 1</th><td></td></tr></table>                        
            
            <label class="topic" for="True_Profit">True Profit</label><br />

            <table>
                <tr><th>Gross Gain</th><td></td></tr>
                <tr><th>Less Annual Tax Increase</th><td></td></tr>
                <tr><th>Less Total Investment</th><td></td></tr>
                <tr><th>After Tax Profit</th><td></td></tr>
            </table>
            
            <label class="topic" for="ROI_Property_Cost_Base">ROI on Property Cost Base</label><br /> 
            
            <table>
                <tr><th>Total Property Costs</th><td></td></tr>
                <tr><th>Add Total Selling Costs</th><td></td></tr>
                <tr><th>Property Cost Base</th><td></td></tr>
                <tr><th>After Tax Profit</th><td></td></tr>
                <tr><th>ROI</th><td></td></tr>
            </table>
            
            
        </fieldset>
    </form>
</article>
    </div>


 <div class="input_div" id="prop_cost_base">
        
    <article>
    <form id="investform" action="api/cal_invest.php" method="get" >
        <fieldset>
            <legend>Capital Gain</legend>
            
            <label class="topic" for="Property_Cost_Base">Property Cost Base</label><br />
            
            <table>
                <tr><th>Total Property Costs</th><td></td></tr>
                <tr><th>Add Total Selling Costs</th><td></td></tr>
                <tr><th>Property Cost Base</th><td></td></tr>
                
            </table>                
            
            <label class="topic" for="Gross_Gain">Gross Gain</label><br />
            
            <table>
                <tr><th>Property Sale Price</th><td></td></tr>
                <tr><th>Less Total Property Costs</th><td></td></tr>
                <tr><th>Less Total Selling Costs</th><td></td></tr>
                <tr><th>Gross Gain</th><td></td></tr>
            </table>                

            <label class="topic" for="Capital_Gain_Splits">Capital Gain Splits</label><br />
            
            <table>
                <tr><th>Taxable Capital Gain 1 (%)</th><td></td></tr>
                <tr><th>Taxable Capital Gain Investor 2 (%)</th><td></td></tr>
                <tr><th>Taxable Capital Gain Investor 1 ($)</th><td></td></tr>
                <tr><th>Taxable Capital Gain Investor 2 ($)</th><td></td></tr>
            </table>
            
            <label class="topic" for="Tax_Payable">Tax Payable</label><br />
            
            <table>
                <tr><th>Tax Payable Investor 1</th><td></td></tr>
                <tr><th>Tax Payable Investor 2</th><td></td></tr>
            </table>
        
            <label class="topic" for="Average_Tax_Rate">Average Tax Rate</label><br />
            
            <table>
                <tr><th>Investor 1</th><td></td></tr>
                <tr><th>Investor 2</th><td></td></tr>
            </table>
            
                <label class="topic" for="New_Average_Tax_Rate">New Average Tax Rate</label><br />
            
            <table>
                <tr><th>Investor 1</th><td></td></tr>
                <tr><th>Investor 2</th><td></td></tr>
            </table>

            <label class="topic" for="ROI_Cash_Investment">ROI on Cash Investment</label><br />
            
            <table>
                <tr><th>= Initial Cash Outlay</th><td></td></tr>
                <tr><th>Add Total Investment</th><td></td></tr>
                <tr><th>Cash Investment</th><td></td></tr>
                <tr><th>After Tax Profit</th><td></td></tr>
                <tr><th>ROI</th><td></td></tr>
            </table>    
                        
        </fieldset>
    </form>
</article>
    </div>