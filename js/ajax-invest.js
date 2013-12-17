// XMLHttpRequest
var Lib = Lib || {};

Lib.Ajax = (function() {

	// hijack form
	function Hijack(form, callback) {
	
		var args = {};
		
		for (var i = 0; i < form.elements.length; i++) {
			var f = form.elements[i];
			if (f.name) args[f.name] = f.value;
		}

		// make Ajax call
		Call(form.action, args, form.method, callback);
	
	}

    
    //call web services
    function Call(url, args, type, callback) {
        
        //check type (GET or POST)
        type=(type || "GET").toUpperCase();
        
        //create argument list
        args=args || {};
        var arglist="";
        
        for (var n in args) {
            arglist += "&" + n + "=" + escape(args[n]);
        }
        
        if (arglist.length>0) {
            arglist =arglist.substr(1);
        }
        
        //append args to GET URL
        if (type=="GET") {
            url +="?" +arglist;
            arglist=null;
        }
        
        //XMLHttpRequest object
        var xhr= new XMLHttpRequest();
        xhr.open(type,url,true);
        
        //callback function
        if (callback) {
            xhr.onreadystatechange = function(){
                if (xhr.readyState==4 && xhr.status==200) {
                    callback(xhr.responseText);
                }
            };
        }
        
        //open request
        
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
        xhr.setRequestHeader("X-Requested-With","XMLHttpRequest");
        xhr.send(arglist);
    }
    
    return {
              Hijack: Hijack,
		Call: Call
    };

 }());
 
 
 //Start
 
 var
    
    //Property cost Ajax grab
    
    propertyform=document.getElementById("propertyform"),
    output_property=document.getElementById("result_property"),
    td_property=output_property.getElementsByTagName("td");
   
    
 //form submit  - direct to Ajax Call
 propertyform.addEventListener("submit",function(e){
    e.preventDefault();
    Lib.Ajax.Hijack(propertyform,function(r){
       
        r=JSON.parse(r);
         td_property[0].textContent = r.property_cost;
         td_property[1].textContent = r.Funds_Required;
         td_property[2].textContent = r.your_deposit;
         td_property[3].textContent = r.home_loan;
	 td_property[4].textContent = r.lvr;
	 td_property[5].textContent = r.ICO;
    });
 
 });
 
 
 var
 
    //Borrowing expenses Ajax grab
    
    borw_expform=document.getElementById("borw_expform"),
    output_borw_exp=document.getElementById("result_borw_exp"),
    td_borw_exp=output_borw_exp.getElementsByTagName("td");
    
    
    borw_expform.addEventListener("submit",function(e){
    e.preventDefault();
    Lib.Ajax.Hijack(borw_expform,function(r){
       
        r=JSON.parse(r);
        td_borw_exp[0].textContent = r.stamp_duty;
	td_borw_exp[1].textContent = r.lmi;
	td_borw_exp[2].textContent = r.borrowing_exp;
    });
    
     });
 
 
  var
 
    //Outgoing expenses Ajax grab
    
    outgExpform=document.getElementById("outgExpform"),
    output_outgExp=document.getElementById("result_outgExp"),
    td_outgExp=output_outgExp.getElementsByTagName("td");
    
    
    outgExpform.addEventListener("submit",function(e){
    e.preventDefault();
    Lib.Ajax.Hijack(outgExpform,function(r){
       
        r=JSON.parse(r);
         td_outgExp[0].textContent = r.interest_loan;
         td_outgExp[1].textContent = r.total_out_going;
         td_outgExp[2].textContent = r.weekly_out_going;
    });
    
     });
    
  
  var
 
    //Income Ajax grab
    
    incomeform=document.getElementById("incomeform"),
    output_income=document.getElementById("result_income"),
    td_income=output_income.getElementsByTagName("td");
    
    
    incomeform.addEventListener("submit",function(e){
    e.preventDefault();
    Lib.Ajax.Hijack(incomeform,function(r){
       
        r=JSON.parse(r);
         td_income[0].textContent = r.annual_rental;
         td_income[1].textContent = r.gross_rental_yield;
         td_income[2].textContent = r.net_rental_yield;
	 td_income[3].textContent = r.NRY_after_tax;
         td_income[4].textContent = r.gross_rent;
    });
    
     });
    
    
    
    var
 
    //Selling Cost Ajax grab
    
    selling_cost_form=document.getElementById("selling_cost_form"),
    output_selling=document.getElementById("result_sell_cost"),
    td_selling=output_selling.getElementsByTagName("td");
    
    
    selling_cost_form.addEventListener("submit",function(e){
    e.preventDefault();
    Lib.Ajax.Hijack(selling_cost_form,function(r){
       
        r=JSON.parse(r);
         td_selling[0].textContent = r.property_sellprice;
         td_selling[1].textContent = r.purchase_price;
         td_selling[2].textContent = r.selling_cost;
	 td_selling[3].textContent = r.property_costbase;
         td_selling[4].textContent = r.less_capital_work_deduction;
	 td_selling[5].textContent = r.reduced_costbase;
	 td_selling[6].textContent = r.gross_gain;
    });
    
     });  
        
 
 