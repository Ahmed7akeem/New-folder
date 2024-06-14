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
        $sql = "SELECT * FROM users WHERE role = 'user'";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "User ID: {$row['id']}, Username: {$row['username']}, Role: {$row['role']}<br>";
            }
        } 
        else {
            echo "No users found with the specified role.";
        }
    } 
    elseif ($role === 'user') {
        $sql2 = 'INSERT INTO users (username, password, role) VALUES (?, ?, ?)';
        $stmt = $conn->prepare($sql2);
        $stmt->bind_param('sss', $username, $password, $role);

        if ($stmt->execute()) {
            echo "User successfully added!";
        } else {
            echo "Error adding user: " . $stmt->error;
        }
    }
     else {
        echo 'Enter valid data.';
    }
}
?>
