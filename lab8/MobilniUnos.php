<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link href="http://jqmdesigner.appspot.com/gk/lib/jquery.mobile/1.4.5/flatui/jquery.mobile.flatui.css" rel="stylesheet" type="text/css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <!-- Uncomment the following to include cordova in your android project -->
  <!--<script src="http://jqmdesigner.appspot.com/platforms/android/cordova.js"></script>-->
  <title>Mobilna verzija unosa</title>
</head>

<body>
  <!-- Page: home  -->
  <div id="home" data-role="page">
    <form action="UnosenjeSlastica.php" method="POST">
      <div role="main" class="ui-content">
        <div class="ui-field-contain">
          <label for="gk-613Q2cN">Naziv proizvoda</label>
          <input type="text" name="naziv" id="gk-613Q2cN">
        </div>
        <div class="ui-field-contain">
          <label for="gk-613z9At">Tip proizvoda</label>
          <select id="gk-613z9At" name="tip">
            <option value="Torte">Torte</option>
            <option value="Torte">Kolači</option>
            <option value="Torte">Ostalo</option>
          </select>
        </div>
        <div class="ui-field-contain">
          <label for="gk-613YBGT">Opis proizvoda</label>
          <input type="text" name="opis" id="gk-613YBGT">
        </div>
        <fieldset data-role="controlgroup" data-type="vertical">
          <legend>Alergeni:</legend>
          <input id="gk-613Xvj3" name="jaja" type="checkbox">
          <label for="gk-613Xvj3">jaja</label>
          <input id="gk-613YJmP" name="orašasti plodovi" type="checkbox">
          <label for="gk-613YJmP">orašasti plodovi</label>
        </fieldset>
        <fieldset data-role="controlgroup" data-type="vertical">
          <legend>Vegeterijanski:</legend>
          <input id="gk-6131SJ5" name="gk-6131SJ5" type="radio">
          <label for="gk-6131SJ5" value="da">Da</label>
          <input id="gk-613lZCB" name="gk-613lZCB" type="radio">
          <label for="gk-613lZCB" value="ne">Ne</label>
        </fieldset>
        <fieldset data-role="controlgroup" data-type="vertical">
          <legend>Halal:</legend>
          <input id="gk-613dQlm" name="hall" type="radio">
          <label for="gk-613dQlm" value="da">Da</label>
          <input id="gk-613oGS9" name="gk-613oGS9" type="radio">
          <label for="gk-613oGS9" value="ne">Ne</label>
        </fieldset>
        <fieldset data-role="controlgroup" data-type="vertical">
          <legend>Košer:</legend>
          <input id="gk-613d08f" name="kosh" type="radio">
          <label for="gk-613d08f" value="da">Da</label>
          <input id="gk-613Ysr9" name="gk-613Ysr9" type="radio">
          <label for="gk-613Ysr9" value="ne">Ne</label>
        </fieldset>
        <div class="ui-field-contain">
          <label for="gk-613U04f">Cijena</label>
          <input type="text" name id="cijena">
        </div>
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>

</html>
