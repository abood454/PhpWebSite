function fun(){
    var a=document.getElementById("exampleInputPassword1").value;
    var b=document.getElementById("exampleInputPassword2").value;
    if(a!=b) {alert("Confirm your Password"); return false;}
    else return true;
}