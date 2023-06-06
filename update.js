const btns=document.querySelectorAll("i");
const unames=document.querySelectorAll(".uname");
const emails=document.querySelectorAll(".email");
const phones=document.querySelectorAll(".phone");
const unameInp=document.querySelector(".uname-inp");
const emailInp=document.querySelector(".email-inp");
const phoneInp=document.querySelector(".phone-inp");
const emailValue=document.querySelector(".email-value");

let email;

btns.forEach((item,i)=>{
    item.addEventListener("click",()=>{
        email=emails[i].innerText;

        unameInp.value=unames[i].innerText;
        emailInp.value=emails[i].innerText;
        phoneInp.value=phones[i].innerText;
        emailValue.value=email;
    })
})