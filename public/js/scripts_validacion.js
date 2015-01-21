	function validarformulario(){
	var ced=document.userdata.cedula.value; 
		if (ced==""){
		alert("Ingrese la cédula");
		return false;
		}
		else
		if (ced.length!=10) {
		document.getElementById('cedula').innerHTML="Ingrese 10 Digitos";
		alert("Ingrese 10 digitos");
		return false;
	}
	var nom=document.userdata.nombre.value;
			if (nom=="" )
			{
				document.getElementById('nombres').innerHTML="Ingrese su Nombre por favor..!!"; //para coger el div e imprimir en pantalla el sms
				alert("Ingrese sus nombres");
				return false;
			}

				//VALIDAR CAMPO DE TEXTO APELLIDO/////////////////////////////////////////////		
			var ape=document.userdata.apellido.value;
			if (ape=="" )
			{
				document.getElementById('apellidos').innerHTML="Ingrese su Apellido por favor..!!"; //para coger el div e imprimir en pantalla el sms
				alert("Ingrese sus apellidos");
				return false;
			}

		var tlf=document.userdata.telefono.value; 
		if (tlf==""){
		document.getElementById('telefono').innerHTML="Ingrese telefono"; //para coger el div e imprimir en pantalla el sms
		alert("Ingrese su telefono");
		return false;
		}
		else
		if (tlf.length!=9) {
		document.getElementById('telefono').innerHTML="Ingrese 9 Digitos";
		alert("Ingrese 9 digitos");
		return false;
	}
	var cel=document.userdata.celular.value; 
		if (cel==""){
		document.getElementById('celular').innerHTML="Ingrese celular"; //para coger el div e imprimir en pantalla el sms
		alert("Ingrese su celular");
		return false;
		}
		else
		if (cel.length!=10) {
		document.getElementById('celular').innerHTML="Ingrese 10 Digitos";
		alert("El celular debe contener 10 digitos");
		return false;
	}

	var ciu=document.userdata.ciudad.value;
			if (ciu=="" )
			{
				//document.getElementById('nombres').innerHTML="Ingrese su Nombre por favor..!!"; //para coger el div e imprimir en pantalla el sms
				alert("Ingrese la ciudad");
				return false;
			}
	var dir=document.userdata.direccion.value;
			if (dir=="" )
			{
				//document.getElementById('nombres').innerHTML="Ingrese su Nombre por favor..!!"; //para coger el div e imprimir en pantalla el sms
				alert("Ingrese su dirección");
				return false;
			}
return true;
}

function solonumeros(e){
		key=e.keyCode || e.which;
		teclado=String.fromCharCode(key);
		numero="0123456789";
		especiales="8-37-38-46";//array
		teclado_especial=false;

		for (var i  in especiales) {
			if(key==especiales[i]){
				teclado_especial=true;
			}
		}
		if(numero.indexOf(teclado)==-1 && !teclado_especial){
			alert("ingrese solo numeros")
			return false;
		}
	}
	function sololetras(b){
		key=b.keyCode || b.which;
		teclado=String.fromCharCode(key).toLowerCase();
		letras=" abcdefghijklmnñopqrstuvwxyz";
		especiales="8-37-38-46-164-160-130-161-162-163-165";//array
		teclado_especial=false;

		for (var i  in especiales) {
			if(key==especiales[i]){
				teclado_especial=true;break;
			}
		}
		if(letras.indexOf(teclado)==-1 && !teclado_especial){
			alert("ingrese solo letras")
			return false;
		}
	}