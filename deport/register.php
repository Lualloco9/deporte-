<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $conn = mysqli_connect('localhost', 'username', 'password', 'mydatabase');

  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "Usuario registrado exitosamente";
  } else {
    echo "Error al registrar usuario: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
