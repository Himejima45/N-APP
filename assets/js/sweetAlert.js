/*$("#btn").click(function(){*/
   Swal.mixin({
     input: 'text',
     confirmButtonText: 'Siguiente &rarr;',
     confirmButtonColor: '#3085d6',
     cancelButtonColor:'#d33',
     showCancelButton: true,
     progressSteps: ['1', '2', '3']
   }).queue([
     {
         title : 'Bienvenido',
         text : '¿Color Favorito?'
     },
     {
         title : 'Bienvenido',
         text : '¿Animal Favorito?'
     },
     {
         title : 'Bienvenido',
         text : '¿Pais de origen?'
     }
   ]).then((result) => {
       if (result.value){
            Swal.fire({
               title: '¡Completado!',
               html:
               'Tus respuestas: <pre><code>'+
                JSON.stringify(result.value) +
                '</code><pre>',
                confirmButtonText: 'OK'
            })
        }

    });
/*});*/
