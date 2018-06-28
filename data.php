<?php
  function get_data($key) {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host=localhost;dbname=test_dairy', 'root', 'root123', $pdo_options);
    $query = $db->query('SELECT DISTINCT * FROM members WHERE code ='.$key.' LIMIT 1');
    return $members = $query->fetch(PDO::FETCH_ASSOC);
  }
?>