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
        $str1 = 'a fall to the floor';
        $str2 = 'braking the door in';

        $arr1 = str_split($str1);               //Convert the input strings to arrays
        $arr2 = str_split($str2);

        $i = 0;

        echo $str1 . '<br>';
        
        while($i < count($arr1)){               //Start the loop
            if($arr1[$i] == $arr2[$i]){         //If the letter in array 2 is the same as array 1, just increment the loop counter
                $i++;
            } else {
                $arr1[$i] = $arr2[$i];          //Change the letter in loop 1 to be the same as in loop 2
                $output = implode('', $arr1);   //Convert the array to a string for output
                echo $output . '<br>';          //Output the string
                $i++;
            }
        }

        ?>
        </div>
        
    </body>
</html>
