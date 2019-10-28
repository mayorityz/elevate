// check submitted form...
let getStartedForm = document.querySelector("#modal_form");
let submitBtn      = document.querySelector("#submit_modal_form");

submitBtn.addEventListener("click", e=>{
    getStartedForm.submit();
})