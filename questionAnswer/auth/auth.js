var obj={};
 function senddata(data) {
	for (var key of data.keys()) {
		obj[key] = data.get(key);
	}
// 
    fetch('http://localhost:8080/questionAnswer/Backend/RESTAPI/create.php',{
      method:"Post",
        headers:{
          "Content-Type": "application/json",
        },
      body: JSON.stringify(obj)
  
    }).then(res=>{return res.json()}).then(resp=>{
      if(resp.status==200){
        window.location.replace("http://localhost:8080/questionAnswer/auth/login.html")
      }
    }).catch(error=> { 
      console.log(error);
    })
  }

  export default senddata;