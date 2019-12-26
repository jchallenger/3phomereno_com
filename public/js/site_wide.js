$(document).ready(function(){
    $(document).foundation();
});

function submitMessage(){
    var name = $('#contactModal [name="name"]').val();
    var email = $('#contactModal [name="email"]').val();
    var number = $('#contactModal [name="number"]').val();
    var message = $('#contactModal [name="message"]').val();

    if($('#honey').val()){
        swal({
            type: 'error',
            text: 'An error occurred with your form! Please try again later'
        });
        return;
    }

    $('#contactModal').foundation('reveal', 'close');
    $.ajax({
        url: 'respond/submit_message',
        method: 'post',
        data: {
            name: name,
            email: email,
            phone: number,
            message: message
        },
        success: function(data){
            swal({
                type: 'success',
                text: 'Your Email was sent successfully. Thank you!'
            });
        },
        error: function(){
            swal({
                type: 'error',
                text: 'An error occurred with your form! Please try again later'
            });
        }
    });

}
