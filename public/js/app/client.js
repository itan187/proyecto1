$(document).ready(function(){

    $('#formDataStepOne').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url    : "/api/steps/one",
            method : "POST",
            data   :  new FormData( this ),
            success : function(data) {
                $('#step2Boton').trigger('click');
                $('#barProgress').css("width", "20%");
                $('#barProgress').attr("aria-valuenow", "20");
                $('#barProgress').text("20%");
            },
            error : function(error){ console.error(error); },
            contentType: false,
            processData: false
        });
    });


    $('#formDataStepTwo').on('submit', function (e) {
        e.preventDefault();
        alert("a");

        $.ajax({
            url    : "/api/steps/two",
            method : "POST",
            data   :  new FormData( this ),
            success : function(data) {
                $('#step3Boton').trigger('click');
                $('#barProgress').css("width", "40%");
                $('#barProgress').attr("aria-valuenow", "40");
                $('#barProgress').text("40%");
            },
            error : function(error){ console.error(error); },
            contentType: false,
            processData: false
        });
    });
    

});

