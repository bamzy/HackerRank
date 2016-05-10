<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d\n", $count);
if ($count > 100)
    return -1;
for ($i=0;$i<$count;$i++){
    fscanf($_fp, "%d\n", $day);
    if ($day > pow(10,18))
        return -1;
    //print_r("day->" . $day . "\n");
    $sum = 0;
    for ( $j=1;$j<=$day;$j++){
        if (studentIthWillAttendDayNth($j,$day))
            $sum++;
    }
    // print_r("sum->" . $sum . "\n");
    if ($sum % 2 ==1)
        print_r("odd\n");
    else print_r("even\n");
}
function studentIthWillAttendDayNth($i,$day){
    if (($day/$i)%2 == 1)
        return true;
    else return false;

}
?>
