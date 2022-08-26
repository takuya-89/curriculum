
<link rel="stylesheet" href="style.css">
<?php 
$my_name = $_POST['hidden_param'];

$answer1 =$_POST["q1"];
$answer2 =$_POST["q2"];
$answer3 =$_POST["q3"];

$correct1= "80";
$correct2= "HTML";
$correct3= "select";

function collation($answer,$correct){
  if($answer == $correct){
    echo "正解！";
  }else{
    echo "残念・・・";
  }
}

?>



<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<p>
  <?php collation($answer1,$correct1) ;?>
</p>

<p>②の答え</p>
<p>
  <?php collation($answer2,$correct2) ;?>
</p>

<p>③の答え</p>
<p>
  <?php collation($answer3,$correct3) ;?>
</p>