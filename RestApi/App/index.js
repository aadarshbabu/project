window.onload = function () {
  document.getElementById("form").addEventListener("click", (event) => {
    event.preventDefault();
  });
};

async function data() {
  let username = document.getElementById("name").value;
  let useremail = document.getElementById("email").value;

  let data = {
    username,
    useremail,
  };

  let res = await fetch("http://localhost:8080/RestApi/Backend.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },

    body: JSON.stringify(data),
  });

  const d = await res.json();
  document.getElementById(
    "data"
  ).innerHTML = `${d.username}  ${d.useremail} ${d.massage} `;

  //location.replace("http://localhost:8080/RestApi/backend.php");
}
