function validarNome(){
    var nome = document.getElementById("txtName").value;

    if(nome.length>3){
        return true;
    }
    else{
        return false;
    }
}
function validarEmail(){
    var email = document.getElementById("txtEmail").value;

    if(email.length>5){
        return true;
    }
    else{
        return false;
    }
}
function validarAssunto(){
    var assunto = document.getElementById("txtSubject").value;

    if(assunto.length>3){
        return true;
    }
    else{
        return false;
    }
}
function validarMensagem(){
    var mensagem = document.getElementById("txtMessage").value;

    if(mensagem.length>3 && mensagem.length <= 500){
        return true;
    }
    else{
        return false;
    }
}

function verErro(){

if(validarNome() && validarEmail() && validarAssunto() && validarMensagem()){
    alert("Seu contato conosco foi feito com Sucesso!");
    return true;
}
else{
    if(validarNome()!= true){
        alert("ERROR: campo name requer mais caracteres!");
    } 
    else if(validarEmail()!= true){
        alert("ERROR: campo e-mail requer mais caracteres!");
    } 
    else if(validarAssunto()!= true){
        alert("ERROR: campo subject requer mais caracteres!");
    } 
    else if(validarMensagem()!= true){
        alert("ERROR: de quantidade de caracteres no campo message!");
    } 
    return false;

}


}