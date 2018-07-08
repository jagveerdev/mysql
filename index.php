<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>All Students</title>
    </head>
    <body>
        <?php
        include "menu.php";
        ?>
        <table border="1">
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Class</th>
                <th>Roll No</th>
                <th>Subjects</th>
            </tr>
            <?php
            // get all saved students
            $query = "SELECT * FROM students";
            $result = mysql_query( $query );
            while( $row = mysql_fetch_array( $result ) ) {
                echo '<tr>
                    <td>1</td>
                    <td>abc</td>
                    <td>php</td>
                    <td>1</td>
                    <td>
                        <ul style="padding: 0;margin: 0; margin-left: 20px">
                            <li>php</li>
                            <li>css</li>
                        </ul>
                    </td>
                </tr>';
            }
            ?>
        </table>
    </body>
</html>
<input type="text" id="test">

<input type="text">

<label for="test"><img src="//placehold.it/300x300?text=Garry" alt=""></label>