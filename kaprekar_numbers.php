<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kaprekar Numbers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/screen.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Kaprekar Numbers</section>
        <p>Determine the Kaprekar numbers from a given range of numbers.</p>
        <div class="answer">     
        
        <?php 
        //Print a formatted array:
        function print_array($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        
        //Initial input from 2 to 100
        $start = 101;
        $end = 9000;
        $input = array();
        $result = array();

        //Create the array
        for($i = $start; $i <= $end; $i++){
            array_push($input, $i);
        }

        //Square each element in the array and get the length of the result
        foreach ($input as $value) {
            $square = $value * $value;
            $length = strlen($square);

            if($length >=2){

                //echo '<br><hr>Starting number is ' . $value . ' which when squared becomes ' . $square . '.<br>';

                //echo '<br>Value of ' . $square . ' is ' . $length . ' characters long.<br>';

                $array1 = str_split($square);

                //print_array($array1);

                for($j = 1; $j <= $length; $j++){
                    $num1 = implode(array_splice($array1, 0, $j));

                    //echo '$num1 has the following value: ' . $num1 . '.<br>';
                    //echo 'String length of $num1 is ' . strlen($num1) . '<br>';
                    //print_array($array1);

                    $num2 = implode($array1);

                    //echo '$num2 has the following value: ' . $num2 . '.<br>';
                    if($num1 != 0 && $num2 !=0){
                        $addition = $num1 + $num2;
                    }
                    //echo 'ADDITION = ' . $addition . '.<br>';

                    if($addition == $value){
                        echo 'The number ' . $value . ' is a Kaprekar number.' . '<br>';
                    } 

                    $array1 = str_split($square);
                }
            }          
        }

        ?>
        </div>
        
    </body>
</html>
