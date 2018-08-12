function SomenteNumero(e){
	var tecla=(window.event)?event.keyCode:e.which;   
	if((tecla>47 && tecla<58)) return true;
	else{
		if (tecla==8 || tecla==0) return true;
		else  return false;
	}
}

function redireciona(){
	window.location = "./cadastro.php";
}

  function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
      if (tecla==8 || tecla==0) return true;
      else  return false;
    }
  }

  function confSubmit(form) {
    if (confirm("Tem certeza que quer alterar os dados?")) {
      form.submit();
    }

    else {
      alert("Os dados não foram alterados!");
      document.getElementById('form_id').action = "./user.php";
      //break;
    }
  }

  // validador CPF
function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;

    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }

    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
}

function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 33 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
        return false;
    }
    return true;
}

function validaForm() {
                var campoEmail = document.getElementById("email");
                var divRetorno = document.getElementById("retorno");
                if(campoEmail.value.indexOf("@") == -1) {
                    alert('Email invalido');
                    return false;
                }
                return true;
            }
