<h1>Lista danych w bazie biblioteka</h1>
<?php
$query ="show tables";

$result = mysqli_query($mysqlConnection, $query);
if (mysqli_num_rows($result) > 0) {
    
    echo '<ol style="list-style-type: circle;">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li> ' . $row['Tables_in_biblioteka'] . '</li>';
    }
    echo '</ol>';
} else {
    echo 'brak danych';
}
?>