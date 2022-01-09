$(document).ready(function(){
    $("#hireDev").click(function(){
        var hireTo = $('#hireTo').val();
        var hireFrom = $('#hireFrom').val();
        var ids = [];
        $(':checkbox:checked').each(function(i){
            ids[i] = $(this).val();
        });
        $.ajax({
            url:'./action/hireDevelopers.php',
            method: 'post',
            data:{action:'data',ids:ids,hireTo: hireTo, hireFrom: hireFrom},
            success:function(response){
				$("#response").html(response);
                $("#result").html("");
                $('#hireDev').css("display","none");
			}
        });
    });
});