<?php
$file = 'feedback.txt';

if (file_exists($file)) {
    echo "✅ File tồn tại!<br>";
    echo "📄 Nội dung file:<br>";
    echo nl2br(htmlspecialchars(file_get_contents($file)));
} else {
    echo "❌ File không tồn tại!";
}
?>
