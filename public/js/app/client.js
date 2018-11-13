$(document).ready(function(){

    $('#formDataStepOne').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url    : "/api/steps/one",
            method : "POST",
            data   :  new FormData( this ),
            success : function(data) {},
            error : function(error){ console.error(error); },
            contentType: false,
            processData: false
        });
    });
    
});