<?php

namespace App\Controllers;

use App\Models\BMICalculator;

class BMICalculatorController
{
     public function index()
     {
          $result = null;

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               $weight = $_POST['weight'];
               $height = $_POST['height'];

               $bmiCalculator = new BMICalculator();
               $result = $bmiCalculator->calculate($weight, $height);               
          }

          include '../src/Views/bmi_calculator.php';
     }
}