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

    // Recuperation information profil

    $.get('assets/ajax/information-profil.php', function(data){
        var json = $.parseJSON(data);
        var xp = json.experience;

        $('.content-xp').css('width', xp + '%');
        $('.content-xp').css('transition', '1s');
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
                if(json.type == 'danger')
                {
                    $('.error').fadeIn(400);
                    $('.error').addClass('danger-err');
                    $('.error').html(json.error);
                    $('input').val('');
                } else {
                    $('.error').fadeIn(400);
                    $('.error').addClass('success-err');
                    $('.error').html(json.error);
                    $('input').val('');
                }
                setTimeout(function(){
                    $('.error').fadeOut(400);
                }, 3000);
            }
        });
    });

    $('#charge-user').on('submit', function(e){
        e.preventDefault();
        // console.log('test');
        $.ajax({
            url: 'assets/ajax/connexion.php',
            type: 'POST',
            data: $(this).serialize(),
        })
        .done(function(data){
            var json = $.parseJSON(data);

            if(json.type == 'danger')
            {
                $('.error').fadeIn(400);
                $('.error').addClass('danger-err');
                $('.error').html(json.error);
                $('input').val('');
            } else {
                $('.error').fadeIn(400);
                $('.error').addClass('success-err');
                $('.error').html(json.error);
                $('input').val('');
                setTimeout(function(){
                    window.location.href='index.php';
                }, 3000);
            }
            setTimeout(function(){
                $('.error').fadeOut(400);
            }, 3000);
        });
    })
});