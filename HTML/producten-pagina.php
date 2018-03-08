<?php require_once 'header.php';?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="slick-1.8.0/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick-1.8.0/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/opmaak.css">
</head>

<body>
<div id="container">
  <div class="col-md-6">
	 <h1>HP 15-bw022nd</h1>
    <div class="images">
      <div class="slider-for">
        <div><img src="img/hp-15-1.png" width="100%" height="auto"></div>
        <div><img src="img/hp-15-2.png" width="100%" height="auto"></div>
        <div><img src="img/hp-15-3.jpg" width="100%" height="auto"></div>
        <div><img src="img/hp-15-4.png" width="100%" height="auto"></div>
      </div>
    

    <div class="slider-nav">
      <div><img src="img/hp-15-1.png" width="100%" height="auto"></div>
      <div><img src="img/hp-15-2.png" width="100%" height="auto"></div>
      <div><img src="img/hp-15-3.jpg" width="100%" height="auto"></div>
      <div><img src="img/hp-15-4.png" width="100%" height="auto"></div>
    </div>
  </div>

    <div class="productbeschrijving">
      <h2>Productbeschrijving</h2>
        <p>De HP 17-ak071nd is geschikt voor het bekijken van films en series in hoge beeldkwaliteit. Het Full HD IPS scherm zorgt voor een scherpe weergave van jouw foto's en video's. Dankzij de SSD en processor start de laptop binnen 15 seconden op. Bovendien werkt een SSD volledig stil en is het betrouwbaarder dan een traditionele harde schijf. De AMD A9 processor biedt voldoende snelheid voor dagelijks gebruik.</p>
    </div>
  </div>

  <div id="alles" class="col-md-6">
          <div id="prijzen">
        <h2>€ 499,-</h2>
        <p>Op voorraad</p>
        <p>Voor 23:59 uur besteld, morgen in huis</p>
          <form>
            <select>
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
            <br>
              <input class="button" type="button" value="In winkelwagen">
          </form>
      </div> 

      <div id="specificaties">
        <h2>Specificaties</h2>
          <p>Type: Notebook</p>
          <p>Grootte : 15 inch</p>
          <p>Gewicht : 980 gram</p>
    </div>
  </div>
</div>
</body>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="slick-1.8.0/slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
   $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
});
</script>