<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class=" container-lg">
        <?php
            include "nav.php";
        ?>
        <div class=" col-lg-6 col-md-8 col-sm-10 mx-auto">
            <div class=" card text-dark bg-white border-info m-auto mt-3">
                <?php
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql = "SELECT t2.login,t1.post_date,t1.title,t1.content FROM post as t1 INNER JOIN user as t2 ON (t1.user_id=t2.id)
                            where t1.id=$_GET[id]" ;
                    $result = $conn->query($sql);
                    while($row = $result->fetch()){
                        echo "<div class='card-header bg-info text-black'><h5>$row[2]</h5></div>
                            <div class='card-body'>$row[3]</div>
                        <div class='card-footer'>[$row[0]] - $row[1]</div>";
                    }

                $conn=null;
                ?>
            </div>
            <?php
                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                $sql1 = "SELECT comment.id,comment.content,user.login,comment.post_date FROM comment INNER JOIN user ON (comment.user_id=user.id)
                    INNER JOIN post ON (comment.post_id=post.id) where comment.post_id=$_GET[id] ORDER BY comment.post_date ASC";
                $result = $conn->query($sql1);
                $i=1;
                    while($row = $result->fetch()){
                        if ($row[3] != 'b'){
                        echo "<div class='card text-dark bg-white border-primary mt-3'>
                                <div class='card-header bg-primary text-white'>ความคิดเห็นที่ $i</div>
                                <div class='card-body'>$row[1]</div>
                                <div class='card-footer'>[$row[2]]-$row[3]</div>
                                </div>";
                        $i++;}
                        }
                        $conn=null;
                    
            if (isset($_SESSION['id']) && $_SESSION['role'] != 'b'){
                echo "<div class='card text-dark bg-white border-success m-auto mt-3' style='max-width: 50rem;'>
                    <div class='card-header bg-success text-white'>แสดงความคิดเห็น</div>
                    <div class='card-body'>
                        <form action='post_save.php' method='post'>
                        <input type='hidden' name='post_id' value='<?= $_GET[id]; ?>'>
                            <div class='row mb-3 justify-content-center'>
                                <div class='col-lg-10'>
                                    <textarea name='comment' class='form-control' rows='8'></textarea>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <center>
                                        <button type='submit' class='btn btn-success btn-sm text-white'>
                                            <i class='bi bi-box-arrow-up-right me-1'></i>ส่งข้อความ
                                        </button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>";               
        }
        ?>
    </div>
    <!--
    <div class="card border-primary mt-4 m-auto" style="max-width: 30rem;">
        <div class=" card-header border-primary bg-primary text-white">แสดงความคิดเห็น</div>
        <form action="index.php" method="post">
            <div class=" card-body">
                <textarea name="message" class=" form-control" rows="5" required></textarea>
            </div>
            <div class=" m-lg-2">
                <center>
                    <button type="submit" class=" btn btn-primary btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i>ส่งข้อความ</button>
                </center>
            </div>            
        </form>
    </div> -->
</body>
</html>