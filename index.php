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
                --ทั้งหมด--
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">ข่าวสารทั่วไป</a></li>
                <li><a class="dropdown-item" href="#">เพลง</a></li>
                <li><a class="dropdown-item" href="#">คอนเสิร์ต</a></li>
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
                if(!isset($_SESSION['id'])){
                    for($i=1;$i<=6;$i++){
                        echo "<tr><td><a class='link-underline link-underline-opacity-0' href='post.php?id=$i'>กระทู้ที่ $i</a></td></tr>";
                    }
                }elseif($_SESSION['role'] == "a"){
                    for($i=1;$i<=6;$i++){
                        echo "<tr class='m-2'><td><a class='link-underline link-underline-opacity-0' href='post.php?id=$i'>กระทู้ที่ $i</a><span class='me-4' style='float: right'><a class='btn btn-danger' href='delete.php?id=$i' role='button'><i class='bi bi-x-octagon'></i></a></span></td></tr>";
                    }
                }else{
                    for($i=1;$i<=6;$i++){
                        echo "<tr><td><a class='link-underline link-underline-opacity-0' href='post.php?id=$i'>กระทู้ที่ $i</a></td></tr>";
                    }
                }
            ?>
        </table>
        <!-- <div class="mb-3">
            <form>
                <label for="story" class="form-label"><b>หมวดหมู่ : </b></label>
                <select name="story" class="from-select">
                    <option value="All">--ทั้งหมด--</option>
                    <option value="normal">ข่าวสารทั่วไป</option>
                    <option value="music">เพลง</option>
                    <option value="concert">คอนเสิร์ต</option>
                    <option value="stream">สตรีม</option>
        </select> 
        </div> -->
        <!-- <?php
            if(!isset($_SESSION['id'])){
                echo "<a href='login.php' style='float: right;'>เข้าสู่ระบบ</a>";
            }else{
                echo "<span style='float: right;'>ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;
                <a href='logout.php'>ออกจากระบบ</a>
                </span>";
                echo "<br><a href='newpost.php'>สร้างกระทู้ใหม่</a>";
            }
        ?> -->
        </form><br>
    <!-- <ul>
        <?php
        if(!isset($_SESSION['id'])){
            for($i=1;$i<=10;$i++){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a><BR></li>";
            }
        }elseif($_SESSION['role'] == "a"){
            for($i=1;$i<=10;$i++){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a>&nbsp&nbsp<a href='delete.php?id=$i'>ลบ</a><BR></li>";
            }
        }else{
            for($i=1;$i<=10;$i++){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a><BR></li>";
            }
        }
        ?>
    </ul> -->
    </div>
</body>
</html>