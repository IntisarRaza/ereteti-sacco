<?php
$page_title = "Registration Confirmation";
$page_heading = "Registration Confirmation";

include 'includes/header.php';

$routes = [
    '1' => 'Kiserian',
    '2' => 'Ngong',
    '3' => 'Rongai'
];

echo '<main>';

if (
    isset($_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['route'])
    && isset($routes[$_POST['route']])
) {
    $first = htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'UTF-8');
    $last = htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $route = $routes[$_POST['route']];

    echo '<h2>Thank you, ' . $first . ' ' . $last . '</h2>';
    echo '<p>We have your application to join the ' . $route . ' route.</p>';
    echo '<p>The office will call you on ' . $phone . ' when your membership number is ready.</p>';
} else {
    echo '<h2>No application</h2>';
    echo '<p>This page answers the membership form.</p>';
    echo '<a href="register.php">Fill it in first.</a>';
}

echo '</main>';

include 'includes/footer.php';
?>