function check()
{  var income= document.getElementById("income").value;
    var elig = document.getElementsByClassName("elig");
   if(income <= 34999 )
   {
	   document.getElementById("disp").innerHTML = "*Applicant is NOT Eligible for Loan";
	  document.getElementById("max").innerHTML = "";
	   
			for(i=0 ; i < elig.length-1 ; i++) //length-1 because to last element should always remain disaable
				{
					elig[i].disabled = true;
					
				}
   }
   else
   {   
	   var max_loan= 44 * income;
	   document.getElementById("disp").innerHTML = "";
	   document.getElementById("max").innerHTML = "*Max.permissible Amount ="+max_loan;
	   document.getElementById("lamt").value= max_loan;
	   document.getElementById("yr").value= "10";
	   for(i=0 ; i < elig.length-1 ; i++)
				{
					elig[i].disabled = false;
					
				}
   }
	
}

function calc()
{  var emi;
	var p = document.getElementById("lamt").value;
	var n = document.getElementById("yr").value;
	var r= document.getElementById("roe").value;
	  r= r/(12*100);
	n=n*12    //in months	  

	emi = ( p * r * (Math.pow( (1 + r), n) ) ) / (Math.pow((1+r),n) - 1 );
	//emi= (emi / 12);
	emi=emi.toFixed(2);
document.getElementById("emi").value= emi;
}
/*
function easyread(n)
{
	var r, len= 0,i=0;
	   var a= [];
	    while(n != 0)
		{
			n=n/10;
			len++;
		}
	
	
		if(len >= 3)
		{
			a[i]= parseInt(n%1000);
			 n= n/1000;
			 a[i+1]= ",";
			 len= len - 3;
			i=i+2; 
		}
		while(len != 0)
		{	
			if(len > 3)
			{	a[i]= parseInt(n%100);
				n = n/100;
				a[i+1]= ",";
				len= len - 2;
				i= i+2;
			}
			else if(len == 2 || len == 1)
			{
				len= 0;
				a[i]= parseInt(n);
			}
		
		}
  	
	 for(i= a.length ; i>=0 ; i--)
	 {
		 document.getElementById("disp").innerHTML= a[i];
	 }
}
*/