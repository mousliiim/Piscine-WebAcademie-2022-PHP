<?php
function my_reset_session(){
	session_unset();
	session_reset();
}
