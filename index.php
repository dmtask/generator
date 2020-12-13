<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="assets/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Passwort Generator - Einfach sichere Passwörter erstellen" />
    <meta name="keywords" content="Passwort, Passwort erstellen, erstellen, sicher, Passwörter, sichere Passwörter, generieren, passwort generator"/>
    <meta name="author" content="Daniel Mertgen (dm-task.de)" />
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
          unten ändern.
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
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <div id="passworts"></div>
        </div>
      </div>
    </div>
    <footer>
      Powered by <a href="http://dm-task.de" target="_blank">dm-task.de</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">;</script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js">;</script>
    <script type="text/javascript" src="generator.js">;</script>
  </body>
</html>