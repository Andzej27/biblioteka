<h1> Test połączenia z serwerem <i><?= $servername ?></i> i bazą <i><? $database ?></i></h1>
<p>
    <?php
    echo 'Host info: ' . mysqli_get_host_info($mysqlConnection) . '<br>';
    echo 'MySQKLi stat: ' . mysqli_stat($mysqlConnection);
    ?>
    </p>