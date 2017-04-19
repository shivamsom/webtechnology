var operand1=0 , operand2=0, operator, result, flag=0;//to clear previous values on display
function calc( z )
{  switch(z)
	{
		case '+' :document.getElementById("opr").value= "+";
					operand1= document.getElementById("disp").value;
					operator= document.getElementById("opr").value;
					 flag= 1;
					 break;
		
		case '-' : 
					document.getElementById("opr").value= "-";
					operand1= document.getElementById("disp").value;
					operator= document.getElementById("opr").value;				
					flag= 1;
					break;
		
		case '*' :document.getElementById("opr").value= "*" ;
					operand1= document.getElementById("disp").value;
					operator= document.getElementById("opr").value;
					 flag= 1;
					break;
		
		case '/' :document.getElementById("opr").value= "/";
					operand1= document.getElementById("disp").value;
					operator= document.getElementById("opr").value;
					 flag= 1;
					break;
		case '%' :document.getElementById("opr").value= "%";
					operand1= document.getElementById("disp").value;
					result= parseFloat(operand1 / 100);
				   document.getElementById("disp").value= result;
				   document.getElementById("disp").style.color="red";
								document.getElementById("disp").style.backgroundColor="yellow";
					 flag= 0;
					break;
		
		case '=' :/*document.getElementById("d1").innerHTML = operand1;
				  document.getElementById("d2").innerHTML = operand2;
				  document.getElementById("d3").innerHTML = operator;
					(for debugging)*/	
					operand1 = parseFloat(operand1);
					operand2 = parseFloat(operand2);
						switch(operator)
						{
							case '+' : result= operand1 + operand2;
						//(for debugging)document.getElementById("d4").innerHTML= result;
								document.getElementById("disp").style.color="red";
								document.getElementById("disp").style.backgroundColor="yellow";
										break;
							case '-' : result= operand1 - operand2;
							document.getElementById("disp").style.color="red";
								document.getElementById("disp").style.backgroundColor="yellow";
										break;
							case '*' : result= operand1 * operand2;
							document.getElementById("disp").style.color="red";
								document.getElementById("disp").style.backgroundColor="yellow";
										break;
							case '/' : result= operand1 / operand2;
							document.getElementById("disp").style.color="red";
								document.getElementById("disp").style.backgroundColor="yellow";
										break;
								
						}
						document.getElementById("disp").value= result;
					break;
	}
    
}

function clrdisp()
{	result = 0,operand1= 0 , operand2 = 0, operator= 0;
	document.getElementById("disp").value='';
	document.getElementById("opr").value='';
	document.getElementById("disp").style.color="black";
	document.getElementById("disp").style.backgroundColor="white";
	
}

function bksp()
{
	var n;
	n= document.getElementById("disp").value;
	    n= parseInt(n/10);
		document.getElementById("disp").value= n;
		
}
function numb( x )
{   var numb;
	switch(x)
	{    
		case "1" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;//flag is made 0 to allow entry of other nos without clearing display
					    }
					numb= document.getElementById("disp");
					numb.value= numb.value + "1";
					operand2= numb.value;
				
			break;
			
		case "2" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					
					numb= document.getElementById("disp");
					numb.value= numb.value + "2";
					operand2= numb.value;	 
			break;
			
		case "3" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb= document.getElementById("disp");
					numb.value= numb.value + "3";
					operand2= numb.value;	 
			break;
			
		case "4" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + "4";
					operand2= numb.value;	 
			break;
			
		case "5" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + "5";
					operand2= numb.value;	 
			break;
			
		case "6" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + "6";
					operand2= numb.value;	 
			break;
			
		case "7" :	if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + "7";
					operand2= numb.value;	 
			break;
		case "8" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + "8";
					operand2= numb.value;	 
			break;
		case "9" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + "9";
					operand2= numb.value;	 
			break;
		case "0" :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + "0";
					operand2= numb.value;	 
			break;
		case "." :if(flag == 1)
						{document.getElementById("disp").value="";flag= 0;}
					numb=	document.getElementById("disp");
					numb.value= numb.value + ".";
					operand2= numb.value; 	
	}

}