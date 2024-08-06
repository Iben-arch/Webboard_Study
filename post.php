<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Suisei</h1><hr>
    <div style="text-align: center;">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']?><br>
    </div>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><th style="background-color: #6CD2FE; text-align:left" colspan="2">แสดงความคิดเห็น</th></tr><br>
        <div style="text-align: center;">
        <?php
        if(($_GET['id'] % 2) == 0)
            echo "เป็นกระทู้หมายเลขคู่"."<BR>";
        else
            echo "เป็นกระทู้หมายเลขคี่"."<BR>";
        ?></div>
        <tr><td><form>
            <textarea name="message" rows="10" cols="100"></textarea>
        </form></td></tr><br>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr></table>
    <br>
    <div style="text-align: center;"><a href="index.php" >กลับไปหน้าหลัก</a></div>
</body>
</html>