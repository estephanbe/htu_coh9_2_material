<?php
session_start();
include './includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$_SESSION['error'] = null;

$title = isset($_POST['title']) ? $_POST['title'] : null;
$excerpt = isset($_POST['excerpt']) ? $_POST['excerpt'] : null;
$description = isset($_POST['description']) ? $_POST['description'] : null;
$is_featured = isset($_POST['is_featured']) ? $_POST['is_featured'] : null;

$error = false;
$error_msg = '';

if (!empty($title) && !empty($excerpt) && !empty($description)) {
    // Get all courses.
    $courses = json_decode(file_get_contents('./api_data/courses.json'));

    // add the new course to all the courses array.
    $courses[] = (object) array(
        // 'id' => $courses[array_key_last($courses)]->id + 1,
        'id' => count($courses) + 1,
        'title' => $title,
        'excerpt' => $excerpt,
        'description' => $description,
        'featured' => empty($is_featured) ? 0 : 1
    );

    // covert the courses array to json string.
    $json_courses = json_encode($courses);
    // rewrite the courses.json file with the new updated inormation.
    file_put_contents('./api_data/courses.json', $json_courses);
} else {
    $error = true;
    $error_msg = 'You need to enter some information';
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    htu_redirect('./create.php');
} else {
    htu_redirect('./all_courses.php');
}
