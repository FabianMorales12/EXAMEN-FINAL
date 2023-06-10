<!DOCTYPE html>
<html>
<head>
    <title>EXAMEN FINAL</title>
    <style>
         
        

        th, td {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: red;
            color: white;
        }
        table{
            width: 1000px;
        } 
    </style>
</head>
<body>
    <h1> Alumnos</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Carnet</th>
            <th>Grado</th>
            <h1>Telefono</th>
            
        </tr>
        <?php

        $alumnos = array(
            array("Juan",23-8932, "primero p","23344534"),
            array("María",23-9282, "Segundo p","23344556"),
            array("Carlos",23-4673, "Tercero p", "76767889"),
            array("Laura",23-9282, "cuarto p", "42424242"),
            array("Pedro",23-7635, "quinto p" , "12233465"),
        );

        
        foreach ($alumnos as $alumno) {
            echo "<tr>";
            echo "<td>" . $alumno[0] . "</td>";
            echo "<td>" . $alumno[1] . "</td>";
            echo "<td>" . $alumno[2] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
