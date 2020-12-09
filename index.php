<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Generator" />
    <title>Passwort Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <div class="row mt-4">
        <div class="col-3">
          <input class="form-control passwortLength" type="text" placeholder="Passwort Länge" />
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="generator.js">;</script>
  </body>
</html>