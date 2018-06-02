$(document).ready(function(){
    carga();
});

function carga(){
    var tablaDatos = $("#datos");
    var route = "http://localhost:8000/generos";
    $('#datos').empty();
    $.get(route ,function(res){
         $(res).each(function(key,value){
             tablaDatos.append("<tr><td>"+value.genre+"</td> <td><button value='"+value.id+"' OnClick='mostrar(this)' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button>"+
                                "<button class='btn btn-danger' onclick='eliminar(this)' value='"+value.id+"'>Eliminar</button></td> </tr>)");
         });
    });
}

function eliminar(btn){
    var route ="http://localhost:8000/genero/"+btn.value;
    var token = $('#token').val();

    $.ajax({
        url:route,
        headers: {"X-CSRF-TOKEN": token},
        type:'DELETE',
        dataType:'json',
        success:function(){
            carga();
            $('#msj-success-delete').fadeIn();
        }
    });
}

function mostrar(btn){
    var route = "http://localhost:8000/genero/"+btn.value+"/edit";
    $.get(route,function(res){
        $('#genre').val(res.genre);
        $('#id').val(res.id);
    });
}

$('#actualizar').click(function(){
    var value = $("#id").val();
    var dato = $('#genre').val();
    var route ="http://localhost:8000/genero/"+value;
    var token = $('#token').val();

    $.ajax({
        url:route,
        headers: {"X-CSRF-TOKEN": token},
        type:'PUT',
        dataType:'json',
        data:{genre:dato},
        success:function(){
            carga();
            $('#myModal').modal('toggle');
            $('#msj-success').fadeIn();
        }
    });
});

