function Contactos(){
    
    //alert("Usted a entrado a JavaScript");

    $nombre = document.getElementById("nombre").value;
    $correo = document.getElementById("email").value;
    $telefono = document.getElementById("telefono").value;
    $mensaje = document.getElementById("mensaje").value;
    $opciones = document.getElementById("opciones").selectedIndex;

    if ($nombre == "" ){
        alert("El campo de nombre es obligatorio");
        return false;
    }
    
    if($correo == ""){
        alert("El campo de e-mail es obligatorio");
        return false;
    }

    if($telefono == ""){
        alert("El numero de telefono es obligatorio");
        return false;
    }

    if($mensaje === ""){
        alert("Dejanos un mensaje!");
        return false;
    }

    if($opciones == 0){
        alert("Seleccione una de las opciones");
        return false;
    }
    return false;
}