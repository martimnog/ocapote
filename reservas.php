<?php
  session_start();

  #criar a ligação à BD
  include "./mysql_db_connect.php";

  $namename = mysqli_real_escape_string($conn,$_POST['name']);
  $people = mysqli_real_escape_string($conn,$_POST['people']);
  $date = mysqli_real_escape_string($conn,$_POST['date']);
  $message = mysqli_real_escape_string($conn,$_POST['message']);

  # Criar a query para a reserva
  $query = "INSERT INTO user (name, people, date, message)
   VALUES ('$name', '$people', '$date', '$message');";

  # realiza a query
  $result = mysqli_query( $conn, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conn) );

  if ($result > 0)
    $mensagem = 'Reserva criada com sucesso';

  mysqli_close($conn);//fechar a ligação à bd

  header("location: ./index.html?msg=$mensagem");
  exit();
?>