<?php
$file = 'feedback.txt'; // Đường dẫn file chứa phản hồi

if (file_exists($file)) {
    echo "<h2>Danh sách phản hồi:</h2>";
    echo "<pre>" . htmlspecialchars(file_get_contents($file)) . "</pre>";
} else {
    echo "<p>Chưa có phản hồi nào.</p>";
}
?>
