<?php 
echo "Wat wilt u doen? (+, - , %)".PHP_EOL;
$choice = readline('');

if ($choice == "+" || $choice == "-" || $choice == "%" ) {
    echo('');
} else {
    echo("deze optie is niet mogelijk");
    exit;
}
echo "Eerste getal?". PHP_EOL; 
$first = readline('');

if (is_numeric($first)) {
    echo('');
} else {
    echo("$first is geen getal.");
    exit;
}

echo "Tweede getal?". PHP_EOL;
$second = readline ('');

if (is_numeric($second)) {
    echo('');
} else {
    echo("$second is geen getal.");
    exit;
}
if ($choice == '+') {
    print($first + $second);
} else {
    echo("");
}

if ($choice == '-') {
    print($first - $second);
} else {
    echo("");
}

if ($choice == '%') {
    print($first / $second);
} else {
    echo("");
}

 ?>