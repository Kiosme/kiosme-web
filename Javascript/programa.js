
//var id = 0;

function crear_px(){
    //id += 1
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
    //guardado en localstorage
    
    //localStorage.setItem("id",id)
    //localStorage.setItem("nombre_px_inp",nombre_px_inp)
    //localStorage.setItem("cantidad_px_inp",cantidad_px_inp)
}


function esconder_mod_menu(){}

function editar_px(){}


function borrar(){}

let data = [{}];

