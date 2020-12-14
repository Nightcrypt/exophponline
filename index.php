<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="index.css"/>
</head>

<body>
   <div class="container">
       <a href="#"><h2>Chapitre 1</h2></a>
       <div class="chap1"><a href="http://jepeuxlefaire.net/lobeloic/devoir-1/">modification du devoir-1</a></div>
   </div>
   
    <div class="container">
       <a href="#"><h2>Chapitre 2</h2></a>
        <div class="chap2">
            <?php require('chap2.php')?>
        </div>
    </div>
    
    <div class="container">
        <a href="#"><h2>Chapitre 3</h2></a>
        <div class="chap3">
            <?php require('chap3.php')?>         
        </div>
    </div>
    
    <div class="container">
        <a href="#"><h2>Chapitre 4</h2></a>
        <div class="chap4">
             <?php require('chap4.php')?>
        </div>
    </div>
</body>
</html>
