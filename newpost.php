<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "nav.php";
    ?>

<div class=" card text-dark bg-white border-info mt-4 m-auto" style="max-width: 40rem;">
        <div class=" card-header bg-info text-white">ตั้งกระทู้ใหม่</div>
        <div class=" card-body">
            <form action="newpost_save.php" method="post">
                <div class=" row mb-3">
                    <label class=" col-lg-3 col-form-label">หมวดหมู่ :</label>
                    <div class=" col-lg-9">
                        <select name="category" class=" form-select">
                            <?php
                                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                $sql = "SELECT * FROM category";
                                foreach($conn->query($sql) as $row){
                                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                                }
                                $conn=null;
                            ?>
                        </select>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label class=" col-lg-3 col-form-label">หัวข้อ :</label>
                    <div class=" col-lg-9">
                        <input type="text" name="topic" class=" form-control" required>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label class=" col-lg-3 col-form-label">เนื้อหา :</label>
                    <div class=" col-lg-9">
                        <textarea name="comment" class=" form-control" rows="8" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-12">
                        <center>
                            <button type="submit" class=" btn btn-info btn-sm text-white">
                                <i class="bi bi-caret-right-square me-1"></i>บันทึกข้อความ
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- <h1 style="text-align: center;">Webboard Suisei</h1><hr><br>
    <?php
        echo "ผู้ใช้ : $_SESSION[username]<br>";
        echo "<table><tr><td><form>หมวดหมู่ :</td>
        <td><select name='story'>
            <option value='All'>--ทั้งหมด--</option>
            <option value='normal'>ข่าวสารทั่วไป</option>
            <option value='music'>เพลง</option>
            <option value='concert'>คอนเสิร์ต</option>
            <option value='stream'>สตรีม</option>
        </select></td></tr><br>
        <tr><td>หัวข้อ : </td>
        <td><input type='text'></td></tr>
        <tr><td>เนื้อหา : </td>
        <td><textarea rows='5' cols='50'></textarea></td></tr>
        <tr><td colspan='2'><input type='submit' value='บันทึกข้อความ'></td></tr>
        </table>
        <div style='text-align: center';><a href='index.php' >กลับไปหน้าหลัก</a></div>";
    ?> -->
</body>
</html>