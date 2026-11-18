<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php
        $name = "Nazurah binti Mohamad";
        $matricNo = "AI250067";
        $course = "Software Engineering";
        $year = "Year 2";
        $address = "Kolej Taman Universiti UTHM";
    ?>
    <h2>Student Details</h2>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNo"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$year"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>
