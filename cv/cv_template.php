<?php include './header.php';
$cv_id = isset($_GET['id']) ? $_GET['id'] : null;
if (empty($cv_id))
    die("you are trying to access directly");

$cvs = json_decode(file_get_contents('./cvs.json'));
$cvs_arr = array_filter($cvs, function ($item) use ($cv_id) {
    return $item->id == $cv_id;
});
$cv = !empty($cvs_arr) ? $cvs_arr[array_key_first($cvs_arr)] : null;

if (empty($cv))
    die("no cv was found");

$html = <<<EOD
<div>
    <strong>%s</strong>
    <span>%s</span>
</div>
EOD;

$institutes = '';
foreach ($cv->institute as $i_key => $instutate_name) {
    // 0 => HTU (company)
    // 0 => 1-1-2012 (gdate)
    $institutes .= sprintf($html, $instutate_name, $cv->gdate[$i_key]);
}

$working_exp = '';
foreach ($cv->company as $c_key => $company_name) {
    $working_exp .= sprintf($html, $company_name, $cv->sdate[$c_key]);
}


foreach ($cv as $key => $value) {
    switch ($key) {
        case 'fname':
            // echo sprintf($html, "First Name", $value);
            printf($html, "First Name", $value);
            break;
        case 'lname':
            printf($html, "Last Name: ", $value);
            break;
        case 'lname':
            printf($html, "Last Name: ", $value);
            break;
        case 'dob':
            printf($html, "Date Of Birth: ", $value);
            break;
        case 'phone':
            printf($html, "Phone: ", $value);
            break;
        case 'email':
            printf($html, "Email: ", $value);
            break;
        case 'address':
            printf($html, "Address: ", $value);
            break;
        case 'objective':
            printf($html, "Objective: ", $value);
            break;
        case 'institute':
            echo "<p>Education:</p>";
            echo $institutes;
            break;
        case 'company':
            echo "<p>Working Exp:</p>";
            echo $working_exp;
            break;
        case 'photo':
            echo "<img src='./cv_photos/$value'>";
            break;
    }
}

?>
<?php
require './footer.php'; ?>
