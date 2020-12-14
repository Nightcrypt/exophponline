
<div>
    <h4>Exercice 1</h4>
    <p>
        Liste de variables valides : <br>
        <ul>
            <li>mavar</li>
            <li style="color:#13a8a8">$mavar</li>
            <li style="color:#13a8a8">$var5</li>
            <li style="color:#13a8a8">$_mavar</li>
            <li style="color:#13a8a8">$_5var</li>
            <li style="color:#13a8a8">$__element1</li>
            <li>$hotel4*</li>
        </ul>
    </p>
</div>

<div>
    <h4>Exercice 2</h4>
    <p>
        <?php
            $x="PostgreSQL";
            $y="MySQL";
            $z=&$x;
            $x="PHP 5";
            $y=&$x;
            echo "Valeur de x : ".$x."<br>";
            echo "Valeur de y : ".$y."<br>";
            echo "Valeur de z : ".$z."<br>";
        ?>
    </p>
</div>

<div>
    <h4>Exercice 3 :</h4>
    <p>
      <?php
        echo "x avec $GLOBALS : ".@$GLOBALS["x"];
        echo "y avec $GLOBALS : ".@$GLOBALS["y"];
        echo "z avec $GLOBALS : ".@$GLOBALS["z"];
        ?>
    </p>
</div>

<div>
    <h4>Exercice 4 :</h4>
    <p>
      <?php

        ?>
    </p>
</div>

<div>
    <h4>Exercice 5 :</h4>
    <p>
      <?php
        $x="PHP7";
        $a[]=&$x;
        $y=" 7e version de PHP";
        $z=$y*10;
        $x.=$y;
        $y*=$z;
        $a[0]="MySQL";
        
        echo "Valeur de x : ".$x."<br>";
        echo "Valeur de y : ".$y."<br>";
        echo "Valeur de z : ".$z."<br>";
        echo "Valeur de z : ".$a."<br>";
        ?>
    </p>
</div>

<div>
    <h4>Exercice 6 :</h4>
    <p>
      <?php
        $x="7 personnes";
        $y=(integer) $x;
        $x="9E3";
        $z=(double) $x;
        
        echo "Valeur de x : ".$x."<br>";
        echo "Valeur de y : ".$y."<br>";
        echo "Valeur de z : ".$z."<br>";
        ?>
    </p>
</div>


<div>
    <h4>Exercice 7 :</h4>
    <p>
      <?php
        $a="0";$b="TRUE";
        $c=FALSE;
        $d=($a OR $b);
        $e=($a AND $c);
        $f=($a XOR $b);
        
        echo "Valeur de a : ".$a."<br>";
        echo "Valeur de b : ".$b."<br>";
        echo "Valeur de c : ".$c."<br>";
        echo "Valeur de d : ".$d."<br>";
        echo "Valeur de e : ".$e."<br>";
        echo "Valeur de f : ".$f."<br>";
        ?>
    </p>
</div>