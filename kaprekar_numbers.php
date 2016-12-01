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
        $start = 2;
        $end = 100;
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

            if($length % 2 == 0){
                $result = str_split($square, $length / 2);
                $addition = $result[0] + $result[1];

                if($addition == $value){
                    echo 'The number ' . $value . ' is a Kaprekar number.' . '.<br>';
                }  
            }
        }

        ?>
        </div>
        
    </body>
</html>
