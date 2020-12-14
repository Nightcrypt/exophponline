<form action="index.php" method="post">
    <input type="submit" value ="Generer un mot de passe" name="pwd">
</form>
<?php
if(isset($_POST['pwd'])){
    $mot_de_passe = '';
    for($i=0;$i<24;$i++){
        $get_number = rand(33,122);
        $number_to_ascii = chr($get_number);
        $mot_de_passe .= $number_to_ascii;
    }
    echo "<br>".$mot_de_passe;
}
?>