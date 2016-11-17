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
        //Print a formatted array:
        function print_array($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }

        $input_string = "100 80 30 50 130 75 90 60 150 85 120 70 200 200 110 100";

        //Convert the string to an array
        $input_array = explode(' ', $input_string); 

        //Permanently remove the first two values from the array and store as Goldilocks' stats
        $weight = array_shift($input_array);  
        $temperature = array_shift($input_array);

        //Initialise vars for later use
        $parameters = [];
        $wgt = 0;
        $tmp = 0;
        $i = $j = 0;

        //Take remaining value pairs from $input_array and create the multidimensional array $parameters
        while($i < count($input_array)){
            array_push($parameters, (array_slice($input_array, $i, 2)));
            $i += 2;
        }

        //Check multidimensional array has formed correctly (uncomment line below)
        //print_array($parameters);

        echo '<p>Goldilocks\' weight is ' . $weight . '.<br>';
        echo 'The maximum porridge temperature she can eat is ' . $temperature . '.</p>';

        //Iterate through the $parameters array, taking each sub-array in turn
        while($j < count($parameters)){

            $chair = $j + 1;
            echo '<p>Chair No. ' . $chair . '</p>';

            //Iterate through the 2-element sub-arrays to extract the chair weight and the porridge temperature
            foreach($parameters[$j] as $key => $val){
                if($key === 0){
                    echo '<p>The chair\'s weight limit is ' . $val . '.<br>';
                    
                    if($val >= $weight){
                        $wgt = 1;
                        echo 'The chair will support Goldilocks\' weight.</p>';
                    } else {
                        echo 'The chair will collapse.</p>';
                    }
                
                } else {
                    echo '<p>The temperature of the porridge is ' . $val . '.<br>';

                    if($val <= $temperature){
                        $tmp = 1;
                        echo 'The porridge is safe for Goldilocks to eat.</p>';
                    } else {
                        echo 'Goldilocks will burn herself.</p>';
                    }
                }

            }

            //Display which chair positions are safe to sit at
            if($wgt === 1 && $tmp === 1){
                echo '<p>Chair ' . $chair . ' is safe to sit at.</p>';
                $wgt = $tmp = 0;
            } else {
                echo '<p>Chair ' . $chair . ' is not safe to sit at.</p>';
                $wgt = $tmp = 0;
            }

            $j++;
        }   
            
        ?>
        </div>
        
    </body>
</html>
