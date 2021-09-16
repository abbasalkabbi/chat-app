let form=document.querySelector(".signup"),
    button =form.querySelector(".action-button");
//stop reload page 
form.onsubmit = (e) => {
    e.preventDefault();
};
//function when onclick  submit
button.onclick =()=>{
//will send data to php 
    let xhr=new XMLHttpRequest();
    xhr.open("POST","php/signup.php",true);
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

