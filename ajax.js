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


function sendRequestArticulo(articuloId){

   request=getRequestObject();
   if(request!=null)
   {
     
      
     var url='viewArticuloInfo.php?a='+articuloId;
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


function sendVenderArticulo(articuloId,user){

   request=getRequestObject();
   if(request!=null)
   {
     
      
     var url='controlVendido.php?a='+articuloId;
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


function sendDeleteArticulo(articuloId){

   request=getRequestObject();
   if(request!=null)
   {
     
      
     var url='deleteArticulo.php?a='+articuloId;
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