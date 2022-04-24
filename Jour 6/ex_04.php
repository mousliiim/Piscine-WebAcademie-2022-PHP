<?php
function display_xml_nodes($xmlstr, $node){
        $contenair = simplexml_load_string($node);
	foreach($xmlstr as $key=>$node){
	echo $key;
}
	}
