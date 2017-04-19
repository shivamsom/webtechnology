function test()
{
  var ln=document.getElementById("ln").value;
  var fn=document.getElementById("fn").value;
  var mn=document.getElementById("mn").value;
  var age=document.getElementById("age").value;
        
	if( (ln=="")&&(mn=="")&&(fn=="") )
	{
                 	alert("PLEASE ENTER ALL THE DETAILS");
	document.getElementById("ln").focus();
	
                   }
	if( (ln=="") )
	{
	alert("PLEASE ENTER LAST NAME");document.getElementById("ln").focus();
	}
	else if( (fn=="") )
	{
	alert("PLEASE ENTER FIRST NAME");document.getElementById("fn").focus();
	}
	else if( (mn=="") )
	{
	alert("PLEASE ENTER MIDDLE NAME");document.getElementById("mn").focus();
	}
	else if( (age=="") )
	{
	alert("PLEASE ENTER AGE");document.getElementById("age").focus();
	}

	if(age < 10)
	{
	alert("AGE MUST BE LIE BETWEEN 10 AND 30");document.getElementById("age").focus();
	}
}