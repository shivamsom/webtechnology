function mydate()
{
var date=new Date().getDate();
var year=new Date().getFullYear();
var month=new Date().getMonth()+1;//+1 because it returns value from 0 to 11
   	
	switch(month)
		{
		  case 1:x='January';
				break;
		  case 2:x='February';
				break;
		case 3:x='March';
				break;
		case 4:x='April';
				break;
		case 5:x='May';
				break;
		case 6:x='June';
				break;
		case 7:x='July';
				break;
		  case 8:x='August';
				break;
		case 9:x='September';
			break;
		case 10:x='October';
			break;
		case 11:x='November';
			break;
		case 12:x='December';
			break;		
		
		}//end of switch

document.getElementById("fddate").value=date+"-"+x+"-"+year;  
}

function show(z)
{ 
	switch(z)
	{
	       case "f":document.getElementById("box").value="FIXED DEPOSIT SELECTED";
		break;
	      case "r":document.getElementById("box").value="RECURRING DEPOSIT SELECTED";
		break;
	      case "s":document.getElementById("box").value="SHORT TERM DEPOSIT SELECTED";
		break;
	}
}

function fixed()
{   //    formula used to calculate FD ''A=P x (1+r/n)^nt'' 
    /*  where a=maturity amount,
	 p=principal amount,
	 r=Rate of interest,
	n=Compounding freq,
	t=time period (in yrs)
   */
var t=document.getElementById("yr").value;
var r=document.getElementById("roi").value; 
var p=document.getElementById("princ_amt").value;
var n=document.getElementById("comp_freq").value;
if( t<=0  )
{               document.getElementById("yr").focus();              }
else if( p<=1000)
{document.getElementById("princ_amt").focus();		}         

  r=r/100;
           var a=p*Math.pow((1+(r/n)),(n*t));
       a=a.toFixed(2);
document.getElementById("maturity_amt").value=a;
} 


function rec()
{
   //formula used to calculate RD "M=[R * [ (1+r)^n -1] ]/[1-(1+r)^-1/3] "
  /* where R=Monthly Installment
	r=ROI/freq(f)*100
	n=NO.OF Quaters=months(m)/3
	M=MATURITY VALUE
*/
  var R=document.getElementById("install_amt").value;
  var roi=document.getElementById("rd_roi").value;
  var m=document.getElementById("rd_period").value;
  var freq=document.getElementById("comp_freq").value;
     var n= m / 3;
     roi= roi / (freq * 100); 
    var M= (R * (Math.pow( (1+roi),n) - 1) )/ ( 1- Math.pow( (1+roi), (-1/3) ) );
    M=M.toFixed(2);     
document.getElementById("maturity_amt").value=M;
/*   -----------------DEBUGGING FIELDS-------------------
document.getElementById("demo").innerHTML=num;
document.getElementById("demo1").innerHTML=n;
-------------------------------------------------------------*/
}

function short()
{//formula used to calculate S.D "maturity_value=amount+(amount*days*interest/36500)"
/* where days <=365 days */ 
	var amount=document.getElementById("princ_amt").value;
	var days=document.getElementById("days").value;
	var interest=document.getElementById("interest").value;
	interest=interest/36500;
	
	var int_earn= amount * days * interest;
	var mat_val= parseFloat(int_earn) + parseFloat(amount);
	document.getElementById("maturity_amt").value=mat_val.toFixed(2);
	document.getElementById("interest_earn").value=int_earn.toFixed(2);
	
}

//-----------------------------for joint----------------------------------------------
function joint()
{
	var x= document.getElementById("cbox");
	var y= document.getElementsByClassName("app1");
	var e2= document.getElementsByClassName("app2");
	var e3= document.getElementsByClassName("app3");
	var l1= document.getElementById("msg1");
	var l2= document.getElementById("msg2");
    var j1= document.getElementById("j1");
	var j2= document.getElementById("j2");
	var j3= document.getElementById("j3");
	
	var i; 
	  if(x.checked == true)
	  { l1.innerHTML= "(Double Click on the remaining field to enable) and " ;
		l2.innerHTML= "To disable any field press  (ALT + Mouse Left Click)";
		  for(i=0 ; i<y.length ; i++)
		  {
			  y[i].disabled = false;
		  }
	    j1.disabled = false;
	  }
	  if(x.checked == false)
	  {l1.innerHTML= ""; l2.innerHTML= "";
		  for(i=0 ; i<y.length ; i++)
		  {
			  y[i].disabled = true;y[i].value="";
			  e2[i].disabled = true;e2[i].value="";
			  e3[i].disabled = true;e3[i].value="";
		  }
		j1.disabled = true; j2.disabled = true; j3.disabled = true;   
		j1.value=""; j2.value=""; j3.value="";
	  }
	  
}

function enable2()
{var x= document.getElementById("cbox");
	var e2= document.getElementsByClassName("app2");
	  var j2= document.getElementById("j2");
	if(x.checked == true)
	  {
		  for(i=0 ; i<e2.length ; i++)
		  {  
			  e2[i].disabled = false;
		  }
	    j2.disabled = false;
	  }
    	  	 
}

function enable3()
{var x= document.getElementById("cbox");
	var e3= document.getElementsByClassName("app3");
	  var j3= document.getElementById("j3");
	if(x.checked == true)
	  {
		  for(i=0 ; i<e3.length ; i++)
		  {
			  e3[i].disabled = false;
		  }
	     j3.disabled = false;
	  }
    	  	 
}

function disable2(event)
{    var j2= document.getElementById("j2");
	var e2= document.getElementsByClassName("app2");
	if(event.altKey)
	{
		for(i=0 ; i<e2.length ; i++)
		{
			e2[i].disabled = true;
		}
	   j2.disabled = true;
	}
	
}
function disable3(event)
{		var j3= document.getElementById("j3");
	var e3= document.getElementsByClassName("app3");
	if(event.altKey)
	{
		for(i=0 ; i<e3.length ; i++)
		{
			e3[i].disabled = true;
		}
	  j3.disabled = true;
	}
	
}

function nominee()
{
   var d= document.getElementsByClassName("nom");
	var n= document.getElementById("nbox");
	 if(n.checked == true)
	 {
		 for(i=0 ; i<d.length ; i++)
		 {
			 d[i].disabled = false; 
			 
		 }
	 }
	 
	 if(n.checked != true)
	 {
		 for(i=0 ; i<d.length ; i++)
		 {
			 d[i].disabled = true; 
			 
		 }
	 }
	
}