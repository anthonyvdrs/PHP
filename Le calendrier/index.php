<?php
date_default_timezone_set('Europe/Brussels');

if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {

    $M = $_POST['Month'];
    $Y = $_POST['Year'];
    $ym = date("$M-$Y");
}

$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date("$M-$Y");
    $timestamp = strtotime($ym . '-01');
}
$html_title = date("$M-$Y", $timestamp);

$prev = date("$M-$Y", mktime(0, 0, 0, date("$M", $timestamp)-1, 1, date("$Y", $timestamp)));
$next = date("$M-$Y", mktime(0, 0, 0, date("$M", $timestamp)+1, 1, date("$Y", $timestamp)));

$day_count = date('t', $timestamp);
 

$str = date('w', mktime(0, 0, 0, date("$M", $timestamp), 1, date("$Y", $timestamp)));

$weeks = array();
$week = '';

$week .= str_repeat('<td></td>', $str);
for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
     

    if ($str % 7 == 6 || $day == $day_count) {
        if ($day == $day_count) {

            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
        <form method="POST">
            <label for="Month"></label><br />
            <select class="form-group col-md bg-primary"name="Month">
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
            </select>
            <label for="Year"></label><br />
            <select class="form-group col-md bg-primary" name="Year" />
            <?php
            for ($i=1970; $i < 3000 ; $i++){
                echo "<option value=$i>$i</option>";
            }
            ?>
            </select>
            <button type="submit" class="btn btn-primary mb-2">Confirmer</button>
        </form>

    <div class="container">
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <table class="table table-bordered">
            <tr>
                <th>Dimanche</th>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>
</body>
</html>