$(document).ready(function(){
    $('#textSearch').keyup(function(e){
        e.preventDefault();
        texto = $(this).val().toLowerCase();
        var contador = 0;
        $.each($('table tbody tr'),function(){
            if($(this).text().toLowerCase().indexOf(texto) === -1){
                $(this).hide();
            }
            else {
                $(this).show();
                contador++;
            }
        });
    });
});