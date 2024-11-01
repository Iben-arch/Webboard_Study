<div class="container">
    <h1 style="text-align: center;" class="mt-3"><i class="bi bi-stars"></i>Webboard Suisei</h1>
        <nav class="navbar navbar-expand-lg" style="background-color: #d3d3d3;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i>Home</a>
                    <ul class="navbar-nav">
                        <?php 
                             if (!isset($_SESSION['id'])) {
                                echo "<li class='nav-item'><a class='nav-link' href='login.php'><i class='bi bi-pencil-square'></i> เข้าสู่ระบบ</a></li>";
                            } else {
                                echo "<li class='nav-item dropdown'>";
                                echo "<a class='btn btn-outline-secondary btn-sm dropdown-toggle' role='button' data-bs-toggle='dropdown'><i class='bi bi-person-lines-fill'></i> $_SESSION[username]</a>";
                                echo "<ul class='dropdown-menu'>";
                                if ($_SESSION['role'] == "a"){
                                    echo "<li><a class='dropdown-item' href='category.php'><i class='bi bi-bookmarks'></i> จัดการหมวดหมู่</a></li>";
                                    echo "<li><a class='dropdown-item' href='user.php'><i class='bi bi-person-check'></i> จัดการผู้ใช้งาน</a></li>";
                                }
                                echo "<li><a class='dropdown-item' href='logout.php'><i class='bi bi-power'></i> ออกจากระบบ</a></li>";
                                echo "</ul></li>";
                            }
                        ?>
                    </ul>
            </div>
        </nav>