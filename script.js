function changeView(){

    
    var signInBox = document.getElementById("signInBox");
    var signUpBox = document.getElementById("signUpBox");  

    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");
}


function signUp(){
    var f = document.getElementById("f");
    var l = document.getElementById("l");
    var e = document.getElementById("e");
    var p = document.getElementById("p");
    var m = document.getElementById("m");
    var g = document.getElementById("g");

    var form = new FormData;
    
    form.append("f",f.value);
    form.append("l",l.value);
    form.append("e",e.value);
    form.append("p",p.value);
    form.append("m",m.value);
    form.append("g",g.value);
    
    
    
}

