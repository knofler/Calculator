<!--Borrowing Expense DIV-->
     <div class="input_div" id="borw_exp">
      
    <article>
    <form id="borw_expform" action="api/cal_invest_borw_exp.php" method="get" >
        <fieldset class="calc_field" id="container_field">
            <legend>Borrowing Expenses</legend>
            
           <fieldset class="inner_field" id="input_field">
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec1">
                
            <label for="property_price">Property Price</label>
            <input class="investment" id="property_price" type="text" name="property_price" placeholder="House Price" required />    
                
            <label for="Your_Deposit">Your Deposit</label>
            <input class="investment" id="your_Deposit" type="text" name="your_Deposit"/>
            
            <label for="mort_reg_fee">Mortgage Registration Fee</label>
            <input class="investment" id="mort_reg_fee" type="text" name="mort_reg_fee"/>

      <!--      <label for="lmi">Lenders Mortgage Insurance (LMI)</label>
            <input class="investment" id="lmi" type="text" name="lmi" />-->
            
            <label for="Valuation_Fee">Valuation Fee</label>
            <input class="investment" id="Valuation_Fee" type="text" name="Valuation_Fee" />
            
            <label for="Loan Establishment Fees">Loan Establishment Fees</label>
            <input class="investment" id="loan_establishment_fees" type="text" name="loan_establishment_fees"/>
            
            </div>
            
            <!--Div to subdivide the form for asthetics-->
            <div class="sec2">
                
            <label for="Title_Search_Fees">Title Search Fees</label>
            <input class="investment" id="Title_Search_Fees" type="text" name="Title_Search_Fees" />
            
            <label for="add_security_fee">Additional Security fee</label>
            <input class="investment" id="add_security_fee" type="text" name="add_security_fee" />
            
            <label for="Sattlement_fees">Sattlement fees</label>
            <input class="investment" id="Sattlement_fees" type="text" name="Sattlement_fees" />
            
            <label for="item">item</label>
            <input class="investment" id="item" type="text" name="item" /><br /><br />
            
            <input class="investment" id="button" type="submit" value="Calculate" />
            
            </div>
            
           </fieldset>
           </form>
        
        <fieldset class="gap_field"></fieldset>
        
        <!--Result DIV-->
        <fieldset class="result_field" id="result_borw_exp">

            <table>
                <tr><th>Stamp Duty</th><td></td></tr>
                <tr><th>Lenders Mortgage Insurance (LMI)</th><td></td></tr>
                <tr><th>Total Borrowing Expenses</th><td></td></tr>
            </table>
                     
        </fieldset>
        
        </fieldset>
    </article>
               
    </div><!--end of Borrowing Expense Div-->