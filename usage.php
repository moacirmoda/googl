<?php

require "googl.class.php";

$googl = new Googl("YOUR KEY");
$googl->set_short("http://www.mexx.com.br/blogs/moa");

print $googl->get_short();

?>