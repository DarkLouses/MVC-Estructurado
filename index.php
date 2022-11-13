<?php include_once ('model/libros/libro_model.php'); 

    $libro = new libro_model();
   // $al = $libro->get_libro(1);
    $libro->des = 4;
    $libro->precio = 4;
    $libro->stock = 4;
    $libro->id_autor = 1;

    $al = $libro->insert_libro();
    print_r($al);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/styles/styles.css">
    <title>Libros</title>
</head>
<body>
    
</body>
</html>