<!-- <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận lịch hẹn</title>
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
        'location' => 'Nhà hàng The Luxury, Quận 1, TP.HCM'
    ],
    'aquarium' => [
        'title' => 'Thủy cung lãng mạn',
        'image' => 'aquarium.png',
        'time'  => '14:00 - 16:00',
        'location' => 'Thủy cung VinWonders, TP.HCM'
    ],
    'home' => [
        'title' => 'Hẹn hò tại nhà',
        'image' => 'home.png',
        'time'  => '18:00 - 22:00',
        'location' => 'Tại nhà của chúng ta 💕'
    ]
];

// Kiểm tra nếu lựa chọn hợp lệ
if (!array_key_exists($option, $options)) {
    echo "<div class='container text-center mt-5'><h3>Lựa chọn không hợp lệ!</h3></div>";
    exit;
}

// Lấy dữ liệu lựa chọn
$selected = $options[$option];
?>

<div class="container text-center mt-5">
    <h1 class="mb-4">Xác nhận lịch hẹn</h1>
    <img src="<?= $selected['image'] ?>" class="img-fluid rounded mb-4" alt="<?= $selected['title'] ?>" width="500">
    
    <p><strong>🕒 Thời gian:</strong> <?= $selected['time'] ?></p>
    <p><strong>📍 Địa điểm:</strong> <?= $selected['location'] ?></p>
    
    <form action="submit.php" method="post">
        <input type="hidden" name="option" value="<?= $option ?>">
        
        <div class="mb-3">
            <label for="message" class="form-label">Gửi lời nhắn cho anh nè 💌</label>
            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Nhập lời nhắn..."></textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Xác nhận</button>
    </form>
    
    <br>
    <a href="detail.php?option=<?= $option ?>" class="btn btn-secondary">Quay lại</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận lịch hẹn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFF0F5;
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
        textarea {
            border-radius: 10px;
            border: 2px solid #FF69B4;
            padding: 10px;
            width: 100%;
            resize: none;
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
        'location' => 'Gent Steak, Trung Hòa, Cầu giấy'
    ],
    'aquarium' => [
        'title' => 'Aquarium Date',
        'image' => 'aquarium.png',
        'time'  => '19:00 - 21:00',
        'location' => 'Thủy cung Vinpearl Timescity or Lotte World Aquarium '
    ],
    'home' => [
        'title' => 'Home Date',
        'image' => 'home.png',
        'time'  => '19:00 - 23:00',
        'location' => 'Tại 1 căn homestay mà anh sẽ lựa chọn cẩn thận nha 💕'
    ]
];

// Kiểm tra nếu lựa chọn hợp lệ
if (!array_key_exists($option, $options)) {
    echo "<div class='container text-center mt-5'><h3>Lựa chọn không hợp lệ!</h3></div>";
    exit;
}

// Lấy dữ liệu lựa chọn
$selected = $options[$option];
?>

<div class="container text-center">
    <h1 class="mb-4 text-danger">Xác nhận lịch hẹn</h1>
    <div class="img-container mb-3">
        <img src="<?= $selected['image'] ?>" alt="<?= $selected['title'] ?>">
    </div>
    
    <p><strong>🕒 Thời gian:</strong> <?= $selected['time'] ?></p>
    <p><strong>📍 Địa điểm:</strong> <?= $selected['location'] ?></p>
    <p>Chúng ta có thể đi chụp photobooth vào trước hoặc sau bữa tiệc chính nữa nha!</p>
    <form action="submit.php" method="post">
        <input type="hidden" name="option" value="<?= $option ?>">
        
        <div class="mb-3">
            <label for="message" class="form-label">💌Nếu em có gì muốn nói, hãy gửi lời nhắn đến anh nhé:</label>
            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Nhập lời nhắn..."></textarea>
        </div>
        
        <button type="submit" class="btn btn-custom">Xác nhận 💖</button>
    </form>
    
    <br>
    <a href="detail.php?option=<?= $option ?>" class="btn btn-secondary">Quay lại</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
