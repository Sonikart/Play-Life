$(document).ready(function(){
    $('#new-profil').click(function(){
        $('.box-action').hide();
        $('.box-new-profil').fadeIn(400);
        $('#back-home').fadeIn(400);
    });

    $('#charge-profil').click(function(){
        $('.box-action').hide();
        $('.box-charge-profil').fadeIn(400);
        $('#back-home').fadeIn(400);
    });

    $('#back-home').click(function(){
        $('.box-new-profil').hide();
        $('.box-charge-profil').hide();
        $('.box-action').fadeIn(400);
        $('#back-home').hide();
    });

    // Ajax

    $('#register-profil').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: 'assets/ajax/inscription.php',
            type: 'POST',
            data: $(this).serialize(),
        })
        .done(function(data){
            var json = $.parseJSON(data);

            if(json.type == 'success')
            {
                window.location.href='index.php';
            }

            if(json.type == 'danger')
            {
                $('.error').fadeIn(400);
                $('.error').html(json.error);
                $('input').val('');
                setTimeout(function(){
                    $('.error').fadeOut(400);
                }, 2000);
                $('.box-new-profil').addClass('bounce animated');
            }
        });
    });
});