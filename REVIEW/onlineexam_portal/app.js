const reg_btn = document.querySelector("#register-btn");
const log_btn = document.querySelector("#login-btn");
const container = document.querySelector(".container");

reg_btn.addEventListener('click', () =>{
    container.classList.add("register-mode");
});
log_btn.addEventListener('click', () =>{
    container.classList.remove("register-mode");
});


