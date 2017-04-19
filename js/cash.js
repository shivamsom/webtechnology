function mydate()
{
 var x= new Date.getDate();
var y= new Date.getMonth()+1;
var z=new Date.getFullYear();
document.getElementById("cashdate").value=x+"-"+y+"-"+z;
}