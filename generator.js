function pwGenerate() {
    let defaults = {
        lenght: 8,
        chars: true,
        numbers: true,
        specialChars: true
    };

    let url = "generator.php";

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, true);
    xhttp.send(JSON.stringify(defaults));


    
}