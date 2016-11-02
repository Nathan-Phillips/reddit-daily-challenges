<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Simple Anagram Detector</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/screen.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Simple Anagram Detector</section>
        <p>Given two words or sets of words separated by a question mark, this form will tell you if one is an anagram of the other.</p>
        <div class="answer">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                
                <p class="form_caption">First word: <input class="text_field" type="text" name="word1"></p>
                <p class="qmark">?</p>
                <p class="form_caption">Second word: <input class="text_field" type="text" name="word2"></p>
                
                <p><input class="button" type="submit" value="Check if Anagram"></p>
            
            </form>            
        
        <?php 

        // Sanitise input
        function check_input($data){
            $data = stripslashes($data); // Remove backslashes (\) from user input
            $data = htmlspecialchars($data); // Save as HTML escaped code
            return $data;
        }

        // Sort strings for comparison
        function string_sort($string){
            $string = trim( preg_replace( '/[^0-9a-z]+/i', '', $string ) ); // Strip unnecessary characters (extra space, tab, newline) from user input
            $string = str_split(strtolower($string)); // Change string to all lowercase, split into an array
            sort($string); // Sort the array in ascending order
            return implode('', $string); // Turn the array back into a string
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $orig_str1 = $_POST[word1];
            $orig_str2 = $_POST[word2];
        }

        $str1 = string_sort($orig_str1);
        $str2 = string_sort($orig_str2);

        if(! strcasecmp($str1, $str2)){ // If strcasecmp == false (ie: 0)
            echo $orig_str1 . ' IS an anagram of ' . $orig_str2;
        } else {
            echo $orig_str1 . ' is NOT an anagram of ' . $orig_str2;
        }
            
        ?>
        </div>
        
    </body>
</html>
