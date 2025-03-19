<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảm ơn em yêu 💖</title>
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
            text-align: center;
        }
        .heart {
            font-size: 50px;
            color: #FF69B4;
            animation: heartbeat 1.5s infinite;
        }
        @keyframes heartbeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
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
    </style>
</head>
<body>

<div class="container">
    <div class="heart">💖</div>
    <h1 class="text-danger">Cảm ơn em yêu!</h1>
    <p class="mt-3">Anh đã nhận được phản hồi của em. </p>
    <p class="mt-3">Và do sinh nhật của em vào ngày thứ tư, hôm đó em phải đi học nên chúng ta sẽ đi trước đó 1 hôm vào ngày thứ 3 (25/3) nha .</p>     
    <p class="mt-3">Anh rất háo hức chờ đến ngày đặc biệt này! 💕</p>
    <p>Anh mong chúng ta sẽ có một buổi hẹn thật tuyệt vời! 😘</p>

    <a href="index.php" class="btn btn-custom mt-3">Về trang chính</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
