let miCheckbox1 = document.getElementById("activar1");
let miCheckbox2 = document.getElementById("activar2");
let miCheckbox3 = document.getElementById("activar3");
let miCheckbox4 = document.getElementById("activar4");

let msg = document.getElementById("msg")
let msg2 = document.getElementById("msg2")

miCheckbox1.addEventListener("click", function(){
    if(miCheckbox1.checked){
        msg.innerText = "Estamos agradecidos de darle la mejor experiencia!"
        msg2.innerText = ""

    }else{
        msg.innerText = ""
        msg2.innerText = ""

    }
});
miCheckbox2.addEventListener("click", function(){
    if(miCheckbox2.checked){
        msg.innerText = "Agradeceriamos un breve feedback"
        msg2.innerText = ""
    }else{
        msg.innerText = ""
        msg2.innerText = ""

    }
});
miCheckbox3.addEventListener("click", function(){
    if(miCheckbox3.checked){
        msg.innerText = "¿Nos podria contar el incoveniente que ha tenido?"
        msg2.innerText = ""

    }else{
        msg.innerText = ""
        msg2.innerText = ""

    }
});
miCheckbox4.addEventListener("click", function(){
    if(miCheckbox4.checked){
        msg.innerText = "Lamentamos que haya tenido esta mala experiencia."
        msg2.innerText = "Agradeceriamos su feedback"
    }else{
        msg.innerText = ""
        msg2.innerText = ""
    }
});

document.getElementById("msg").style.color = "#fa7a1f"
document.getElementById("msg").style.fontWeight = "bold"
document.getElementById("msg").style.fontSize = "1.5em"

document.getElementById("msg2").style.color = "#F4A890"
document.getElementById("msg2").style.fontWeight = "bold"
document.getElementById("msg2").style.fontSize = "1em"
document.getElementById("msg2").style.paddingLeft = "3em"

