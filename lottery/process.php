<?php

if (empty($_POST['date'])) {
    $user = 'now';
} 
else {
    $user = $_POST['date'];    
}

$testdate = new DateTime($user);
$testdate->setTimezone(new DateTimeZone('Europe/Dublin'));
$infi = $testdate->format("y");
$his = $testdate->format("H:i:s");


$begin_first = new DateTime( '2016-08-14 21:30:00', new DateTimeZone('Europe/Dublin')); // starts at sunday 09:30 pm and repeats every 7 days
$end_first = new DateTime( $infi . '-12-31 21:30:00', new DateTimeZone('Europe/Dublin') );

$first_interval = DateInterval::createFromDateString('7 day');
$first_period = new DatePeriod($begin_first, $first_interval, $end_first);

$begin_second = new DateTime( '2016-08-09 21:30:00', new DateTimeZone('Europe/Dublin') ); // starts at tuesday 09:30 pm and repeats every 7 days
$end_second = new DateTime( $infi . '-12-31 21:30:00', new DateTimeZone('Europe/Dublin') );

$second_interval = DateInterval::createFromDateString('7 day');
$second_period = new DatePeriod($begin_second, $second_interval, $end_second);


$dw = date( "N", $testdate->format('U'));

function timeleft ($period, $user_input){
    $current_date = new DateTime($user_input);
    $current_date->setTimezone(new DateTimeZone('Europe/Dublin'));
    foreach ( $period as $dt ) { 

    if ($dt > $current_date) {
        $razlika_svega = $dt->diff($current_date);
        echo $razlika_svega->format("Next lottery drawing is in %a days, %h hours, %i minutes, %s seconds");
        break;
        
    }
            
}
}


if ($dw == 2 && $his >= '21:30:01' ){ 
   timeleft($first_period, $user);      
    }
else if ($dw == 7 && $his < '21:29:59') {
   timeleft($first_period, $user);    
} 
else if ($dw >2 && $dw < 7) {    
        timeleft($first_period, $user);   
}
else {
     timeleft($second_period, $user);     
}

?>
