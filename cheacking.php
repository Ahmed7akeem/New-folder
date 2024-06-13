<?php
include 'conn.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    function prep($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = prep($_POST['username']);
    $password = prep($_POST['password']);
    $role = prep($_POST['role']);

    if ($role === 'admin') {
        echo '<h1>hello admin</h1>';
        $sql = "SELECT * FROM users WHERE role = 'user'";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<pre>";
                print_r($row);
            }
        } else {
            echo "No users found with the specified role.";
        }
    } else if ($role === 'user') {
        echo '<h1>hello user</h1>';
    } else {
        echo 'Enter valid data.';
    }
}
?>
