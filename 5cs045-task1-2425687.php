<?php

  $mysqli = new mysqli("localhost","db2425687","ManUnited123#","db2425687");

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
   
  $sql = "SELECT * FROM movies ORDER BY release_date"; 
  $results = mysqli_query($mysqli, $sql);

  if (!$results) {
    echo "Error retrieving movies: " . mysqli_error($mysqli);
    exit();
  }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of All My Movies</title>
</head>
<body>

    <h1>List of All My Movies!</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Movie name</th>
            <th>Genre</th>
            <th>Price</th>
            <th>Date of release</th>
        </tr>

        <?php while ($a_row = mysqli_fetch_assoc($results)): ?>
            <tr>
                <td><?= htmlspecialchars($a_row['movie_name']) ?></td>
                <td><?= htmlspecialchars($a_row['genre']) ?></td>
                <td>&pound;<?= number_format((float)$a_row['price'], 2) ?></td>
                <td><?= date('d/m/Y', strtotime($a_row['release_date'])) ?></td>
            </tr>
        <?php endwhile; ?>

    </table>

</body>
</html>