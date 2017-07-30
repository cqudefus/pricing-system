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
                    if(group.trim() == "option") {
                        $.cookie("updated", 1);
                    }
                    $('.alert-msg').text(data.trim());
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
            $message.fadeIn(100).delay(500).fadeOut(100);
        }

    }, 100);

};

application.initPricePanel = function(){
    var getUrl = "/price/refresh";
    var panelName = "pricePanel";

    setInterval(function() {
        if (typeof $.cookie('updated') !== 'undefined') {

            $.ajax({
                url: getUrl,
                type: "GET",
                data: {},
                success: function (data) {
                    $('#' + panelName).html(data);
                    $.removeCookie("updated");
                },
                error: function () {

                }
            });
        } else{
            //console.log("hfhfhfh");
        }

    }, 100);

};