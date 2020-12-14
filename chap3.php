<div>
    <form action='index.php' method="post">
        <table>
            <tr>
                <td><input type="text" name="nombre" placeholder="Entrer un nombre..."></td>
                <td><input type="submit" value="Valider"></td>
            </tr>
        </table>
    </form>
</div>
<?php
if(isset($_POST['nombre'])){
        echo '<table>';
            for($i=0;$i<=14;$i++){
                echo "<tr><td>".$_POST['nombre']."</td><td>x</td><td>".$i."</td><td>=</td><td>".$i*$_POST['nombre']."</td></tr>";
            }
        echo "</table>";
}
?>