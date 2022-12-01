 $(document).ready( function(){
    $.getJSON ("../php/fetch_chat.php", function(data){
        $("ul").empty();
        $.each(data.result, function(){
            $("ul").append(this['message']);
        });

    });
 });