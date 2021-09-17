
// textarea auto size
let textarea = document.querySelector(".context");
function resizeTextarea(ev) {
    this.style.height = "24px";
    this.style.height = this.scrollHeight + 12 + "px";
}
textarea.addEventListener("input", resizeTextarea);
// textarea auto size END
let form=document.querySelector(".chat-form"),
    button =form.querySelector(".send");
//stop reload page 
form.onsubmit = (e) => {
    e.preventDefault();
};
//function when onclick  submit
button.onclick =()=>{
//will send data to php 
    let xhr=new XMLHttpRequest();
    xhr.open("POST","php/chat.php",true);
    //when load php
    xhr.onload=()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    let formdata= new FormData(form)
    xhr.send(formdata);
}