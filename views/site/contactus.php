<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
<div class="body-content">
<div class "col-lg-12 col-xs-12">
<div class="card" style="min-height: 100%">
  <div class="dent-title">
    <h1>Contact us</h1>
  </div>
<p>You can contact the practice by calling in, post, phone or email.</p>
<dl>
  <div class=dent-title>
<h2>Address:</h2>
</div>
<dd>Butt Lane Dental Practice</dd>
<dd>136 Congleton Road</dd>
<dd>Talke</dd>
<dd>Stoke-On-Trent</dd>
<br>
<div class=dent-title>
<h2>Telephone</h2>
</div>
<dd>01782 774396</dd>
</dl>

<?php
  $coord = new LatLng(['lat' => 53.086331, 'lng' => -2.259066]);

  $map = new Map([
    'center' => $coord,
    'zoom' => 16,
  ]);

  $marker = new Marker([
    'position' => $coord,
    'title' => 'S And I Commercial',
  ]);

  $marker->attachInfoWindow(
    new InfoWindow([
        'content' => '<p>Butt Lane Dental Surgery</p>'
    ])
  );

  $map->addOverlay($marker);
  echo $map->display(); ?>
<a href ="https://www.google.co.uk/maps/place/Butt+Lane+Dental+Surgery/@53.0863059,-2.2613241,17z/data=!3m1!4b1!4m5!3m4!1s0x487a5cea87fa317f:0xa1b3510332000628!8m2!3d53.0863027!4d-2.2591354?hl=en">Click here to view in a larger map</a>

</div>
</div>
</div>
</div>
