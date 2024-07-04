<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Fernanda Corredera PHP</title>
</head>
<body>
    <h1>Fernanda Corredera PHP</h1>
    <pre>
        FFFF
       F    
       FFF  
       F    
       F    
    </pre>
    <p>SHA256 do nome "Fernanda Corredera":</p>
    <?php
        $nome = 'Fernanda Corredera';
        $sha256 = hash('sha256', $nome);
        echo "<pre>$sha256</pre>";
    ?>
</body>
</html>
