
function validation()
{
    var passowrd=document.getElementById('reg_password').value;
 var re_password=document.getElementById('re_password').value;

 if (passowrd.length<=8) {
  document.getElementById("msg").innerHTML="Password Less then 8 Charestor";
   return false;
 }
 if(passowrd.length === re_password.length && passowrd===re_password)
  {
      // alert("password are match");
      return true; 
      
  }
 
    else
    {
      document.getElementById("msg").innerHTML="Your Password Don't hase same";
    return false;
    }

    

  
}






