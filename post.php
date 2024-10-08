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
    <?php
    include "nav.php";
    ?>
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
    </div>
</body>
</html>