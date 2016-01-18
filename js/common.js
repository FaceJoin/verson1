/**
 * Created by Administrator on 2016/1/12.
 */
(function(){

    function AjaxStr(){
        $.ajax({
            type: "POST",
            url : "../php/index.php?m=User&a=text",
            data: {username:$("#username").val(), content:$("#content").val()},
            dataType: "json",
            success: function(data){
                //alert("do!");
                $("#container").append(data);
            },
            error: function(data){
                //alert("not do!");
                $("#container").append(data);
            }
        });
        //$("#container").load("index.html");
    };
    $("#ajaxStr").click(AjaxStr);

    //$("#container").load("index.html");
    
});