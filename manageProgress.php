<?php

function createNewProgress($databaseConnection, $id) {
    $NP_stmt = $databaseConnection->prepare("INSERT INTO `course progress`
                        VALUES (?, FALSE, FALSE, FALSE, FALSE, FALSE)");
    $NP_stmt->bind_param("i", $id);
    $NP_stmt->excecute();
    mysqli_stmt_close($NP_stmt);
}

function updateProgressTrue($databaseConnection, $id, $columnName) {
    $UP_stmt = $databaseConnection->prepare("UPDATE `course progress` 
                        SET ? = TRUE 
                        WHERE id = ?");
    $UP_stmt->bind_param("si", $columnName, $id);
    $UP_stmt->excecute();
    mysqli_stmt_close($UP_stmt);
}

function getProgress($databaseConnection, $id) {
    $GP_stmt = $databaseConnection->prepare("SELECT * FROM `course progress` WHERE id = ?");
    $GP_stmt->bind_param("i", $id);
    $GP_stmt->excecute();
    $GP_result = $GP_stmt->getResult();
    $GP_info = mysqli_fetch_row($GP_result);
    return $GP_info;
}

function getFinalReadiness($databaseConnection, $id) {
    $current_progress = getProgress($databaseConnection, $id);
    $all_modules_complete = $current_progress[1] and $current_progress[2] and $current_progress[3] and $current_progress[4];
    
    return $all_modules_complete;
}

function boolToString($bool) {
    if($bool) {
        return "Yes";
    }
    else {
        return "No";
    }
}