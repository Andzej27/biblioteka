<?php
$result = mysqli_query($mysqlConnection, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Numer czytelnika</th><th>Imię i nazwisko</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
            . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>