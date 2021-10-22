<!--田由美-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>星座判定アプリ</title>
    </head>
    <body>
     <pre>
        <?php
        $type=$_POST["type"]??NULL;
        $month=$_POST["month"]??NULL;
        $day=$_POST["day"]??NULL;
        if($type=="zodiac"){
            $zodiac="";
            if(($month==3 && $day>=21)||($month==4 && $day<=19)){
                $zodiac="牡羊座";
            }else if(($month==4 && $day>=20)||($month==5 && $day<=20)){
                $zodiac="牡牛座";
            }else if(($month==5 && $day>=21)||($month==6 && $day<=21)){
                $zodiac="双子座";
            }else if(($month==6 && $day>=22)||($month==7 && $day<=22)){
                $zodiac="蟹座";
            }else if(($month==7 && $day>=23)||($month==8 && $day<=22)){
                $zodiac="獅子座";
            }else if(($month==8 && $day>=23)||($month==9 && $day<=22)){
                $zodiac="乙女座 ";
            }else if(($month==9 && $day>=23)||($month==10 && $day<=23)){
                $zodiac="天秤座";
            }else if(($month==10 && $day>=24)||($month==11 && $day<=22)){
                $zodiac="蠍座";
            }else if(($month==11 && $day>=23)||($month==12 && $day<=21)){
                $zodiac="射手座";
            }else if(($month==12 && $day>=22)||($month==1 && $day<=19)){
                $zodiac="山羊座";
            }else if(($month==1 && $day>=20)||($month==2 && $day<=18)){
                $zodiac="水瓶座";
            }else if(($month==2 && $day>=19)||($month==3 && $day<=20)){
                $zodiac="魚座";
            }
           
            //printf("あなたは{$zodiac}です。");
            echo"<h1>あなたは".$zodiac."です。</h1>";
            exit;
        }
        ?>

<h1>星座判定アプリです</h1><br>
<h1>あなたの誕生日を入力してください<h1><br>

<form method="post" action="zodiac.php">

<input style="font-size:20px" type="hidden" name="type" value="zodiac">
Month:<input style="font-size:20px" type="text" name="month"/>
Day:  <input style="font-size:20px" type="text" name="day"/>
                    <input type="submit" />
</form>