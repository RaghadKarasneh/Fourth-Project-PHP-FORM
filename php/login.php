<?php
$dateOfBirth = "01-01-2020";
$today = date("Y-m-d");
if((floor((time() - strtotime('2020-09-16')) / 31556926)) >16){
    echo '>16';
}

else{
    echo '<16';
}

?>