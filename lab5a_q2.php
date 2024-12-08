<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
</head>
<body>

<style>
        table {
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }

    </style>


    <?php

    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
            ],

        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
            ],
            
        [
            'name' => 'Raju',
            'program' => 'BIP',
            'age' => 22
            ]    
        ];
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <tr>
            <?php
                foreach ($students as $s) {
                    echo "<tr>";
                    echo "<td>{$s['name']}</td>";
                    echo "<td>". $s['program'].'</td>';
                    echo "<td>". $s['age'].'</td>';
                    echo "</tr>";
                }
            ?>
        </tr>
    </table> 
</body>
</html>