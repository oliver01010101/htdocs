<?php

function divide($a, $b)
{
    return $a / $b;
}

echo divide(10, 2);

function leker($table, $condition = null, $orderBy = null, $desc = false)
{
    $query = "SELECT * FROM $table";
    if ($condition != null) {
        if (is_array($condition)) {
            $query .= " WHERE " . implode(" AND ", $condition);
        } else {
            $query .= " WHERE $condition";
        }
    }
    if ($orderBy != null) {
        if (is_array($orderBy)) {
            $query .= " ORDER BY " . implode(", ", $orderBy);
        } else{
            $query .= " ORDER BY $orderBy";
        }
        if ($desc == true) {
            $query .= " ASC";
        } else{
            $query .= " DESC";
        }

    }
    return $query . ";";
}
//echo leker($users)