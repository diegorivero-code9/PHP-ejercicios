<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("empleado.php");
    include("salesman.php");

    $paco=new Empleado("Paco Martínez",1400,"22/03/2021");
    $ana=new Salesman("Ana Santana",1500,"22/03/2023",20);

    $salaryPaco =$paco -> calculateSalary();
    echo"<p>El salario de Paco es $salaryPaco</p>";

    $ana-> sell(20000);
    $salaryAna = $ana -> calculateSalary() ;
    echo "<p>El salario de Ana es $salaryAna</p>";


    ?>
</body>
</html>