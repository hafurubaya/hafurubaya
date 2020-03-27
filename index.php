<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<?php
require_once("database.php");
?>
<body>

  <h2>Daftar Mahasiswa</h2>

  <table>
    <tr>
      <th>nrp</th>
      <th>nama</th>
      <th>fakultas</th>
    </tr>
    <?php
    $sql = "SELECT * FROM mahasiswa ORDER by nrp ASC";
    $result = $c->query($sql);
    if ($result->num_rows > 0) {

      $drivers = array();
      $i = 0;
      while ($obj = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $obj['nrp'] . '</td>';
        echo '<td>' . $obj['nama'] . '</td>';
        echo '<td>' . $obj['fakultas'] . '</td>';
      }
    } else {
      echo "Empty table.";
      die();
    }
    ?>
  </table>

</body>

</html>