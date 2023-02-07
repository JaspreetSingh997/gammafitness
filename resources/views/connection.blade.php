<?php

    $conn = DB::connection()->getPDO();

    if($conn)
    {
        echo "Database is connected";
    }
    else
    {
        echo "Failed to connect the database";
    }
?>