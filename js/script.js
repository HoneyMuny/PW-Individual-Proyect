window.onload=function(){
    document.getElementById("logo").onmouseover=function(){
        alert("Compra en mi tienda a h o r a");
    }

    btn1=document.getElementById("btn1");
    btn2=document.getElementById("btn2");
    btn3=document.getElementById("btn3");

    btn1.onmouseover=function(){
        btn1.style.color="orange";
    }
    btn1.onmousedown=function(){
        btn1.style.color="blue";
    }
    btn1.onmouseup=function(){
        btn1.style.color="#09F"
    }
    btn1.onmouseout=function(){
        btn1.style.color="pink"
    }
}
