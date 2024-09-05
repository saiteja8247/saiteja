<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <style>
        table {
            width: 90%; /* Increased table width for better layout */
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Decreased width for time column */
        th:first-child,
        td:first-child {
            width: 10%;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>S.No</th> 
            <th>Exercise</th>
            <th>calories_consumed	</th>
            <th>sleep</th>
            <th>water_consumed</th>
            <th>Health_status</th>
            <th>Date</th> 
    </thead>
    <tbody>
        <?php
        // Example data for timetable
        $timetable = array(
            "1" => array("90", "300", "7", "8", "Healthy", "24-06-2024"),
            "2" => array("25", "100", "6", "5", "Unhealthy", "24-06-2024"),
            "3" => array("30", "50", "6", "5", "Unhealthy", "25-06-2024"),
            "4" => array("150", "400", "8", "7", "Healthy", "26-06-2024"),
            "5" => array("90", "180", "7", "7", "Healthy", "27-06-2024")
        );

        // Loop through each time slot
        foreach ($timetable as $time => $subjects) {
            echo "<tr>";
            echo "<td>$time</td>";
            foreach ($subjects as $subject) {
                echo "<td>$subject</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
