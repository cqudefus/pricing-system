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
                    alert(data.trim());

                },
                error:function(){

                }
            });

        });

    });
};