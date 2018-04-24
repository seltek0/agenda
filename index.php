<?php include 'db/db.php';?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digitaal Pictobord</title>

    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/template.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="db/functions.php" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'db/functions.php'; ?>

<div class="container">
<!-- verticale hover kleuren-->  
<div class="row">
  <div class="col-sm-3"><div class="een"></div></div>
  <div class="col-sm-3"><div class="twee"></div></div>
  <div class="col-sm-3"><div class="drie"></div></div>
  <div class="col-sm-3"><div class="vier"></div></div>
  <div class="col-sm-3"><div class="vijf"></div></div>
  <div class="col-sm-3"><div class="zes"><</div></div>
  <div class="col-sm-3"><div class="zeven"></div></div>
  <div class="col-sm-3"><div class="acht"></div></div>
</div>
<div class="row">
    <h3>
    <div class="col-sm-3"><p>Tijd</p></div>
    <div class="col-sm-3"><p>Maandag</p></div>
    <div class="col-sm-3"><p>Dinsdag</p></div>
    <div class="col-sm-3"><p>Woensdag</p></div>
    <div class="col-sm-3"><p>Donderdag</p></div>
    <div class="col-sm-3"><p>Vrijdag</p></div>
    <div class="col-sm-3"><p>Zaterdag</p></div>
    <div class="col-sm-3"><p>Zondag</p></div>
  </h3>
</div>
<div class="row">
  <div class="col-sm-3"><p>7.00</p></div>
  <div class="col-sm-3"><p><?php echo opstaan(); ?><img src="img/opstaan.svg"></p></div>
  <div class="col-sm-3"><p><?php echo opstaan(); ?><img src="img/opstaan.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>8.00</p></div>
  <div class="col-sm-3"><p><?php echo eten1(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten1(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo opstaan(); ?><img src="img/opstaan.svg"></p></div>
  <div class="col-sm-3"><p><?php echo opstaan(); ?><img src="img/opstaan.svg"></p></div>
  <div class="col-sm-3"><p><?php echo opstaan(); ?><img src="img/opstaan.svg"></p></div>
  <div class="col-sm-3"><p><?php echo opstaan(); ?><img src="img/opstaan.svg"></p></div>
  <div class="col-sm-3"><p><?php echo opstaan(); ?><img src="img/opstaan.svg"></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>9.00</p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten1(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten1(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten1(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten1(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten1(); ?><img src="img/eten.svg"></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>10.00</p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo kapper(); ?><img src="img/kapper.svg"></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>11.00</p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo kapper(); ?><img src="img/kapper.svg"></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p><?php echo boodschappen(); ?><img src="img/boodschappen.svg"></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>12.00</p></div>
  <div class="col-sm-3"><p><?php echo eten2(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten2(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten2(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten2(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten2(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>13.00</p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p><?php echo eten2(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten2(); ?><img src="img/eten.svg"></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>14.00</p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo spelen(); ?><img src="img/spelen.svg"></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p><?php echo spelen(); ?><img src="img/spelen.svg"></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>15.00</p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo spelen(); ?><img src="img/spelen.svg"></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p><?php echo spelen(); ?><img src="img/spelen.svg"></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>16.00</p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>17.00</p></div>
  <div class="col-sm-3"><p><?php echo boodschappen(); ?><img src="img/boodschappen.svg"></p></div>
  <div class="col-sm-3"><p><?php echo boodschappen(); ?><img src="img/boodschappen.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo werk(); ?><img src="img/werken.svg"></p></div>
  <div class="col-sm-3"><p><?php echo boodschappen(); ?><img src="img/boodschappen.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten3(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten3(); ?><img src="img/eten.svg"></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>18.00</p></div>
  <div class="col-sm-3"><p><?php echo eten3(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten3(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten3(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten3(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo eten3(); ?><img src="img/eten.svg"></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
</div>
<div class="row">
  <div class="col-sm-3"><p>19.00</p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p></p></div>
  <div class="col-sm-3"><p><?php echo uit(); ?><img src="img/dagje_uit.svg"></p></div>
  <div class="col-sm-3"><p></p></div>
</div>

</div>
</body>
</html>