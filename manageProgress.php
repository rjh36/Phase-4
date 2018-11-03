<?php

function createNewProgress ($databaseConnection, $id) {
    $create_course_progress_sql = "INSERT INTO `course progress`
                        VALUES ('$id', FALSE, FALSE, FALSE, FALSE, FALSE)";
    mysqli_query($databaseConnection, $create_course_progress_sql);
}

function updateProgressTrue($databaseConnection, $id, $columnName) {
    $update_course_progress_sql = "UPDATE `course progress` 
                        SET '$columnName' = TRUE 
                        WHERE id = '$id'";
    mysqli_query($databaseConnection, $update_course_progress_sql);
}

function getProgress($databaseConnection, $id) {
    $get_course_progress_sql = "SELECT * FROM `course progress` WHERE id = '$id'";
    $result = mysqli_query($databaseConnection, $get_course_progress_sql);
    $result_info = mysqli_fetch_row($result);
    return $result_info;
}

function getFinalReadiness($databaseConnection, $id) {
    $current_progress = getProgress($databaseConnection, $id);
    $all_modules_complete = $current_progress[1] and $current_progress[2] and $current_progress[3] and $current_progress[4];
    
    if ($all_modules_complete) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}