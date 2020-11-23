
function cheakEmail(email)
{
  
 var btn=document.getElementById('sinupbtn');

  var req=new XMLHttpRequest();


    
  req.open("post","http://localhost/project/Password%20saver/test.php?Email="+email,true);
//   req.getResponseHeader('content-type','application/x-www-form-urlencoded');


 
 
   req.onload=function(){
       var result=this.responseText
      
     if(result>0)
        {
         document.getElementById("emailmsg").innerHTML="**Email Already Use";
         document.getElementById("validemailmsg").innerHTML=" ";
          btn.style.display='none';
        
        }
        
        else{
            document.getElementById("validemailmsg").innerHTML="Valid Email";
            document.getElementById("emailmsg").innerHTML=" ";
            btn.style.display=null;
        }
    }
    
 


  req.send();
}

function validEmail(){

    var req=new XMLHttpRequest();
    req.open("get","http://localhost/project/Password%20saver/login.php",true);

    req.onload=function(){
     document.getElementById('invalid').innerHTML=this.responseText;

    }

}