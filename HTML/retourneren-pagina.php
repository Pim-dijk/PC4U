<?php include 'header.php';?>

<div id="container">
  <div class="col-md-12">
  	 <h1>Retourneren</h1>
     <p class="marginrightleft">Heb je meteen onze hulp nodig? Neem dan contact op via het telefoonnummer onderaan deze pagina.</p>
  </div>

  <div class="col-md-12">
    <form>
      <h2>Retourartikelen</h2>
        <div class="marginrightleft form-row">
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
        <div class="col-md-12">
        <p>Anders</p>
        <textarea id="CAPoutput" class="form-control" rows="4">
        </textarea>
        <br>
        <input class="voegtoebutton" type="button" value="Verzenden">
      </div>
      </div>

    </form>
  </div>
        
    </div>

  <?php include 'Footer.php';?>