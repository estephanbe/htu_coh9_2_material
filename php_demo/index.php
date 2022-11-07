<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>

<body>
    <a href="../">Back</a>
    <?php echo '<h1>PHP Demo</h1>'; ?>

    <?php

    echo "Hi"; // simi-colon is NOT optional

    // Comments
    // this is a single line comment
    /*
    This is a Multi
    line comment
    */
    # this is a sinle line comment

    echo '<br>';

    // PHP Variables - let in JS = $ in PHP. 
    $some_number_1 = 1;
    $Some_number_1 = 1; // not the same

    echo $some_number_1;
    echo '<br>';

    // PHP constants - const in JS = define in PHP
    define("TEST", "This is a testing constant");
    echo TEST;
    echo '<br>';

    // Concatination - in JS we use + || in PHP we use
    $test_concatination = "Hi " . "Ahmad";
    echo $test_concatination;
    echo '<br>';
    echo "from PHP: " . TEST;
    echo '<br>';

    // PHP Ops
    echo 1 * 2;
    $number = 1 + 2; // 3
    $number += 3; // 6
    $number++; // 7

    // string operators
    $some_string = "Hi ";
    $some_string .= "Ahmad"; // Hi Ahmad

    // Data types
    echo '<br>';
    $str = 'this is string'; // string
    $str_2 = "This string equals: $str"; // string
    $int = 1; // integer
    $float = 1.5; // float or double in some other languages. 
    $bool = true; // Boolean
    $null = null; // null
    $arr = [1, 2, 3]; // array
    $arr = array(1, 2, 3); // array
    $obj = (object) array(1, 2, 3); // object

    // Associative array
    $a_arr = array(
        "name" => "khalid",
        "class" => "PHP"
    );

    // debugging functions
    // var_dump($int);
    // print_r($a_arr);

    // User-defined functions
    function user_function()
    {
        $a = 1 + 5;
        return $a;
    }
    echo user_function();
    echo '<br>';
    // Variable scope

    $x = 5;
    $y = 6;

    function add_to()
    {
        global $x, $y;
        return $x + $y;
    }
    echo add_to();

    function access_globals()
    {
        // Super Global Variable
        var_dump($GLOBALS['x']);
    }
    access_globals();

    // Strings functions
    echo '<br>';
    // echo strlen('hello world'); 
    // echo str_word_count('hello world');
    // echo strrev('hello world');
    // echo strpos('Lorem ipsum dolor sit amet consectetur', 'amet');
    // echo strpos('Lorem ipsum dolor sit amet consectetur', 'amet');
    // echo str_replace('World', "Jordan", "Hello World");
    $sentence = "lorem ipsum dolor sit amet consectetur, adipisicing elit";
    $s_arr = explode(' ', $sentence);
    $new_sentence = implode(' ', $s_arr);
    var_dump($new_sentence);

    // Numbers function
    echo '<br>';
    $testing_number = 1; // int
    $testing_number_2 = 1.3; // float
    // is_int($value) - check if the $value type is integer
    // is_float($value) - check if the $value type is float
    // is_nan($value) - check if the $value is not a number
    // is_numeric($value) - check if the $value is number

    // Casting data types (changing data types)
    $string_to_int = (int) '123';
    $string_to_int2 = intval('123');
    $test_bool_casting = boolval(0); // false
    $test_bool_casting = boolval('0'); // false
    $test_bool_casting = boolval(1); // true
    $test_bool_casting = boolval(''); // false
    $test_bool_casting = (bool) "Lorem Ipsum"; // true

    // Math functions
    $min = min(2, 3, 4, 5, 6); // 2
    $max = max(2, 3, 4, 5, 6); // 6
    $round = round(1.5); // 2
    $floor = floor(1.5); // 1
    $ceil = ceil(1.1); // 2
    $rand = rand(1, 10);



    // ================================================================
    // ====================== Language Constructs =====================
    // ================================================================

    // ============== Conditional Statements

    // if statement
    if (1 < 5) {
        // do something
    } elseif (5 === 1) {
        // do something else
    } else {
        // do another thing
    }

    // switch statement
    $switch_var = 1;
    switch ($switch_var) {
        case 1:
            # code...
            break;

        default:
            # code...
            break;
    }

    // ============== Loops

    // while loop
    $while_var = 0;
    while ($while_var <= 10) {
        // echo $while_var . ' <br>';
        // echo "$while_var <br>";
        $while_var++;
    }

    // do while loop
    $do_while_var = 11;
    do {
        // echo "$do_while_var <br>";
    } while ($do_while_var <= 10);

    $for_loop_arr = array('ahmad', 'khalid', 'roy', 'mike');
    $for_loop_arr_length = count($for_loop_arr);
    for ($i = 0; $i < $for_loop_arr_length; $i++) {
        // echo $for_loop_arr[$i] . "<br>";
    }

    // Reversed sentence without using function
    $sentence_to_be_r = "Lorem ipsum dolor sit";
    $sentence_arr = explode(" ", $sentence_to_be_r);
    $sentence_arr_length = count($sentence_arr);
    $new_r_sentence = '';
    for ($i = $sentence_arr_length - 1; $i >= 0; $i--) {
        $new_r_sentence .= $sentence_arr[$i] . " ";
    }

    // Foreach loop
    $foreach_arr = array('khalid', 'ahmad', 'mike', 'roy');
    foreach ($foreach_arr as $value) {
        // echo "$value <br>";
    }

    $foreach_a_arr = array(
        "name" => 'Talal',
        'age' => 22,
        'class' => 'PHP'
    );
    $new_arr = array();
    foreach ($foreach_a_arr as $key => $value) {
        echo "$key: $value <br>";
        $new_arr[$value] = $key;
    }

    // ============== Constructs with HTML

    $html = "<h2>Costruct Demo</h2>";
    $html_switch = true;

    // if ($html_switch) {
    //     echo $html;
    // }
    ?>

    <div class="container">
        <?php if ($html_switch) { ?>
            <?php echo $html ?>
            <?= $html ?>
        <?php } ?>
    </div>


    <div class="container">
        <?php if ($html_switch) : ?>
            <?= $html ?>
        <?php endif; ?>
    </div>

</body>

</html>