<?php
function return_calls() {
   static $calls = 0;
   return $calls = $calls + 3;
}


