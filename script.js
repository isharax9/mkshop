function changeView(){

    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");  

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");
}


function signUp(){
    var f = document.getElementById("f");
    var l = document.getElementById("l");
    var e = document.getElementById("e");
    var p = document.getElementById("p");
    var m = document.getElementById("m");
    var g = document.getElementById("g");

    alert(f.value);
    alert(l.value);
    alert(e.value);
    alert(p.value);
    alert(m.value);
    alert(g.value);

}

