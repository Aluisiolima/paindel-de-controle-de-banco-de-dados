<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php include "./banco.php"?>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $conexao;?></title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
      <?php $cards->geraCards()?>
    </div>
</body>
</html>