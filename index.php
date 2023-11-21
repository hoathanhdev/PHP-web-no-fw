<?php
// Chuyển hướng đến một URL mới
$new_url = 'TrangTin/index.php';
header('Location: ' . $new_url);
exit; // Đảm bảo dừng việc thực thi mã PHP sau khi chuyển hướng đã được gửi
?>
