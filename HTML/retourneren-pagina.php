<?php include 'header.php';?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/opmaak.css">
</head>

<body>
<div id="container">
  <div class="col-md-12">
  	 <h1>Retourneren</h1>
     <p>Heb je meteen onze hulp nodig? Neem dan contact op via het telefoonnummer onderaan deze pagina.</p>
  </div>
  <div class="col-md-12">
    <div id="retourartikelen">
    </div>
    <form>
      <div class="form-row">
        <h2>Retourartikelen</h2>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <p class="floatleft">Aantal:</p>
          <select class="floatleft form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
          </select>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <p class="floatleft">Ordernummer:</p>
            <input class="floatleft form-control" type="text" name="ordernummer">
          </div>
        
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <p class="floatleft">Artikelnummer:</p>
            <input class="floatleft form-control" type="text" name="ordernummer">
          </div>
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <p class="floatleft">Prijs:</p>
            <input class="form-control" type="text" name="ordernummer">
           </div>
        </div>
    </form>
    </div>

    <div id="redenvanretour">
      <div class="col-md-12">
      <h2>Reden van retour</h2>
      <textarea class="form-control" rows="4">
      </textarea>
      <br>
        <input class="button" type="button" value="Verzenden">
      </div>
    </div>
  </div>
</div>
</body>
<?php include 'footer.php';?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>