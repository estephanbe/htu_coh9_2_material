<?php require './header.php';

$search_term = isset($_GET['s']) ? $_GET['s'] : null;

$courses = json_decode(file_get_contents('./api_data/courses.json'));
$final_courses = array();

if (!empty($search_term)) { // check if the user has entered a search term
    foreach ($courses as $course) { // loop through each course
        if (strpos($course->description, $search_term) !== false) { // we check if the searching term is in the course description
            $final_courses[] = $course; // it adds the course to the final coureses array. 
        }
    }
} else {
    die('you are trying to access directly without specifing a search term');
}

// $str = 'testing PHP';
// for ($i =  strlen($str); $i > 0; $i--) {
//     echo $str[$i - 1] . '<br>';
// }
// die;

?>
<main class="container my-5">

    <h1 class="text-center"> You are searching for "<?= $search_term ?>"</h1>
    <hr class="w-50 m-auto">

    <div id="htu-courses" class="mt-5 row">

        <?php if (!empty($final_courses)) {

            foreach ($final_courses as $course) :
        ?>
                <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                    <div class="card">
                        <img src="./assets/images/c1.jpeg" class="card-img-top" alt="PHP">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $course->title ?>
                            </h5>
                            <p class="card-text">
                                <?= $course->excerpt ?>
                            </p>
                            <a href="./course.php?id=<?= $course->id ?>" class="btn btn-primary">Check Course</a>
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
        } else {
            echo "<p class='text-center col-12'>No courses were found using your search term</p>";
        } ?>

    </div>
</main>
<?php require './footer.php';
?>