function hideRegister(){
  let r=document.getElementsByClassName("register-form")[0];
  let h=document.getElementsByClassName("login-form")[0];
  r.classList.add("hide");
  h.classList.remove("hide");

}
function hideLogin(){
  let r=document.getElementsByClassName("register-form")[0];
  let h=document.getElementsByClassName("login-form")[0];

  h.classList.add("hide");
  r.classList.remove("hide");
}
