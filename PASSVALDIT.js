function valdiatePass(val){
	var err=null;
	if(val.search(/^[^\s]{8,}$/) !== 0))
		err="Password myst be at least 8 charcters and can't contain spaces";
	return err;
}

function valdiateconfirmpass(val,val){
	var err=null;
	if (val!==val)
		err="Passwords not matching";
	return err;
}
function setError(element, err) {
    element.parentElement.nextElementSibling.firstElementChild.innerHTML = err;
}
function clearErrors() {
    var errorsCells = document.getElementsByClassName("error-cell");
    for (let i = 0; i < errorsCells.length; i++) {
        errorsCells[i].firstElementChild.innerHTML = "";
    }
}
function validateInput() {
	var passtxt = document.getElementById("exampleInputPassword1");
	var confirmpasstxt=document.getElementById("exampleInputPassword2");
clearErrors();
var isValid=true;
var err= valdiatePass(passtxt.value);
if (err!==null){
	setError(exampleInputPassword1,err);
	isValid=flase;
}
err = valdiateconfirmpass(confirmpasstxt.value);
if (err!==null){
	setError(exampleInputPassword2,err);
	isValid=false;
	}
	retrurn isValid;
}
	

