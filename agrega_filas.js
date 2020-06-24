$(document).ready(function(){
    $("#masfilas").click(function(){
        var tableReg = document.getElementById("acti");
        $("#acti").append("<tr>"+tableReg.rows[1].innerHTML+"</tr>");//1
        $('.remove-item').off().click(function(e) {
            $(this).parent('td').parent('tr').remove();//2
        });
    });
});