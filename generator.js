function pwGenerate() {
    let defaults = {
        'length': 8,
        'chars': true,
        'numbers': true,
        'specialChars': true
    };

    let url = "generator.php";

    $.ajax({
        url: url,
        type: 'post',
        data: defaults
    }).done((data) => {
        $('#passworts').text(data);
    });
}