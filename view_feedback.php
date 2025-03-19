<?php
$file = 'feedback.txt'; // Đặt tên file phản hồi của bạn
if (file_exists($file)) {
    echo nl2br(htmlspecialchars(file_get_contents($file)));
} else {
    echo "Chưa có phản hồi nào.";
}
?>
