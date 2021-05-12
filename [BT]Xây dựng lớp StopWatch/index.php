<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $arrayNumber = array();
    for ($index = 0; $index < 10000; $index++) {
        array_push($arrayNumber, mt_rand(0, 10000));
    };
    function selectSort($array)
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            $indexMin = $i;
            for ($index = $i + 1; $index < count($array); $index++) {
                if ($array[$indexMin] > $array[$index]) {
                    $indexMin = $index;
                };
            }
            //swap
            $temp = $array[$i];
            $array[$i] = $array[$indexMin];
            $array[$indexMin] = $temp;
        }
        return $array;
    }
    class StopWatch
    {
        private $startTime;
        private $endTime;
        function __construct()
        {
            $this->startTime = microtime(true);
        }
        public function get_startTime()
        {
            return $this->startTime;
        }
        public function get_endTime()
        {
            return $this->endTime;
        }
        public function start()
        {
            $this->startTime = microtime(true);
        }
        public function stop()
        {
            $this->endTime = microtime(true);
        }
        public function getElapsedTime()
        {
            $elapseTime = $this->endTime - $this->startTime;
            return round($elapseTime * 1000, 0);
        }
    }
    $stopWatch = new StopWatch();
    echo ($stopWatch->get_startTime());
    $stopWatch->start();
    selectSort($arrayNumber);
    $stopWatch->stop();
    echo "<br/>Times: " . $stopWatch->getElapsedTime() . " miliseconds<br/>";
    print_r(selectSort($arrayNumber));
    ?>
</body>

</html>