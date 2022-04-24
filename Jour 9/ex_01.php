<?php
class MyDisplay
{
    public $display = 'Hello World !'. PHP_EOL;

    // method declaration
    public function display() {
        echo $this->display;
    }
}
