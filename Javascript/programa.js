
//var id = 0;

function crear_px(){
    //las variables que se concectan con la interfaz
    var crear_tbl = document.getElementById("add_tl");
    let id1 = document.getElementById("id").value;
    let nombre_px_inp = document.getElementById("nombre_px").value;
    let cantidad_px_inp = document.getElementById("cant_px").value;

    //donde va la creacion de tablas

    var new_row = crear_tbl.insertRow(crear_tbl.rows.length);
    new_row.insertCell(0).innerHTML = id1;
    new_row.insertCell(1).innerHTML = nombre_px_inp;
    new_row.insertCell(2).innerHTML = cantidad_px_inp;
}

