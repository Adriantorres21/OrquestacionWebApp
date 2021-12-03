function seleccionarFila(fila){
    var renglon = document.getElementsByTagName("tr");
    
    for(var i = 0; i<renglon.length; i++){
        renglon[i].className = "original";
    }

    fila.className = "seleccionada";

    var id = fila.getElementsByTagName("td")[0].innerText;
    var nombre = fila.getElementsByTagName("td")[1].innerText;
    var anios = fila.getElementsByTagName("td")[2].innerText;
    var raza = fila.getElementsByTagName("td")[3].innerText;
    var sexo = fila.getElementsByTagName("td")[4].innerText;
    var dueno = fila.getElementsByTagName("td")[5].innerText;

    var txtID = document.getElementById("id");
    txtID.value = id;

    var txtNombre = document.getElementById("nombre");
    txtNombre.value = nombre;

    var txtAnios = document.getElementById("edad");
    txtAnios.value = anios;

    var txtRaza = document.getElementById("raza");
    txtRaza.value = raza;

    var txtSexo = document.getElementById("sexo");
    txtSexo.value = sexo;

    var txtDueno = document.getElementById("dueno");
    txtDueno.value = dueno;
    //console.log(id, nombre, anios, raza, sexo, dueno);
}

function modificaM(){
    var txtID = document.getElementById("id").value;
    var txtNombre = document.getElementById("nombre").value;
    var txtAnios = document.getElementById("edad").value;
    var txtRaza = document.getElementById("raza").value;
    var txtSexo = document.getElementById("sexo").value;
    var txtDueno = document.getElementById("dueno").value;

    var datos = { 
        "id":txtID,
        "nombre": txtNombre,
        "anios":txtAnios,
        "raza":txtRaza,
        "sexo":txtSexo,
        "dueno":txtDueno
     };
    
     $.ajax({
         url: 'Controlador/MascotasModificar.php',
         data: datos,
         type: 'POST',
         dataType: 'json'
     }).done(function(data){
        if(data){
            (async () =>{
                alert("Modificado");
                location.reload();
            })()
            
        }else{
            alert(data)
        }
     }).fail(function(data){
         console.log(data);
     })
}

function eliminarE(){
    var txtID = document.getElementById("id").value;

    var datos = { 
        "id":txtID
     };
    
     $.ajax({
         url: 'Controlador/MascotasEliminar.php',
         data: datos,
         type: 'POST',
         dataType: 'json'
     }).done(function(data){
        if(data){
            (async () =>{
                alert("Eliminado");
                location.reload();
            })()
            
        }else{
            alert(data)
        }
     }).fail(function(data){
         console.log(data);
     })
}