<!--田由美-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>数当てゲーム</title>
    </head>
    <body>
    <?php
   
    session_start();
    
    $type=$_POST["type"]??NULL;
    if($type=="guess"){
       $guess=$_POST["guess"]??NULL;
       $hit_number=$_SESSION["hit_number"]??NULL;
       if($hit_number<$guess){
          printf("<h1>%dは、大きいです。</h1><br>",$guess);
          $_SESSION["guess_count"]+=1;

       }elseif($hit_number>$guess){
         printf("<h1>%dは、小さいです。</h1><br>",$guess);
         $_SESSION["guess_count"]+=1;

       }elseif($hit_number==$guess){
         printf("<h1>%dは、当たりです</h1><br>",$guess);
         $_SESSION["guess_count"]+=1;

       }
    }else{
       $_SESSION["hit_number"]=rand(100,999);
       $_SESSION["guess_count"]=1;
       $_SESSION["history"]=array();

    }
    ?>
 <h1>100~999までの桁の数字を当ててください</h1><br>
 <h1><?=$_SESSION["guess_count"]?>回目の挑戦</h1><br>
    <form action ="NumberGame.php" method="POST">
        <input type ="hidden" name ="type" value="guess">
        <td><input style="font-size:20px" type="text" name="guess"/>
        <input style="font-size:20px" type ="submit" />
    </form>
   <h1>0を入力すると降参とし、答えを表示します。<h1>
     