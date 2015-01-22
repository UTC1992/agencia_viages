function validarformulario(){
	var ced=document.vueloData.numero.value; 
		if (ced==""){
		alert("Ingrese el número");
		return false;
		}
	var ced=document.vueloData.fecha.value; 
		if (ced==""){
		alert("Ingrese la fecha");
		return false;
		}
	var ced=document.vueloData.hora_salida.value; 
		if (ced==""){
		alert("Ingrese la hora de salida");
		return false;
		}
	var ced=document.vueloData.hora_llegada.value; 
		if (ced==""){
		alert("Ingrese la hora de llegada");
		return false;
		}
	var ced=document.vueloData.origen.value; 
		if (ced==""){
		alert("Ingrese el origen");
		return false;
		}
	var ced=document.vueloData.destino.value; 
		if (ced==""){
		alert("Ingrese la destino");
		return false;
		}
	var ced=document.vueloData.puerta_embarque.value; 
		if (ced==""){
		alert("Ingrese la puerta de embarque");
		return false;
		}

	var ced=document.vueloData.aerolinea_id.value; 
		if (ced==""){
		alert("Ingrese la aerolínea");
		return false;
		}
	var ced=document.vueloData.avion_id.value; 
		if (ced==""){
		alert("Ingrese el avión");
		return false;
		}
//return true;
}


function ValidarCedula(ced){ 
			var i;
 			var cedula;
 			var acumulado;
 			cedula=ced;
 			var instancia;
 			acumulado=0;
 			for (i=1;i<=9;i++)
 			{
  				if (i%2!=0)
  				{
   					instancia=cedula.substring(i-1,i)*2;
   					if (instancia>9) instancia-=9;
  				}
  				else instancia=cedula.substring(i-1,i);
  				acumulado+=parseInt(instancia);
 			}
 			while (acumulado>0)
  				acumulado-=10;
 			if (cedula.substring(9,10)!=(acumulado*-1))
 			{
  				return false; // cedula mal ingresada
 			}
		return true;  // cedula bien ingresada
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