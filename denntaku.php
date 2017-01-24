<?php
$answer="";
if (isset($_POST['operator'])) {
    switch ($_POST['operator']) {
        case '-':
            $answer = $_POST['left'] - $_POST['right'];
            break;
        case '*':
            $answer = $_POST['left'] * $_POST['right'];
            break;
        case '/':
            $right=$_POST['right'];
            if($right==0) {
                print '０は計算できません';
            } else {
                $answer = $_POST['left'] / $_POST['right'];
            }
            break;
        case '+':
        default:
            $answer = $_POST['left'] + $_POST['right'];
            break;
    }
} else {
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>denntaku</title>
</head>
<body><form action="denntaku.php" method="POST">
    <input type="number" name="left" required/>
    <select name="operator">
        <option value="+" selected>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="right" required/>
    = <?php echo($answer); ?>
    <input type="submit" value="計算する">


</form>
</body>
</html>



