var hirebutton = $('#hireDev');
$(function(){
    $('#selectBtn').click(function(){
        hirebutton.css("display", "block")
        var ids = [];
        $(':checkbox:checked').each(function(i){
            ids[i] = $(this).val();
        });
        $.ajax({
            url:'./inc/hireDeveloperResponse.php',
            method: 'post',
            data:{action:'data',ids:ids},
            success:function(response){
				$("#result").html(response);
                $(".hired-success").hide();
                $(".hired-error").hide();
                
			}
        });
    });
});
