<?php echo date("d-m-y")." Pasquale Solution"; ?>
<?php
// Connecting, selecting database
$dbconn = pg_connect("host=ec2-174-129-29-118.compute-1.amazonaws.com dbname=ddbekjtmld2aip user=gguqvghwcocpcf password=zydeWWxS6IgvpgRgcVSpT5YME5")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM authors';
$result = pg_query($query) or die('Query failed 2: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>