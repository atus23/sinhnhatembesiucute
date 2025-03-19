<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST['option'] ?? '';
    $message = $_POST['message'] ?? '';

    // Dữ liệu về các lựa chọn
    $options = [
        'restaurant' => 'Nhà hàng sang trọng',
        'aquarium'   => 'Thủy cung lãng mạn',
        'home'       => 'Hẹn hò tại nhà'
    ];

    // Kiểm tra nếu lựa chọn hợp lệ
    if (!array_key_exists($option, $options)) {
        echo "<div class='container text-center mt-5'><h3>Lựa chọn không hợp lệ!</h3></div>";
        exit;
    }

    // Chuẩn bị nội dung để lưu
    $data = "Lựa chọn: " . $options[$option] . "\n";
    $data .= "Lời nhắn: " . ($message ? $message : "Không có lời nhắn") . "\n";
    $data .= "-----------------------------\n";

    // Ghi dữ liệu vào file
    file_put_contents("data.txt", $data, FILE_APPEND);

    // Chuyển hướng đến trang cảm ơn
    header("Location: thank_you.php");
    exit;
}
?>
