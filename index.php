<?php

require 'Geo.php';

$geo = new Geo;

$geo->request('103.78.226.247');
echo $geo->country;