$(document).ready(function(){

    $('#formDataStepOne').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url    : "/api/steps/one",
            method : "POST",
            data   :  new FormData( this ),
            success : function(data) {
                if(data.success) {
                    $('li.presentation').removeClass('active disabled');
                    $('#step2Option').addClass('active');
                    
                    $('div.tab-pane').removeClass('active disabled');
                    $('#step2').addClass('active');

                    $('#barProgress').css('width', '20%').attr('aria-valuenow', '20').text('20%');
                }
            },
            error : function(error){ console.error(error); },
            contentType: false,
            processData: false
        });
    });


    $('#formDataStepTwo').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url    : "/api/steps/two",
            method : "POST",
            data   :  new FormData( this ),
            success : function(data) {
                if(data.success) {
                    $('li.presentation').removeClass('active disabled');
                    $('#step3Option').addClass('active');
                    
                    $('div.tab-pane').removeClass('active disabled');
                    $('#step3').addClass('active');

                    $('#barProgress').css('width', '40%').attr('aria-valuenow', '40').text('40%');
                }
            },
            error : function(error){ console.error(error); },
            contentType: false,
            processData: false
        });
    });
    

});

