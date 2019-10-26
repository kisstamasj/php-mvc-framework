$.ajaxSetup({
    headers: {
        'CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/** Login button */
$("#login-button").on('click', function(e){
    e.preventDefault()
    $("#login-button").addClass('d-none');
    $("#login-spinner").removeClass('d-none')

    $.ajax({
        type: "post",
        url: root+"api/user/login",
        data: {
            username_email: $("#username_email").val(),
            password: $("#password").val()
        },
        dataType: "json",
        success: function (response)
        {
            $("#login-button").removeClass('d-none');
            $("#login-spinner").addClass('d-none');

            if(response.error)
            {
                $("#errors ul").html('');
                $.each(response.errors, function (i, error) {
                    $("#errors ul").append('<li>'+ error +'</li>');
                });

                $("#errors").removeClass('d-none');
            }
            else
            {
                location.href=root+'admin/dashboard';
            }
        },
        error: function (error) {
            $("#login-button").addClass('d-none');
            $("#login-spinner").removeClass('d-none')
        }
    });
})

/** Logout button */
$("#logout-button").on('click', function(e){
    e.preventDefault()
    $("#logout-button").addClass('d-none');
    $("#logout-spinner").removeClass('d-none')

    $.ajax({
        type: "post",
        url: root+"api/user/logout",
        data: {
            username_email: $("#username_email").val(),
            password: $("#password").val()
        },
        dataType: "json",
        success: function (response)
        {
            $("#logout-button").removeClass('d-none');
            $("#logout-spinner").addClass('d-none');
            if(response.success){
                location.href=root;
            }
        },
        error: function (error) {
            $("#logout-button").addClass('d-none');
            $("#logout-spinner").removeClass('d-none')
        }
    });
})

$("#username_email, #password").on('keyup', function(event){
    if (event.keyCode === 13) {
        $("#login-button").click();
    }
})