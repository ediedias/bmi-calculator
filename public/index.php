<?php

require '../vendor/autoload.php';

use App\Controllers\BMICalculatorController;

$controller = new BMICalculatorController();

$controller->index();