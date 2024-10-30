<?php
   /* * Calculator Form Template */  
?>
<form id="lmcp_calc_form" action="javascript:" method="post">
   <div class="row-calc">
      <div class="calc-md-3">
         <div class="calc-form-group">
            <h5>Current Loan Information</h5>
            <label for="calc-ob">Original Balance</label>
            <div class="tooltip-calc">
              <input name="calc-ob" type="text" class="" id="calc-ob" value="200000">
              <span class="tooltiptext-calc">The original balance is how much you owed on the loan when you first got it. This is rarely the same as how much you paid for your house or other asset.</span>
            </div>

            <label for="calc-cb">Current Balance</label>
            <div class="tooltip-calc">
               <input name="calc-cb" type="text" class="" id="calc-cb" value="160000">
               <span class="tooltiptext-calc">The current balance can sometimes be referred to as the pay-off amount of the loan. This is how much principal you currently owe on the loan.</span>
            </div>

            <label for="calc-ir">Interest Rate</label>
            <input name="calc-ir" type="text" class="" id="calc-ir" value="5">

            <label for="calc-term">Term (Years)</label>
            <div class="tooltip-calc">
               <input name="calc-term" type="text" style="text-align:right" class="" id="calc-term" value="30">
               <span class="tooltiptext-calc">This is the length of the loan in years. For standard fix mortgages this is ususally 30 or 15 years. Car loans are often 1-5 years.</span>
            </div>

            <label for="calc-pa">Payment Amount</label>
            <div class="tooltip-calc">
              <input name="calc-pa" type="text" class="" id="calc-pa" value="1073">
              <span class="tooltiptext-calc">Enter in the minimum payment that your bank requires you to pay.<br>If you are paying off a mortgage and you have mortgage insurance on your existing mortgage, enter your full mortgage payment less the amount you pay for mortgage insurance.</span>
            </div>
         </div>
      </div>
      <div class="calc-md-3">
         <div class="calc-form-group">
            <h5>New LOC Information</h5>
            <label for="calc-ca">Chunk Amount</label>
            <div class="tooltip-calc">
              <input name="calc-ca" type="text" class="" id="calc-ca" value="50000">
              <span class="tooltiptext-calc">If you plan on using chunking strategy, enter an amount here that is less than what you currently owe on the debt or mortgage.<br>If you plan on replacing your full debt or mortgage with a HELOC or LOC, enter the full balance of your current loan here.</span>
            </div>
            <label for="calc-loc">LOC Interest Rate</label>
            <input name="calc-loc" type="text" class="" id="calc-loc" value="7">
         </div>
      </div>
      <div class="calc-md-3">
         <div class="calc-form-group">
            <h5>Income and Expense</h5>
            <label for="calc-mi">Monthly Income</label>
            <div class="tooltip-calc">
             <input name="calc-mi" type="text" class="" id="calc-mi" value="5000">
             <span class="tooltiptext-calc">Enter your average monthly income, unless you are an advanced user, enter your net monthly income.</span>
            </div>

            <label for="calc-mi">Total Income</label>
            <input name="calc-toi" type="text" class="" id="calc-toi" value="5000">
            <label for="calc-le">Living Expenses</label>
            <div class="tooltip-calc">
              <input name="calc-le" type="text" class="" id="calc-le" value="4500">
              <span class="tooltiptext-calc">Your living expenses should be the average amount that you spend in a month not including the payment that you currently make for the loan that we are accelerating.<br>For example, if you are paying off a mortgage, do not include your mortgage payment.</span>
            </div>
         </div>
      </div>
      <div class="calc-md-3">
         <div class="calc-form-group">
            <h5>General Information</h5>
            <label for="calc-sd">Start Date</label>
            <input name="calc-sd" type="date" class="" id="calc-sd" value="<?php echo date('Y-m-d') ?>">
         </div>
      </div>
   </div>
   <p class="cl-text-center"><button id="calc-btn" onClick="javascript:calcTerm()" class="btn btn-primary">Calculate</button></p>
</form>
<div class="calc-results">
   <div class="payoff_date_min">
      <div class="form-group">
         <h5 class="">Payoff Date</h5>
         <div class="payoff_date row-calc">
            <div class="calc-md-4">
               <div class="result-inp">
                  <input type="text" class="" id="calc-date" value="" readonly>
                  <div class="calc-placeholder">Approx. Payoff Date</div>
               </div>
            </div>
            <div class="calc-md-4">
               <div class="result-inp">
                  <input type="text" class="" id="calc-days" readonly>
                  <div class="calc-placeholder">Days</div>
               </div>
            </div>
            <div class="calc-md-4">
               <div class="result-inp">
                  <input type="text" class="" id="calc-years" readonly>
                  <div class="calc-placeholder">Years</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="money_saved_min">
      <div class="calc-form-group">
         <h5 class="">Money Saved</h5>
         <div class="row-calc money_saved">
            <div class="calc-md-4">
               <div class="result-inp">
                  <input type="text" class="" id="calc-ti" readonly>
                  <div class="calc-placeholder">Original Interest</div>
               </div>
            </div>
            <div class="calc-md-4">
               <div class="result-inp">
                  <input type="text" class="" id="calc-ai" readonly>
                  <div class="calc-placeholder">New Interest</div>
               </div>
            </div>
            <div class="calc-md-4">
               <div class="result-inp">
                  <input type="text" class="" id="calc-is" readonly>
                  <input type="hidden" class="" id="calc-hidden" readonly>
                  <div class="calc-placeholder">Interest Saved</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row calc-table" id="dataTable" style="display: none;">
   <div class="col">
        <div class="daily-min">
            <h5>Daily</h5> 
              <div id="daily"></div>
            <!-- </div> -->
            <div class="cl-text-center calc-load-more">
               <a href="#" id="load" style="display: block;">Load More</a>
            </div>
        </div>
        <div class="Amortization">
            <h5>Amortization</h5>
              <div id="amort"></div>
            <!-- </div> -->
            <div class="cl-text-center calc-load-more">
               <a href="#" id="load2" style="display: block;">Load More</a>
            </div>
      </div>
   </div>
</div>