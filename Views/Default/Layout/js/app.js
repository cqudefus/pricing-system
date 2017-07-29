var application = {};

application.initPrice = function() {

    $('[data-update]').each(function() {

        $(this).on('click', function() {

            var value = $(this).val();
            var group = $(this).data('update');
            var action = 'unchecked';

            if($(this).is(':checked')) {
                action = 'checked';
            }

            $.ajax({
                url:'/pages/update',
                type:"POST",
                data: {
                    id: value,
                    group: group,
                    action: action
                },
                success:function(data){
                    $('.alert-msg').text(data.trim())
                    application.initFlash();

                },
                error:function(){

                }
            });

        });

    });
};

application.initFlash = function(){
    $message = $('.alert-msg');

    setTimeout(function() {
        if($message.text().trim() != '') {
            console.log("dkdk");
            $message.removeClass('hide');
            $message.fadeIn(100).delay(2000).fadeOut(150);
        }

    }, 100);

};