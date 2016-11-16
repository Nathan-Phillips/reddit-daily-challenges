<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Goldilocks</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/screen.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Goldilocks</section>
        <p>Which chairs can Goldilocks sit on and not burn herself on the porridge?</p>
        <div class="answer">     
        
        <?php 

        function print_array($array) {
            // Print a formatted array:
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }

        $input = "100 80 30 50 130 75 90 60 150 85 120 70 200 200 110 100";

        $table = explode(' ', $input);

        $weight = array_shift($table);
        $temperature = array_shift($table);

        $weights = array();
        $temps = array();

        $i = 0;

        while($i < count($table)){
            array_push($weights, (array_slice($table, $i, 2)));
            $i += 2;
        }

        print_array($weights);

        echo '<br>Weight is equal to ' . $weight . '.';
        echo '<br>Temperature is equal to ' . $temperature . '.';
            
        ?>
        </div>
        
    </body>
</html>
