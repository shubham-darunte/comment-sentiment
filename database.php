<?php
  $dbconn = pg_connect("host=localhost port=5432 dbname=cosanalysis user=postgres password=sairam") or die('Could not connect: ' . pg_last_error());
                            if (!$dbconn)
                            {
                                die('Error: Could not connect: ' . pg_last_error());
                            }
?>