<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $weight = rand(25, 500);
        $height = rand(25, 500);
        
        function generaUrlImmagine($weight, $height){
            $immagine = 'https://picsum.photos/'.$weight.'/'.$height.'';
            return $immagine;
        }
        
        echo "<img src='". generaUrlImmagine($weight, $height) ."'></img>";

    ?>

</body>
</html>