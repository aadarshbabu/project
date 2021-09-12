  
  

document.addEventListener('DOMContentLoaded', (event) => {
    
    try {
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        
        myModal.addEventListener('shown.bs.modal', function () {
          myInput.focus()
        }) 
    } catch (error) {
        console.log(error)
    }
  
    async function fetchqestion(){
        let res= await fetch("http://localhost:8080/questionAnswer/Backend/RESTAPI/fetchquestion.php");
            if(res.status==200){
                let questions = await res.json()
              setdom(questions);
            }
    }
    fetchqestion();


    function setdom(questions){
            let {id} =JSON.parse(localStorage.getItem("responce"));

        questions.map( (value)=>{
            let button="";
            if(id!==value.userid){
                button = `<button  type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="ans-btn" id="${value.id}"> Submit Your answer </button>`
            }
            let qes= `
          <div id="qid${value.id}"> 
            <p>
            <a id="${value.id}" class="btn btn-drop" data-bs-toggle="collapse" href="#collapseExample${value.id}"
                role="button" aria-expanded="false" aria-controls="collapseExample">${value.questionTitle} +
            </a>
            ${button}
            </p>
               
            </div>`
            document.querySelector("#ans").insertAdjacentHTML('beforeend', qes);
        })
    }

    //  User Click answer btn..

    document.querySelector(".ans-div").addEventListener("click",(e)=>{
       let  qid =e.target.id;
        getanswer(qid);

    })

    function getanswer(qid){
        answer={
            questionid:qid
        };
       
       const form = document.answer;
      form.addEventListener("submit", function(e){
            e.preventDefault();
            var data = new FormData(this);
            e.stopImmediatePropagation();
            for (var key of data.keys()) {
                answer[key] = data.get(key);
            }
            setanswer(answer);
            this.childNodes[1].value="";
        });
     
    }

   async function setanswer(answer){
        try {
            let res= await fetch("http://localhost:8080/questionAnswer/Backend/RESTAPI/setanswer.php",{
                method:"post",
                headers:{
                   "Content-Type": "application/json",
                },
                body: JSON.stringify(answer)
            });
               if(res.status==200){
                    let resmsg= await res.json();
                    msg(true, resmsg.msg);
                    console.log(resmsg);
               }
        } catch (error) {
            console.error(error);
        }   
   
        
    }


    var arr=[];
    document.querySelector(".answer").addEventListener("click",(event)=>{
        if(event.target.tagName.toLowerCase() === 'a'){
            let id = event.target.id;
            event.stopPropagation();
            if(isNaN(id))
            {
                return false;
            }
            let v= arr.find(element => element == id)
            if(!v)
            {
                arr.push(id);
                fetchans(id);
            } 
        }
     
     
    })

  
    async function fetchans(id){
        const uri = `http://localhost:8080/questionAnswer/Backend/RESTAPI/fetchAnswer.php?q=${id}`;
          let res = await fetch(uri);
          if(res.status==200){
              let ans = await res.json();
            setans(ans);
            msg(false,"");
          }else{
               msg(true,"Data Not found");
          }
    }


    function setans(ans){
      
        ans.map((value)=>{

            const ansd= `
            <div class="collapse show" id="collapseExample${value.questionid}">
            <div class="card card-body">
              ${value.answerDesc}
            </div>
        </div>`

        document.querySelector("#qid"+value.questionid).insertAdjacentHTML('beforeend', ansd);

        });
    }

    function msg(bool,msg){
        let err1= document.querySelector('#error')
        if(bool){  
            err1.innerHTML=msg;
            err1.style.display="block";
            setTimeout(() => {
                err1.style.display="none";
            }, 3000);
        }else{
            // err1.style.display="none";
        }
    
    }
    //  Submit question to database.//  Submit question to database.
      function getquestion(){
        let form=document.questionform;
        form.addEventListener('submit', function(event){
            event.preventDefault();
            let data= new FormData(this);
            setdata(data);
           this.childNodes[1].value="";
        })
     }
     getquestion();
    
     async function setdata(data){
         let localres = JSON.parse(localStorage.getItem("responce"));
         let ques={
            userid: localres.id
         };
         for (var key of data.keys()) {
             ques[key] = data.get(key);
         }
         try {
            let res = await fetch("http://localhost:8080/questionAnswer/Backend/RESTAPI/setquestion.php",{
                method: "POST",
                headers:{
                 "Content-Type": "application/json",
                },
                body: JSON.stringify(ques)
             });
         
             if(res.status==200){
                 let msg = await res.json();
                console.log(msg);
                msg.code==200 ? msg(true, msg.msg): msg(true,"Something Went wrong");
             }  
         } catch (error) {
             console.log(error);
         }
     }
    


  })
