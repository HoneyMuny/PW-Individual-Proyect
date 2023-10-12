window.onload=function(){
    document.getElementById("logo").onmouseover=function(){
        alert("Compra en mi tienda a h o r a");
    }

    btn1=document.getElementById("btn1");
    btn2=document.getElementById("btn2");
    btn3=document.getElementById("btn3");
    btn4=document.getElementById("menu");

    function btnOnMouseOver(btn){
        btn.style.color="orange";
    }
    function btnOnMouseDown (btn){
        btn.style.color="blue";
    }
    function btnOnMouseUp(btn){
        btn.style.color="#09F"
    }
    function btnOnMouseOut(btn){
        btn.style.color="pink"
    }

    btn1.addEventListener("mouseOver", function(){btnOnMouseOver(btn1);});
    btn1.addEventListener("mouseDown", function(){btnOnMouseDown(btn1);});
    btn1.addEventListener("mouseUp", function(){btnOnMouseUp(btn1);});
    btn1.addEventListener("mouseOut", function(){btnOnMouseOut(btn1);});

    btn2.addEventListener("mouseOver", function(){btnOnMouseOver(btn2);});
    btn2.addEventListener("mouseDown", function(){btnOnMouseDown(btn2);});
    btn2.addEventListener("mouseUp", function(){btnOnMouseUp(btn2);});
    btn2.addEventListener("mouseOut", function(){btnOnMouseOut(btn2);});

    btn3.addEventListener("mouseOver", function(){btnOnMouseOver(btn3);});
    btn3.addEventListener("mouseDown", function(){btnOnMouseDown(btn3);});
    btn3.addEventListener("mouseUp", function(){btnOnMouseUp(btn3);});
    btn3.addEventListener("mouseOut", function(){btnOnMouseOut(btn3);});

    btn4.addEventListener("mouseOver", function(){btnOnMouseOver(btn4);});
    btn4.addEventListener("mouseDown", function(){btnOnMouseDown(btn4);});
    btn4.addEventListener("mouseUp", function(){btnOnMouseUp(btn4);});
    btn4.addEventListener("mouseOut", function(){btnOnMouseOut(btn4);});

    let osc=document.getElementById("oscuro");
    btn1.addEventListener("click", shSearch);
    osc.addEventListener("click", shSearch);

    function shSearch(){
        if (osc.style.display=="" || osc.style.display=="none") {
            osc.style.display="inline-block";
        } else {
            osc.style.display="none";
        }
    }


}
