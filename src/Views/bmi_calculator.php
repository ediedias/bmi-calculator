<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>BMI Calculator</title>
          <link rel="stylesheet" href="./css/styles.css">
     </head>
     <body>
          <h1>BMI Calculator</h1>

          <form method="POST" action="">
               <input type="number" name="weight" placeholder="Weight (kg)" required>
               <input type="number" name="height" placeholder="Height (cm)" required>
               <button type="submit">Calculate BMI</button>
          </form>

          <?php if ($result !== null): ?>
               <h2>Your BMI: <?= $result; ?></h2>
          <?php endif; ?>
     </body>
</html>