<?php
include "connection.php";
if( isset( $_POST[ 'save_student' ] ) ) {
    // we are trying to save the student
    extract( $_POST );
    // validations
    // id, name, class, roll_no, subjects
        // implode
        // $subjects = '';
        // foreach( $student_subjects as $subject ) {
        //     $subjects = $subjects . $subject . ",";
        // }
        // vd($subjects);
        // $subjects = substr( $subjects, 0, -1 );
    $subjects = implode( ',', $student_subjects );
    $query = "INSERT INTO students VALUES ( NULL, '$student_name', '$student_class', '$student_roll', '$subjects')";
    $result = mysql_query( $query );
    $loc = 'insert.php?error=1';
    if( true == $result ) {
        $loc = 'index.php';
    }
    header( "Location: $loc" );
    die;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Student</title>
    </head>
    <body>
        <?php
        include "menu.php";
        ?>
        <form method="post">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <td>
                        <input type="text" name="student_name" />
                    </td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td>
                        <input type="text" name="student_class" />
                    </td>
                </tr>
                <tr>
                    <th>Roll Number</th>
                    <td>
                        <input type="number" name="student_roll" />
                    </td>
                </tr>
                <tr>
                    <th>Subjects</th>
                    <td>
                        <?php foreach( $all_subjects as $code => $title ) { ?>
                            <div>
                                <label>
                                    <input type="checkbox" name="student_subjects[]" value="<?php echo $code ?>">
                                    <?php echo $title ?>
                                </label>
                            </div>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" name="save_student" value="Save" />
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>