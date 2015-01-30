<?php

// Transactions test for a simple commit and rollback

pg_query("BEGIN") or die("Could not start transaction\n");

$res1 = pg_query("DELETE FROM products WHERE id IN (1, 9)");
$res2 = pg_query("INSERT INTO products (1, 'Tea', 360), (9, 'Coffee', 526)");

if ($res1 and $res2) {
    echo "Commiting transaction\n";
    pg_query("COMMIT") or die("Transaction commit failed\n");
} else {
    echo "Rolling back transaction\n";
    pg_query("ROLLBACK") or die("Transaction rollback failed\n");;
}

pg_close($con); 

?>