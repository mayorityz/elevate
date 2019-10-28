let loginForm = document.querySelector(".loginform");
let display = document.querySelector(".form_alert");
loginForm.addEventListener('submit', e=>{
    e.preventDefault();
    let url         = loginForm.getAttribute('action');
    let formdetails = new FormData(loginForm);
    fetch(url,{
        method: "POST",
        body  : formdetails
    })
    .then(res=>res.text())
    .then(res=>{
        if(res == "Invalid Credentials"){
            display.innerHTML = "<div class='alert alert-warning text-center'>"+res+"</div>";
        } else{
            window.location=url+"/redirect";
        }        
    })
})