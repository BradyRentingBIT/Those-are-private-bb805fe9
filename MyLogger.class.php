<?php

class MyLogger {

    public function log($message, $type)
    {
        echo $this->logWithTime() . $type . ": " . $message . PHP_EOL;
    }

    public function warning($message)
    {
        echo $this->logWithTime() . "WARNING: " . $message . PHP_EOL;
    }

    public function info($message)
    {
        echo $this->logWithTime() . "INFO: " . $message . PHP_EOL;
    }

    public function error($message)
    {
        echo $this->logWithTime() . "ERROR: " . $message . PHP_EOL;
    }

    public function debug($message)
    {
        echo $this->logWithTime() . "DEBUG: " . $message . PHP_EOL;
    }

    private function logWithTime()
    {
        return "[" . date('m/d/Y h:i:s', time()) . "] ";
    }

}

$logger = new MyLogger();
$logger->error('dit is een error');