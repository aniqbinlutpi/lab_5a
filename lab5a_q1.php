<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
    
</head>

<style>
        table {
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>

<body>
    <?php
    $name = "Wan Muhammad Aniq Irfan Bin Wan Mohd Lutpi";
    $matricNo = "AI220152";
    $course = "Software Engineering";
    $YOS = "3rd Year";
    $address = "Pasir Mas, Kelantan"; 
    ?>

    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Matric Number</th>
            <td><?php echo $matricNo; ?></td>
        </tr>
        <tr>
            <th>Course</th>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <th>Year of Study</th>
            <td><?php echo $YOS; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>
