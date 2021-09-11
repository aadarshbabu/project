document.addEventListener('DOMContentLoaded', (event) => {
  
  
    async function fetchqestion(){
        let res= await fetch("http://localhost:8080/questionAnswer/Backend/RESTAPI/fetchquestion.php");
            if(res.status==200){
                let questions = await res.json()
              setdom(questions);
            }
    }
    fetchqestion();
    
    function setdom(questions){
        questions.map( (value)=>{
            let qes= `
          <div id="qid${value.id}"> 
            <p>
            <a id="${value.id}" class="btn" data-bs-toggle="collapse" href="#collapseExample${value.id}"
                role="button" aria-expanded="false" aria-controls="collapseExample">${value.questionTitle} +
            </a>
            </p> 
            </div>`
            document.querySelector("#ans").insertAdjacentHTML('beforeend', qes);
        })
    }

    var arr=[];
    document.querySelector(".answer").addEventListener("click",(event)=>{
        let id = event.target.id;
       let v= arr.find(element => element == id)
        if(!v)
        {
            console.log(id);
            arr.push(id);
            fetchans(id);
        }   

    })

    function error(bool){
        let err= document.querySelector('.ans-div')
        let errmsg= `<div id='error' class="alert alert-info" role="alert">
            Data Not found
        </div>`;
        if(bool){   
            err.insertAdjacentHTML('afterbegin',errmsg);
        }else{
        document.querySelector('#error').remove();
        }
   
    }

    async function fetchans(id){
        const uri = `http://localhost:8080/questionAnswer/Backend/RESTAPI/fetchAnswer.php?q=${id}`;
          let res = await fetch(uri);
          if(res.status==200){
              let ans = await res.json();
            setans(ans);
            error(false);
          }else{
               error(true);
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
    

  })