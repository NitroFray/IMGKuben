<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Test Page</title>
  </head>
  <body>
    <div class="header">
      <h1 class="mainhead">Hei og Velkommen!</h1>
    </div>

<div class="moveleftbitch">
    <br>

      <?php
          echo "Hei";

          $tall = 23;

          echo "<p>Tallet er $tall.</p>";

          $tall = 42;

          echo "<p>Nå er tallet $tall</p>";

        ?>

          <p>Dette er vanlig html</p>

     <?php
          echo "<p>Back to PHP</p>";

          echo "<p>Tallet finnes fortsatt ''$tall''</p>";

     ?>

  <div class="breakline">
  </div>
      <?php
          $antall = "tolv"

        ?>

     <h1>Hvor mange kanter har min hatt?</h1>

      <?php
        echo "Min hatt, den har $antall kanter, $antall kanter har min hatt. Og har den ei $antall kanter, så er det ei min hatt.<br>";
      ?>

     <br>

  <div class="breakline">
  </div>

  <br>
      <?php
        $tall1 = 17;
        $tall2 = 9;
        $tekst1 = "Karl";
        $tekst2 = "Johan";

        $sum = $tall1 + $tall2;
        $differanse = $tall1 - $tall2;
        $produkt = $tall1 * $tall2;
        $kvotient = $tall1 / $tall2;

        $langTekst = $tekst1 . $tekst2;
        $bedreTekst = $tekst1 . " " . $tekst2 . "s gate";

        echo "Summen blir $sum <br>";
        echo "Differansen blir $differanse<br>";
        echo "Produkt blir $produkt <br>";
        echo "Kvotienten blir $kvotient <br>";

        echo "<br><br>";

        echo "$langTekst <br>";
        echo "$bedreTekst <br>";
      ?>

     <br>

   <div class="breakline">
   </div>

    <br>

 <!-- Ikke bruk echo = "<a href="#">Lenke</a>" | Gjør følgende: -->

    <?php
      echo "<a href='#'>Lenke</a><br>";

     ?>

     <br>

<div class="breakline">
</div>

<!-- "==" spør om de er like | "!=" spør om de ikke er like -->
<!-- ">" større eller "<" mindre enn | "<=" større elelr lik / "=>" | Gir os true eller false-->

    <?php
      if (condition) {
        //Gjør dette
      } else if (condition) {
        //Gjør dette
      } else {
        //Gjør dette
      }
     ?>

<br>

<div class="breakline">
</div>

<br>

    <?php

    $terningkast = rand (1 , 6);

    echo "Du fikk $terningkast på terningen. <br>";

    echo "Det er ";

    if ($terningkast == 1) {
      echo "ikke bra nok... :(<br>";
    } else if ($terningkast == 6) {
      echo "glimerende!<br>";
    } else {
      echo "ikke noe å skryte av... :/<br>";
    }

    ?>

<br>

    <div class="breakline">
    </div>

<br>

    <?php

    $maned = date('M');

    echo "Du er i måned $maned. <br>";

    ?>

<br>

<div class="breakline">
</div>

<br>

    <?php

    $ar = date('Y');


    echo "Du er i år $ar. <br>";

    $armitt = date('Y') - 1999;

    if ($armitt == 18) {
      echo "<br>Gratulerer! Du er 18 år ++!<br>";
    } else {
      echo "Sorry mac, ikke 18 enda... :/<br>";
    }
    ?>

    <br>

<div class="breakline">
</div>

<br>

<h1>Magic 8 BALL:</h1>

<br>

    <?php

    $terningkast = rand (1 , 6);

    echo "Du kommer til ";

    if ($terningkast == 1) {
      echo "å dø... :(<br>";
    } else if ($terningkast == 6) {
      echo "Å BLI DRIT RIK!<br>";
    } else if ($terningkast == 2) {
      echo "å finne dit livs kjærlighet.<br>";
    } else if ($terningkast == 3) {
      echo "å vinne i lotto.<br>";
    } else if ($terningkast == 4) {
      echo "å få deg en ny venn.<br>";
    }else {
      echo "å get laid... :/<br>";
    }

    ?>

<br>

<div class="breakline">
</div>

<br>

    <?php
    $tall1 = 0;
    while ($tall1 <= 10) {
      echo "$tall1 <br>";
    $tall1 = $tall1 + 1;
    }
    ?>

<br>

<div class="breakline">
</div>

<br>

    <?php
    $tall2 = rand(0,10);
    while ($tall2 <= 10) {
      echo "$tall2 <br>";
      $tall2 = $tall2 + 1;
    }
    ?>

<br>

<div class="breakline">
</div>

<br>

    <?php
    for ($i=0; $i <=8; $i++) {
      echo "Verdien av variabel i er: $i.<br>";
    }
    ?>

<br>

<div class="breakline">
</div>

<br>

  <?php
  $tall1 = 0;
  while ($tall1 <= 15) {
   echo "$tall1 <br>";
  $tall1 = $tall1 + 1;
 }
  ?>

<br>

<div class="breakline">
</div>

<br>

    <?php
    for ($i=0; $i <=15; $i++) {
      echo "$i<br>";
    }
    ?>

<br>

<div class="breakline">
</div>

<br>

    <?php
    $tall1 = 0;
    while ($tall1 <= 42) {
    echo "IT1 ";
    $tall1 = $tall1 + 1;
    }
    ?><br>

    <br>

<div class="breakline">
</div>

<br>

<?php
for ($i=0; $i <=42; $i++) {
  echo "IT1";
}
?><br>

<br>

<div class="breakline">
</div>

<br>

    <?php
    $tall1 = 0;
    while ($tall1 <= 20) {
      if ($tall1 == 2) {
        echo "$tall1<br>";
      } else if ($tall1 == 4) {
        echo "$tall1<br>";
      } else if ($tall1 == 6) {
        echo "$tall1<br>";
      } else if ($tall1 == 8) {
        echo "$tall1<br>";
      } else if ($tall1 == 9) {
        echo "$tall1<br>";
      } else if ($tall1 == 10) {
        echo "$tall1<br>";
      } else if ($tall1 == 12) {
        echo "$tall1<br>";
      } else if ($tall1 == 14) {
        echo "$tall1<br>";
      } else if ($tall1 == 16) {
        echo "$tall1<br>";
      } else if ($tall1 == 18) {
        echo "$tall1<br>";
      } else if ($tall1 == 20) {
        echo "$tall1<br>";
      }
    $tall1 = $tall1 + 1;
    }
    ?><br>








</div>

  </body>
</html>
