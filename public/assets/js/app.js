$(function () {

    //@Language selector
    if ($('#languages').length)
    {
        var active_language = $('#languages').find('.active').last().attr('lang');
        $('body').addClass(active_language);
    }


    if ($('#subscription').length)
    {
        $('#subscription').on('submit', function(e) {

            e.preventDefault;

            var form = $(this);
            var url = form.attr('action');
            var subscriber_name = $('#subscriber_name').val();
            var subscriber_email = $('#subscriber_email').val();
            var ran = Math.random();

            $.ajax({
                url: url,
                method: 'POST',
                data: {subscriber_name: subscriber_name, subscriber_email: subscriber_email, ran: ran},
                dataType: 'JSON',
                success: function (data) {
                    form.html(data.msg);
                },
                error: function (xhr, textStatus, errorMessage) {
                    console.log(xhr);
                    console.log(textStatus);
                    console.log(errorMessage);
                }
            });

            return false;

        });
    }



});

