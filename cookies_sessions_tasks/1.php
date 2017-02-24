<?php
$defaultColor = 'white';

$colors = [
        'white' => 'Standard',
        'red' => 'Red',
        'yellow' => 'Yellow',
        'blue' => 'Blue',
        'grey' => 'Grey'

];

if (!empty($_POST)) {
    $selectedColor = !empty($_POST['color']) ? $_POST['color'] : $defaultColor;
    setcookie('color', $selectedColor, time()+30);
} else {
   $selectedColor = !empty($_COOKIE['color']) ? $_COOKIE['color'] : $defaultColor;
}

?>
<?php
function canChangeColor() {
    return !isset($_COOKIE['color']);
}
?>
<html>
<head>

</head>
<body style="background-color: <?php echo $selectedColor ?>">
    <br><strong>Виберіть фон:</strong><br><br>
    <form action="" method="post">
        <?php if (canChangeColor()) : ?>
        <select name="color">
            <?php foreach ($colors as $color => $colorName) {
                $selected = $selectedColor == $color ? 'selected' : '';
                echo '<option value="' . $color . '" ' . $selected . '>' . $colorName . '</option>';
            }
            ?>
        </select>

        <button type="submit">Send</button>
        <?php endif; ?>
    </form>
</body>
</html>

