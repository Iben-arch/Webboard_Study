<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Suisei</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function myFunction(){
            let r = confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
    </script>
</head>
<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard Suisei</h1>
        <nav class="navbar navbar-expand-lg" style="background-color: #d3d3d3;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i>Home</a>
                    <ul class="navbar-nav">
                        <?php 
                            if(!isset($_SESSION['id'])){
                                echo "<li class='nav-item'>
                                        <a class='nav-link' href='login.php'><i class='bi bi-pencil-square'></i>เข้าสู่ระบบ</a>
                                    </li>";
                            }else{
                                echo "<li class='nav-item dropdown'>
                                        <a class='btn btn-outline-secondary btn-sm dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                            <i class='bi bi-person-lines-fill'></i>$_SESSION[username]
                                        </a>
                                        <ul class='dropdown-menu'>
                                                <li><a class='dropdown-item' href='logout.php'><i class='bi bi-power'></i>ออกจากระบบ</a></li>
                                        </ul>
                                    </li>";
                            }
                        ?>
                    </ul>
            </div>
        </nav>
        <div class="dropdown mt-3">
            <label>หมวดหมู่</label>
            <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
                // แสดงชื่อหมวดหมู่ที่ถูกเลือก
                if (isset($_GET['cat_id']) && $_GET['cat_id'] != 0) {
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                    $cat_id = $_GET['cat_id'];
                    $cat_sql = "SELECT name FROM category WHERE id = :cat_id";
                    $cat_stmt = $conn->prepare($cat_sql);
                    $cat_stmt->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
                    $cat_stmt->execute();
                    $category = $cat_stmt->fetchColumn();
                    echo htmlspecialchars($category);
                } else {
                    echo "--ทั้งหมด--";
                }
            ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="Button2">
                <li><a href="?cat_id=0" class=" dropdown-item">--ทั้งหมด--</a></li>
                <?php
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql = "SELECT * FROM category";
                    foreach($conn->query($sql) as $row){
                        echo "<li><a href=?cat_id=$row[id] class=' dropdown-item'>$row[name]</a></li>";
                    }
                    $conn=null;
                ?>
            </ul>
            <span class="d-inline-flex gap-1" style="float: right;">
                <?php 
                    if(isset($_SESSION['id'])){
                        echo "<a class='btn btn-success' href='newpost.php' role='button'><i class='bi bi-plus'></i>สร้างกระทู้ใหม่</a>";
                    }
                ?>
            </span>
        </div>
        <br>
        <table class="table table-striped">
            <?php
                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                $sql = "SELECT category.name,post.title,post.id,user.login,post.post_date,category.id,post.user_id FROM post INNER JOIN user ON (post.user_id=user.id)
                INNER JOIN category ON (post.cat_id=category.id)";
                if (isset($_GET['cat_id']) && $_GET['cat_id'] != 0) {
                    $sql .= " WHERE post.cat_id = :cat_id";
                }
                $sql .= " ORDER BY post.post_date DESC";
        
                $stmt = $conn->prepare($sql);
        
                // Bind the category ID if it's set
                if (isset($_GET['cat_id']) && $_GET['cat_id'] != 0) {
                    $stmt->bindParam(':cat_id', $_GET['cat_id'], PDO::PARAM_INT);
                }
        
                $stmt->execute();
                while($row = $stmt->fetch()){
                        echo "<tr><td class = 'd-flex justify-content-between'><div>[$row[0]] <a href=post.php?id=$row[2] style=text-decoration:none>$row[1]</a>
                        <br>$row[3] - $row[4]</div>";
                        if (isset($_SESSION['id'])) {
                            if ($_SESSION['user_id'] == $row[6] || $_SESSION['role'] == 'a') {
                                // ปุ่มแก้ไข
                                if ($_SESSION['user_id'] == $row[6]) {
                                    echo "<div class='me-2 align-self-center'><a href='edit.php?id={$row[2]}' 
                                    class='btn btn-warning btn-sm me-2'><i class='bi bi-pencil'></i></a>";
                                    if($_SESSION['role'] == 'm'){
                                        echo "<a href='delete.php?id={$row[2]}' 
                                        class='btn btn-danger btn-sm' onclick='return myFunction()'><i class='bi bi-trash'></i></a></div>";
                                    } 
                                }else{
                                    echo"<div class='me-2 align-self-center'>";
                                }
                                if($_SESSION['role'] == 'a'){
                                    // ปุ่มลบ
                                    echo "<a href='delete.php?id={$row[2]}' 
                                    class='btn btn-danger btn-sm' onclick='return myFunction()'><i class='bi bi-trash'></i></a></div>"; 
                                }
                            }
                        }
                        echo "</td></tr>";
                    }
                $conn=null;
            ?>
        </table>
                    <!-- <div class='me-2 align-self-center justify-content-md-end'><a href='edit.php?id=$row[2]' 
            class='btn btn-warning btn-sm'><i class='bi bi-pencil-fill'></i></a></div> -->
    </div>
</body>
</html>