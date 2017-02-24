<?php session_start();
$title = 'Hello, '.strtoupper($_SESSION['admin']);
?>

<style></style>
<body>
<table width="1300" border="0">
    <tr>
    <td align="right" width="700"><?php echo $title;?></td>
    <td align="right"><a href="2.php?do=logout">Вихід</a></td>
    </tr>
</table>
</body>

<?php
if(isset($_GET['do']) == 'logout')
{
    unset($_SESSION['admin']);
    session_destroy();
    header ('Location: 1.php' );
}

if (!isset($_SESSION['admin'])){
    header ('Location: 1.php');
}
