function cheq()
{
 document.getElementById("chqtotamt").value= document.getElementById("chqamt").value;
document.getElementById("amt").value=document.getElementById("chqtotamt").value;
}

function calculate(r)
{   var res;
	switch(r)
  {	case 1000 : 	var r1000= document.getElementsByClassName("r1000");
  		  			  res = r1000[0].value * 1000;
  					r1000[1].value = res;
  						break;

  	case 500 : 	var r500= document.getElementsByClassName("r500");
  		  			  res = r500[0].value * 500;
  					r500[1].value = res;
  						break;					
    
    case 100 : 	var r100= document.getElementsByClassName("r100");
  		  			  res = r100[0].value * 100;
  					r100[1].value = res;
  						break;

  	case 50 : 	var r50= document.getElementsByClassName("r50");
  		  			  res = r50[0].value * 50;
  					r50[1].value = res;
  						break;

  	case 20 : 	var r20= document.getElementsByClassName("r20");
  		  			  res = r20[0].value * 20;
  					r20[1].value = res;
  						break;					
    
    case 10 : 	var r10= document.getElementsByClassName("r10");
  		  			  res = r10[0].value * 10;
  					r10[1].value = res;
  						break;					
  }
}
function cash()
{

	var a = document.getElementsByClassName("val");
	var tot = document.getElementById("cash_amt");
	tot.value=0;
	for(i=0 ; i< 6 ; i++)
	{
		tot.value = parseFloat(tot.value) + parseFloat(a[i].value);
	}
	document.getElementById("amt").value=tot.value;
}