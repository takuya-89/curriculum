<link rel="stylesheet" href="style.css">
<?php
$my_name = $_POST['my_name'];
$question1 = ["80","22","20","21"];
$question2 = ["PHP","Python","JAVA","HTML"];
$question3 = ["join","select","insert","update"];

$correct1= $question1[0];
$correct2= $question2[3];
$correct3= $question3[1];

?>

<body>
  <p>お疲れ様です<?php echo $my_name; ?>さん</p>

  <form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <div>
      <?php foreach ($question1 as $value) {
        echo "<input type= radio name=q1 value = $value>" ;
        echo $value;} ?>
    </div>

    <h2>②Webページを作成するための言語は？</h2>
    <div>
      <?php foreach ($question2 as $value) {
        echo "<input type= radio name=q2 value = $value>" ;
        echo $value;} ?>
    <div>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <div>
      <?php foreach ($question3 as $value) {
        echo "<input type=radio name=q3 value = $value>";
        echo $value;} ?>
    </div>
    <input type="hidden" name="hidden_param" value= <?php echo $my_name; ?> />
    <br>

    <input type="submit" value="回答する" class="submit"/>
  </form>
</body>