<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Letter By Letter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/screen.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Letter By Letter</section>
        <p>Change the sentence to another sentence, letter by letter. The sentences will always have the same length.</p>
        <div class="answer">     
        
        <?php 
        //Print a formatted array:
        function print_array($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        
        //Initial input strings
        $str1 = 'floor';
        $str2 = 'brake';

        $arr1 = str_split($str1);
        $arr2 = str_split($str2);

        $val1 = $arr1[1];
        $val2 = $arr2[1];

        print_array($val1);
        print_array($val2);

        $arr_out = array_splice($arr1, 1, 1, $val1);

        print_array($arr_out);     

        ?>
        </div>
        
    </body>
</html>
