$(function()
{
    $("#regUser").click(function(){
        var surname = $("#surname").val();
        var firstname = $("#firstname").val();
        var email = $("#email").val();
        var phoneno = $("#phoneno").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var confirm = $("#confirm").val();
        var dataString = 'surname='+surname+'&firstname='+firstname+'&email='+email+'&phoneno='+phoneno+'&username='+username+'&password='+password+'&confirm='+confirm;
        $.ajax({
            type: "POST",
            url: "getuser.php",
            data: dataString,
            success: function(data)
             {
                $("#state").html(data);
                dataTable.ajax.reload();
             }
        });
        return false;
    });
    $("#memUser").click(function(){
        var title = $("#title").val();
        var surname = $("#surname").val();
        var firstname = $("#firstname").val();
        var email = $("#email").val();
        var phoneno = $("#phoneno").val();
        var gender = $("#gender").val();
        var status = $("#status").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var confirm = $("#confirm").val();
        var pic = $("#pic").val();
        var formData = new FormData();
        formData.append("pic", files);
        var dataString = 'title='+title+'&surname='+surname+'&firstname='+firstname+'&email='+email+'&gender='+gender+'&phoneno='+phoneno+'&status='+status+'&username='+username+'&password='+password+'&confirm='+confirm+'&pic='+pic;
        $.ajax({
            type: "POST",
            url: "getregister.php",
            data: formData,
            data: dataString,
            success: function(data)
             {
                $("#state").html(data);
             }
        });
        return false;
    });
    $("#megsubmit").click(function(){
        var surname = $("#surname").val();
        var firstname = $("#firstname").val();
        var memtype = $("#memtype").val();
        var email = $("#email").val();
        var message = $("#message").val();
        
        var dataString = 'surname='+surname+'&firstname='+firstname+'&memtype='+memtype+'&email='+email+'&message='+message;
        $.ajax({
            type: "POST",
            url: "getmessage.php",
            data: dataString,
            success: function(data)
             {
                $("#state").html(data);
             }
        });
        return false;
    });

    $("#memUserr").click(function(){
        var title = $("#title").val();
        var surname = $("#surname").val();
        var firstname = $("#firstname").val();
        var email = $("#email").val();
        var phoneno = $("#phoneno").val();
        var gender = $("#gender").val();
        var status = $("#status").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var confirm = $("#confirm").val();
        var dataString = 'title='+title+'&surname='+surname+'&firstname='+firstname+'&email='+email+'&phoneno='+phoneno+'&gender='+gender+'&status='+status+'&username='+username+'&password='+password+'&confirm='+confirm;
        $.ajax({
                type: "GET",
                url: "getregister.php",
                data: dataString,
                success: function(data)
                 {
                    $("#state").html(data);
                }
    });
    return false;
});
    $("#loginsubmit").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        var dataString = 'username='+username+'&password='+password;
        $.ajax({
            type: "POST",
            url: "getlogin.php",
            data: dataString,
            success: function(data)
             {
                if ($.trim(data)=="empty"){
                    $(".empty").show();
                    $(".disable").hide();
                    $(".error").hide();
                    setTimeout(function(){
                        $(".empty").fadeOut();
                    }, 3000);
                       
                }
                else if ($.trim(data)=="disable"){
                    $(".disable").show();
                    $(".empty").hide();
                    $(".error").hide();
                    setTimeout(function(){
                        $(".disable").fadeOut();
                    }, 3000);
                }
                else if ($.trim(data)=="error"){
                    $(".error").show();
                    setTimeout(function(){
                        $(".error").fadeOut();
                    }, 3000);
                }
                else{
                    if ($.trim(username)=="Admin"){
                   window.location = "cxtam.php"; 
                    }
                    else if($.trim(username)=="Admin1"){
                       window.location = "ctxam.php"; 
                    }
                    else if ($.trim(username)=="Admin2"){
                       window.location = "bvxtam.php"; 
                    }
                    else{
                       window.location = "xtam.php"; 
                    }
                }
             }
         });
        return false;
    });
    $("#logsubmit").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        var dataString = 'username='+username+'&password='+password;
        $.ajax({
            type: "POST",
            url: "loginasin.php",
            data: dataString,
            success: function(data)
             {
                if ($.trim(data)=="empty"){
                    $(".empty").show();
                    $(".disable").hide();
                    $(".error").hide();
                    setTimeout(function(){
                        $(".empty").fadeOut();
                    }, 3000);
                       
                }
                else if ($.trim(data)=="disable"){
                    $(".disable").show();
                    $(".empty").hide();
                    $(".error").hide();
                    setTimeout(function(){
                        $(".disable").fadeOut();
                    }, 3000);
                }
                else if ($.trim(data)=="error"){
                    $(".error").show();
                    setTimeout(function(){
                        $(".error").fadeOut();
                    }, 3000);
                }
                else{
                   window.location = "membreg.php"; 
                }
             }
         });
        return false;
    });
    
});