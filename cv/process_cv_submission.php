<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$fname = isset($_POST['fname']) ? $_POST['fname'] : null;
$lname = isset($_POST['lname']) ? $_POST['lname'] : null;
$dob = isset($_POST['dob']) ? $_POST['dob'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;
$objective = isset($_POST['objective']) ? $_POST['objective'] : null;
$institute = isset($_POST['institute']) ? $_POST['institute'] : null;
$gdate = isset($_POST['gdate']) ? $_POST['gdate'] : null;
$company = isset($_POST['company']) ? $_POST['company'] : null;
$sdate = isset($_POST['sdate']) ? $_POST['sdate'] : null;

$cvs = json_decode(file_get_contents('./cvs.json'));
$id = count($cvs) + 1;


// /Applications/MAMP/tmp/php/phpPo3EVN
// ./cv_photos/cv-1.jpeg
$file_name = '';
if (!empty($_FILES)) {
    // $file_ext_arr = explode('/', $_FILES['photo']['type']);
    // $file_ext = $file_ext_arr[array_key_last($file_ext_arr)];
    $file_ext = substr(
        $_FILES['photo']['type'], // 'image/jpeg'
        strpos($_FILES['photo']['type'], '/') + 1 // 6
    ); // /jpeg
    $file_name = "cv-$id.$file_ext";
    move_uploaded_file($_FILES['photo']['tmp_name'], "./cv_photos/$file_name");
}

$cvs[] = array(
    'id' => $id,
    'fname' => $fname,
    'lname' => $lname,
    'dob' => $dob,
    'phone' => $phone,
    'email' => $email,
    'address' => $address,
    'objective' => $objective,
    'institute' => $institute,
    'gdate' => $gdate,
    'company' => $company,
    'sdate' => $sdate,
    'photo' => $file_name
);

file_put_contents('./cvs.json', json_encode($cvs));

header("Location: cv_template.php?id=$id");
