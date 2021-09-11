
 function Userauth(){
        let form = document.form;
        form.addEventListener('submit',function(e){
            e.preventDefault();
            const data = new FormData(this);
            login(data);
        })
    }
    Userauth();

    var obj={};
 function login(data) {
	for (var key of data.keys()) {
		obj[key] = data.get(key);
	}
// 
    fetch('http://localhost:8080/questionAnswer/Backend/RESTAPI/login.php',{
      method:"Post",
        headers:{
          "Content-Type": "application/json",
        },
      body: JSON.stringify(obj)
  
    }).then(res=>{return res.json()}).then(resp=>{
      if(resp.statusCode==200){
        sessionStorage.setItem("token", resp.token);
        localStorage.setItem("responce",JSON.stringify(resp));
        window.location.replace("http://localhost:8080/questionAnswer/dashbord.html");
      }
    }).catch(error=> { 
      console.log(error);
    })
  };

   
