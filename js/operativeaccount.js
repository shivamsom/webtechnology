function joint()
{   var i;
  var mcb=document.getElementById("cbox");
  var app= document.getElementsByClassName("app");   
 if(mcb.checked == true) // to enable 
   {
   
    
         for(i=0 ; i < app.length ; i++)
	{
	    app[i].disabled=app[i].focus();
	}   	 
document.getElementById("demo").innerHTML="&nbsp;" ; 
document.getElementById("demo1").innerHTML="&nbsp;" ; 
   }
  if(mcb.checked == false) //to disable
      {
                   for(i=0 ; i < app.length ; i++)
	{
	    app[i].disabled = true;
	}   
document.getElementById("demo").innerHTML="" ;
document.getElementById("demo1").innerHTML="" ;      
     
       var app1=document.getElementsByClassName("app1"); 
            var cb1=document.getElementById("a1");
	var imb1=document.getElementById("pic1");
       var app2=document.getElementsByClassName("app2");
            var cb2=document.getElementById("a2");
	var imb2=document.getElementById("pic2");
       var app3=document.getElementsByClassName("app3");     
            var cb3=document.getElementById("a3");	
	var imb3=document.getElementById("pic3");
	for(i=0 ; i< app1.length ; i++) //runs 11 times
	{  app1[i].disabled = true;
	  app1[i].value=""; 
	  app2[i].disabled = true;
	 app2[i].value="";//to clear inputs
	 app3[i].disabled = true;
	 app3[i].value="";//to clear inputs
 }
	
	if( cb1.checked == true || cb2.checked == true || cb3.checked == true )
	{ cb1.checked = false;imb1.disabled = true;imb1.value="";
	  cb2.checked = false;imb2.disabled = true;imb2.value="";
	  cb3.checked = false;imb3.disabled = true;imb3.value="";
	}	 

}

}//end of joint

function enable1st()
{	 var app1=document.getElementsByClassName("app1"); 
	var cb1=document.getElementById("a1");
                 var imb1=document.getElementById("pic1");
	  if ( cb1.checked == true)
	{
	for(i=0 ; i< app1.length ; i++)
		{
		     app1[i].disabled = app1[i].focus();
		}	
	      imb1.disabled = false;
	}
	  if( cb1.checked == false )
	{
	  for(i=0 ; i< app1.length ; i++)
		{
		     app1[i].disabled = true; 
		     app1[i].value="";//to clear inputs
		}	
	        imb1.disabled = true;
		imb1.value="";  //to clear image inputs
	}  

}//end of enable1st

function enable2nd()
{	 var app2=document.getElementsByClassName("app2"); 
	var cb2=document.getElementById("a2");
	  var imb2=document.getElementById("pic2");
	  if ( cb2.checked == true)
	{
	for(i=0 ; i< app2.length ; i++)
		{
		     app2[i].disabled = app2[i].focus();
		}	
	imb2.disabled = false;
	}
	  if( cb2.checked == false )
	{
	  for(i=0 ; i< app2.length ; i++)
		{
		     app2[i].disabled = true;
		     app2[i].value="";//to clear inputs
		}	
	imb2.disabled = true;imb2.value="";  //to clear image inputs
	}  

}//end of enable2nd

function enable3rd()
{	 var app3=document.getElementsByClassName("app3"); 
	var cb3=document.getElementById("a3");
	  var imb3=document.getElementById("pic3");
	  if ( cb3.checked == true)
	{
	for(i=0 ; i< app3.length ; i++)
		{
		     app3[i].disabled = app3[i].focus();
		}	
	imb3.disabled=false;
	}
	  if( cb3.checked == false )
	{
	  for(i=0 ; i< app3.length ; i++)
		{
		     app3[i].disabled = true;
		     app3[i].value="";//to clear inputs
		}	
	imb3.disabled= true;imb3.value="";  //to clear image inputs
	}  

}//end of enable3rd()

function othdoc()
{
   var x = document.getElementById("oth");
	if( x.checked == true)
	{   document.getElementById("other").disabled = document.getElementById("other").focus();
	//instead of  'document.getElementById("other").focus()' we can use 'false'
	}

	else 
	{   document.getElementById("other").disabled = true;
	}
}



