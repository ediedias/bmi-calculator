<?php

namespace App\Models;

class BMICalculator
{
     public function calculate($weight, $height)
     {
          if ($height == 0) {
               return 'Height cannot be zero';
          }

          $bmi = $weight / ( ($height / 100) ** 2);
          return round($bmi, 2);
     }
}