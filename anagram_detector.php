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
            $data = trim( preg_replace( "/[^0-9a-z]+/i", "", $data ) );
            $data = trim($data); // Strip unnecessary characters (extra space, tab, newline) from user input
            $data = stripslashes($data); // Remove backslashes (\) from user input
            $data = htmlspecialchars($data); // Save as HTML escaped code
            return $data;
        }

        // Sort strings for comparison
        function stringSort($string){
            $string = str_split(strtolower($string)); // Change string to all lowercase, split into an array
            sort($string); // Sort the array in ascending order
            return implode('', $string); // Turn the array back into a string
        }
        

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $original_string1 = $_POST[word1];
            $original_string2 = $_POST[word2];
        }

        

        echo $string1 . '<br>' . $string2 . '<br>';

        $str1 = stringSort($string1);
        $str2 = stringSort($string2);

        if(strcasecmp($str1, $str2) === 0){
            echo $string1 . ' IS an anagram of ' . $string2;
        } else {
            echo $string1 . ' is NOT an anagram of ' . $string2;
        }
            
        ?>
        </div>
        
    </body>
</html>
