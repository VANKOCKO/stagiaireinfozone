
var contenu = document.getElementById("contenu");
var btndeplacetoi = document.getElementById("btndeplacetoi");

btndeplacetoi.addEventListener("click",sedeplacer)
function sedeplacer () {
    var initial = 0 
    var id = setInterval(box, 10)
    function box(){
             if(initial == 350 ){
                clearInterval(id);
             }
             else {
                 initial++ 
                 contenu.style.left  = 50 + "px";
                 contenu.style.top  = 50 + "px";
                 //contenu.style.backgroundColor = "red";
             }
    }
}

