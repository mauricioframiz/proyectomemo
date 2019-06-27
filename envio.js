$(document).ready(function() {


    $("#preview").click(function() {

        cuerpo = editor.value;

        $.ajax({
                type: "GET",
                url: "template.php",
                success: function(datos) {



                    cuerpo = ' <div class="pbody"> ' + cuerpo + ' </div> ';

                    var memo = datos.replace('<div class="pbody"></div>', cuerpo);

                    $('.modal-body').html(memo);

                }

            })
            .done(function() {
                console.log("complete");
            })
            .fail(function() {})
            .always(function() {
                console.log("complete")
            });
    });
})