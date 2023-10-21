function tipo(){
    $.ajax({
        url:'../controlador/controlador_tipo.php',
        type:'POST'
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>"; 
            }
            $("#sel_tipo").html(cadena);
            var iddetipo = $("#sel_tipo").val();
            listar_pronvincia(iddetipo);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_tipo").html(cadena);
        }
    })
}

function listar_comida(iddetipo){
    $.ajax({
        url:'../controlador/controlador_comida.php',
        type:'POST',
        data:{
            iddetipo:iddetipo
        }
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                
            }
            $("#sel_comida").html(cadena);
            var iddecomida = $("#sel_comida").val();
            listar_distrito(iddecomida);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_comida").html(cadena);
        }
    })
}

function listar_receta(iddecomida){
    $.ajax({
        url:'../controlador/controlador_receta.php',
        type:'POST',
        data:{
            iddecomida:iddecomida
        }
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                
            }
            $("#sel_receta").html(cadena);
            var iddecomida = $("#sel_receta").val();
            listar_distrito(iddecomida);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_receta").html(cadena);
        }
    })
}

