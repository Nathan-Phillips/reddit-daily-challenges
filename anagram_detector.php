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
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Anagram ?</section>
        <p>Given two words or sets of words separated by a question mark, the task is to replace the question mark with information about the validity of the anagram.</p>
        <div class="answer">
            
        <?php 

        $string1 = 'Seth Rogan';
        $string2 = 'Gathers No';

        function stringSort($string){
            $string = strtolower($string);
            $string = str_split($string);
            sort($string);
            return implode('', $string);
        }

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
