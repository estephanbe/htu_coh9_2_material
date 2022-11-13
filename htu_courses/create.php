<?php
require './header.php'; ?>

<div class="container my-5 py-5">
    <h1 class="text-center">Create Course</h1>
    <hr class="w-50 m-auto mb-5">

    <div class="my-5 d-flex justify-content-center align-items-center">
        <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php endif; ?>
    </div>

    <form class="w-50" method="POST" action="./store.php">
        <div class="mb-3">
            <label for="course-title" class="form-label">Course Title</label>
            <input type="text" class="form-control" id="course-title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="course-excerpt" class="form-label">Course Excerpt</label>
            <input type="text" class="form-control" id="course-excerpt" name="excerpt" required>
        </div>
        <div class="mb-3">
            <label for="course-description" class="form-label">Course description</label>
            <textarea class="form-control" id="course-description" name="description" required></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="course-feature" name="is_featured">
            <label class="form-check-label" for="course-feature">
                Is Featured?
            </label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
</div>

<?php require './footer.php'; ?>