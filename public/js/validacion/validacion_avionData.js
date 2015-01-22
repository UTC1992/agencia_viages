	
//adminData, aerolineaData, avionData,clientedata 
	function validarformulario(){
	
	var des=document.avionData.descripcion.value;
			if (des=="" )
			{
				alert("Ingrese su descripción");
				return false;
			}

	var tip=document.avionData.tipo.value;
		if (tip=="" )
		{
			alert("Ingrese el Tipo");
			return false;
		}

	var plac=document.avionData.placa.value;
			if (plac=="" )
			{
				alert("Ingrese la placa");
				return false;
			}

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