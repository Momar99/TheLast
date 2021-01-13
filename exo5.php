<?php
$annee= stand(1,365);
if ($annee/4) && (!$annee/100) || ($annee/400);{
    echo "$annee bisextile";
    return true;
} else{
    echo "$annee non bisextile"; 
    return false;
}


?>