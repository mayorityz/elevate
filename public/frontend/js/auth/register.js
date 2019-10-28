let regForm = document.querySelector(".regform");
let display = document.querySelector(".form_alert");

regForm.addEventListener('submit', e=>{
    e.preventDefault();
    let url         = regForm.getAttribute('action');
    let formdetails = new FormData(regForm);
    
    fetch(url,{
        method: "POST",
        body  : formdetails
    })
    .then(res=>res.text())
    .then(res=>{
        display.innerHTML = res;
    })
})