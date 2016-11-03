<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Playing the Stock Market</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/screen.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Playing the Stock Market</section>
        <p>Given a list of stock price ticks for the day, tell what trades should be made to maximize the gain. Remember - buy low, sell high.</p>
        <div class="answer">     
        
        <?php 
        //$str = '9.20 8.03 10.02 8.08 8.14 8.10 8.31 8.28 8.35 8.34 8.39 8.45 8.38 8.38 8.32 8.36 8.28 8.28 8.38 8.48 8.49 8.54 8.73 8.72 8.76 8.74 8.87 8.82 8.81 8.82 8.85 8.85 8.86 8.63 8.70 8.68 8.72 8.77 8.69 8.65 8.70 8.98 8.98 8.87 8.71 9.17 9.34 9.28 8.98 9.02 9.16 9.15 9.07 9.14 9.13 9.10 9.16 9.06 9.10 9.15 9.11 8.72 8.86 8.83 8.70 8.69 8.73 8.73 8.67 8.70 8.69 8.81 8.82 8.83 8.91 8.80 8.97 8.86 8.81 8.87 8.82 8.78 8.82 8.77 8.54 8.32 8.33 8.32 8.51 8.53 8.52 8.41 8.55 8.31 8.38 8.34 8.34 8.19 8.17 8.16';
        
        $str = '9.20 8.03 10.02 8.08 9.14 8.10 9.31 8.28 8.35 8.34';

        $stocks = explode(' ', $str);
        $count_stocks = count($stocks);
        $max_diff = 0;
        $trade = array('Buy' => 0, 'Sell' => 0);

        foreach($stocks as $key => $value){
            //echo '$stocks Key => ' . $key . ' $stocks Value => ' . $value . '<br>';
            
            for($j = $key + 2; $j < $count_stocks; $j++){
                //echo 'Current value of $j ' . $j . '<br>';
                
                $diff = $stocks[$j] - $value;
                //echo 'Current value of $stocks[' . $j . '] ' . $stocks[$j] . '<br>';
                //echo '$diff = ' . $diff . '<br>';

                //print_r($trade);
                
                if ($diff > $maxdiff) {
                    $maxdiff = $diff;
                    $trade['Buy'] = $stocks[$key];
                    $trade['Sell'] = $stocks[$j];
                }
            }
        }

        implode(' ', $trade);
        
        echo 'Given this ticker tape of stock prices: <br>' . $str . '.<br><br>';
        echo 'You should buy at ' . $trade['Buy'] . ' and sell at ' . $trade['Sell'] . '.';
        //print_r($trade);
        
        ?>
        </div>
        
    </body>
</html>