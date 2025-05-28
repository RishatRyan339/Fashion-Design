<?php  
session_start();

include 'db.php';

$conn = getConnection();




if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('Query failed');

    if (mysqli_num_rows($select_users) > 0) {

        $row = mysqli_fetch_assoc($select_users);

      
        if (password_verify($pass, $row['password'])) {

            if ($row['user_type'] == 'admin') {
                $_SESSION['admin_name'] = $row['name'];
                $_SESSION['admin_email'] = $row['email'];
                $_SESSION['admin_id'] = $row['id'];
                header('location: admin_dashboard.php');
            } elseif ($row['user_type'] == 'user') {
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];
                header('location: home.php');
            }

        } else {
            $message[] = 'Incorrect email or password!';
        }

    } else {
        $message[] = 'No user found with that email!';
    }

}