<?php
$this->registerJs(
'demo.initGoogleMaps();',
yii\web\View::POS_READY,
'map');
?>
<div id="map"></div>