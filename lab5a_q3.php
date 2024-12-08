<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>

    <style>
        table {
            text-align: left;
        }
        table, th, td {
            border: 1px solid black;
        }

    </style>

    <?php
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }


    $multiplier = 2; 
    $tableData = multiplication($multiplier);
    ?>

    <table>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
            <tr>
                <?php
                    foreach ($tableData as $row) {
                        echo "<tr>";
                        echo "<td>{$row['no']}</td>";
                        echo "<td>{$row['multiplier']}</td>";
                        echo "<td>{$row['answer']}</td>";
                        echo "</tr>";
                    }
                    ?>
            </tr>
</body>
</html>
