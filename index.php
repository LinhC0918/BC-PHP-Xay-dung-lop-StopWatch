<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
class Stopwatch
{
    private $startTime;
    private $endTime;
    function start()
    {
        $this->startTime = date('h:m:s');
    }
    function getStart()
    {
        return $this->startTime;
    }
    function stop()
    {
        $this->endTime = date('h:m:s');
    }
    function getEnd()
    {
        return $this->endTime;
    }
    function getElapsedTime()
    {
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}
$watch = new Stopwatch();
$watch->start();
echo $watch->getStart().'<br>';
sleep(2);
$watch->stop();
echo $watch->getEnd().'<br>';
echo $watch->getElapsedTime();
?>
</body>
</html>