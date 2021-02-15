function pwGenerate() {
    let url = "generator.php",
        lengthInput = $('.passwortLength').val(),
        checkboxChars = $('#checkboxChars').is(':checked'),
        checkboxSpecial = $('#checkboxSpecial').is(':checked'),
        checkboxNumbers = $('#checkboxNumbers').is(':checked');

    let defaults = {
        'length': (lengthInput !== '' ? parseInt(lengthInput) : 8),
        'chars': checkboxChars,
        'numbers': checkboxNumbers,
        'specialChars': checkboxSpecial
    };

    $.ajax({
        url: url,
        type: 'post',
        data: defaults
    }).done((data) => {
        $('#passworts').text(data);
        $('.passwort_container').removeClass('passwort_container_hide');
    });
}

function testPw() {
    
}
