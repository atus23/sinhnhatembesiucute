<!-- <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết buổi hẹn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php
// Lấy giá trị option từ URL
$option = isset($_GET['option']) ? $_GET['option'] : 'restaurant';

// Dữ liệu về các lựa chọn
$options = [
    'restaurant' => [
        'title' => 'Nhà hàng sang trọng',
        'image' => 'restaurant.png',
        'time'  => '19:00 - 21:00',
        'location' => 'Nhà hàng The Luxury, Quận 1, TP.HCM',
        'description' => 'Một bữa tối lãng mạn tại nhà hàng 5 sao, thưởng thức rượu vang và nhạc sống.'
    ],
    'aquarium' => [
        'title' => 'Thủy cung lãng mạn',
        'image' => 'aquarium.png',
        'time'  => '14:00 - 16:00',
        'location' => 'Thủy cung VinWonders, TP.HCM',
        'description' => 'Dạo bước dưới đại dương, ngắm nhìn những sinh vật biển tuyệt đẹp.'
    ],
    'home' => [
        'title' => 'Hẹn hò tại nhà',
        'image' => 'home.png',
        'time'  => '18:00 - 22:00',
        'location' => 'Tại nhà của chúng ta 💕',
        'description' => 'Cùng nhau nấu ăn, xem phim và tận hưởng không gian riêng tư.'
    ]
];

// Kiểm tra nếu lựa chọn hợp lệ
if (!array_key_exists($option, $options)) {
    echo "<div class='container text-center mt-5'><h3>Lựa chọn không hợp lệ!</h3></div>";
    exit;
}

// Lấy dữ liệu tương ứng với lựa chọn
$selected = $options[$option];
?>

<div class="container text-center mt-5">
    <h1 class="mb-4"><?= $selected['title'] ?></h1>
    <img src="<?= $selected['image'] ?>" class="img-fluid rounded mb-4" alt="<?= $selected['title'] ?>" width="600">
    
    <p><strong>🕒 Thời gian:</strong> <?= $selected['time'] ?></p>
    <p><strong>📍 Địa điểm:</strong> <?= $selected['location'] ?></p>
    <p><strong>💖 Mô tả:</strong> <?= $selected['description'] ?></p>
    
    <a href="confirm.php?option=<?= $option ?>" class="btn btn-success mt-3">Xác nhận lựa chọn</a>
    <br><br>
    <a href="index.php" class="btn btn-secondary">Quay lại</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết buổi hẹn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFAF0;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .btn-custom {
            background: #FF69B4;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #FF1493;
        }
        .img-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<?php
// Lấy giá trị option từ URL
$option = isset($_GET['option']) ? $_GET['option'] : 'restaurant';

// Dữ liệu về các lựa chọn
$options = [
    'restaurant' => [
        'title' => 'Restaurant Date',
        'image' => 'restaurant.png',
        'time'  => '19:00 - 21:00',
        'location' => 'Gent Steak, Trung Hòa, Cầu giấy',
        'description' => 'Cùng nhau thưởng thức Beef Steak trong không gian lãng mạn    .'
    ],
    'aquarium' => [
        'title' => 'Aquarium Date',
        'image' => 'aquarium.png',
        'time'  => '19:00 - 21:00',
        'location' => 'Thủy cung Vinpearl Timescity or Lotte World Aquarium ',
        'description' => 'Dạo bước dưới đại dương, ngắm nhìn những sinh vật biển tuyệt đẹp.'
    ],
    'home' => [
        'title' => 'Home Date',
        'image' => 'home.png',
        'time'  => '19:00 - 23:00',
        'location' => 'Tại 1 căn homestay mà anh sẽ lựa chọn cẩn thận nha 💕',
        'description' => 'Cùng nhau nấu ăn, xem phim và tận hưởng không gian riêng tư.'
    ]
];

// Kiểm tra nếu lựa chọn hợp lệ
if (!array_key_exists($option, $options)) {
    echo "<div class='container text-center mt-5'><h3>Lựa chọn không hợp lệ!</h3></div>";
    exit;
}

// Lấy dữ liệu tương ứng với lựa chọn
$selected = $options[$option];
?>

<div class="container text-center">
    <h1 class="mb-4 text-danger"><?= $selected['title'] ?></h1>
    <div class="img-container mb-3">
        <img src="<?= $selected['image'] ?>" alt="<?= $selected['title'] ?>">
    </div>
    
    <p><strong>🕒 Thời gian:</strong> <?= $selected['time'] ?></p>
    <p><strong>📍 Địa điểm:</strong> <?= $selected['location'] ?></p>
    <p><strong>💖 Mô tả:</strong> <?= $selected['description'] ?></p>

    <a href="confirm.php?option=<?= $option ?>" class="btn btn-custom">Xác nhận lựa chọn 💕</a>
    <br><br>
    <a href="index.php" class="btn btn-secondary">Quay lại</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
