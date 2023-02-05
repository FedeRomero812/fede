<?php
  // Conectar a la base de datos
  $host = "localhost";
  $username = "database_user";
  $password = "database_password";
  $dbname = "flight_database";
  $conn = mysqli_connect($host, $username, $password, $dbname);
  
  // Verificar la conexión a la base de datos
  if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
  }
  
  // Recibir la ID del vuelo seleccionado
  $flight_id = $_GET['id'];
  
  // Realizar una consulta a la base de datos para obtener información sobre el vuelo seleccionado
  $sql = "SELECT * FROM flights WHERE id='$flight_id'";
  $result = mysqli_query($conn, $sql);
  
  // Verificar si hay resultados disponibles
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    
    // Mostrar la información sobre el vuelo seleccionado
    echo "Vuelo seleccionado: " . $row['flight_number'] . "<br>";
    echo "Origen: " . $row['origin'] . "<br>";
    echo "Destino:
