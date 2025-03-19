<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$file = 'feedback.txt';

// Kiểm tra xem file có tồn tại không
if (!file_exists($file)) {
    die("❌ File feedback.txt không tồn tại! Hãy kiểm tra xem phản hồi có được lưu không.");
}

// Đọc nội dung file
$content = file_get_contents($file);

// Kiểm tra nếu file rỗng
if (empty($content)) {
    die("📂 File feedback.txt không có nội dung!");
}

// Hiển thị nội dung với format đẹp hơn
echo "<h2>📩 Danh sách phản hồi</h2>";
echo "<pre>" . htmlspecialchars($content) . "</pre>";
?>
