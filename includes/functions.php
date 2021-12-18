<?php
function create_keyword($final)
{
$final = preg_replace("/&#?[a-z0-9]{2,8};/i","",$final);
$final = preg_replace('!\s+!', ' ', $final);
return $final;
}

?>