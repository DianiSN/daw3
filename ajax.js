function getRequestObject() {
  // Asynchronous objec created, handles browser DOM differences

  if(window.XMLHttpRequest) {
    // Mozilla, Opera, Safari, Chrome IE 7+
    return (new XMLHttpRequest());
  }
  else if (window.ActiveXObject) {
    // IE 6-
    return (new ActiveXObject("Microsoft.XMLHTTP"));
  } else {
    // Non AJAX browsers
    return(null);
  }
}


function sendRequestArticulo(){

   request=getRequestObject();
   if(request!=null)
   {
      var nombre = document.getElementById('articulo').value;
      var estadoArticulo = document.getElementById('estArticulo').value;
      var descripcion= document.getElementById('descripcion').value;
      var calle = document.getElementById('calle').value;
      var state = document.getElementById('estados').value;
      var cuidad = document.getElementById('cuidad').value;
      var codigoPostal = document.getElementById('codigoPostal').value;
     var url='insertArticulo.php?a='+nombre + '&b='+estadoArticulo + '&c='+descripcion+'&d='+calle+'&e='+state+'&f='+cuidad+'&g='+codigoPostal;
     request.open('GET',url,true);
     request.onreadystatechange = 
            function() { 
                if((request.readyState==4)){
                    // Asynchronous response has arrived
                    var ajaxResponse=document.getElementById('response');
                    ajaxResponse.innerHTML=request.responseText;
                    ajaxResponse.style.visibility="visible";
                }     
            };
     request.send(null);
   }
}