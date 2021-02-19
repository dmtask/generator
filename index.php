<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Passwort Generator - Einfach sichere Passwörter erstellen" />
    <meta name="keywords" content="Passwort, Passwort erstellen, erstellen, sicher, Passwörter, sichere Passwörter, generieren, passwort generator"/>
    <meta name="author" content="Daniel Mertgen (dmtask.web.app)" />
    <meta name="robots" content="index"/>
    <title>Passwort Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="assets/index.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <b>Willkommen!</b> - Hier kannst du dir automatisch Passwörter generieren lassen. Als Voreinstellung besteht das Passwort aus 8 Zeichen, inkl. Zahlen und Sonderzeichen. Diese Einstellung kannst du 
          unten ändern. Natürlich ist diese Webseite noch nicht fertig und wird stetig weiter ausgebaut.
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-3">
          <input class="form-control passwortLength" type="text" placeholder="Passwort Länge (8 Zeichen)" />
        </div>
        <div class="form-check col-3">
          <input class="form-check-input" type="checkbox" value="" checked=checked id="checkboxChars">
          <label class="form-check-label" for="checkboxChars">
            + Zeichen
          </label>
        </div>
        <div class="form-check col-3">
          <input class="form-check-input" type="checkbox" value="" checked=checked id="checkboxSpecial">
          <label class="form-check-label" for="checkboxSpecial">
            + Sonderzeichen
          </label>
        </div>
        <div class="form-check col-3">
          <input class="form-check-input" type="checkbox" value="" checked=checked id="checkboxNumbers">
          <label class="form-check-label" for="checkboxNumbers">
            + Zahlen
          </label>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <button type="button" class="btn btn-primary" onclick="pwGenerate();">Generiere</button>
          <button type="button" class="btn btn-danger" onclick="document.location.reload();">Reset</button>
        </div>
      </div>
      <div class="row mt-2 ml-0 mr-0 passwort_container passwort_container_hide">
        <div class="col-12 alert alert-success">
          <div id="passworts"></div>
          <textarea type="text" id="hiddenPasswortField"></textarea>
          <i data-eva="copy-outline" onclick="copy();"></i>
        </div>
      </div>
    </div>
    <footer>
      Powered by <a href="https://dmtask.web.app/" target="_blank">DM - Task</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">;</script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js">;</script>
    <script type="text/javascript" src="assets/generator.js">;</script>
    <script src="https://unpkg.com/eva-icons">;</script>
    <script>
      eva.replace();
    </script>
  </body>
</html>
