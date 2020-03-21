$(document).ready(function() {
	$('input').on('blur', function() {
        var field = $(this);
        //var validationField = field.parent().find('.validation');
        var dataString = 'value='+field.val()+'&field='+field.attr('name')+'&indice='+field.attr('indice');
	$.ajax({
            type: "POST",
            url: "process1.php",
            data: dataString,
            success: function(data) {
            }
        });
    });
});


$(document).ready(function() {
    $('.delete').on('click', function(e) {
        e.preventDefault();
        var item = $(this);
        var dato= item.attr('indice');
        var dataString = 'item='+dato+'&field='+item.attr('name');
        console.log(dataString);
 
        $.ajax({
            type: "POST",
            url: "process2.php",
            data: dataString,
            success: function(response) {			
               alert("Eliminacion correcta");
            }
        });
    });                 
});    