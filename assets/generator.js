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
        document.getElementById('hiddenPasswortField').value = data;
        $('.passwort_container').removeClass('passwort_container_hide');
    });
}

function copy() {
    let copyText = document.getElementById("hiddenPasswortField");
    copyText.focus();
    copyText.select();
    copyText.setSelectionRange(0, 99999);

    document.execCommand("copy");
}
