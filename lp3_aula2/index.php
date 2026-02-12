<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 2</title>
</head>
<body>
        <h1>LP3 Aula 2</h1>
        <?php
        $xuxu = 16;
        echo " Maria tem $xuxu anos <br>";
        echo '$xuxu <br>';
        echo 4 ."<br>";
        echo $xuxu;
        ?>
        <?php 
        if($xuxu % 2 == 0){
            $resp = "par";
        } else {
            $resp = "impar";
        }
        ?>
        <h3>Lista</h3>
        <ul>
            <li>A variavel xuxu é <?php echo $resp; ?></li>
             <?php
              if($xuxu % 2 == 0){ ?>
                <li>A variavel é par</li>
        <?php } else { ?>
           <li>A variavel é impar</li>
        <?php } ?>
        
    
        </ul>
</body>
</html>
