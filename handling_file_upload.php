<?php

//KIỂM TRA TỒN TẠI FILE UPLOAD
if (isset($_FILES['image'])
    && isset($_FILES['image']['name'])) {
    $month = date('m', time());//24
    $year = date('Y', time());//2021
    $newDir = 'uploads/'.$month.'_'.$year; //24_2021
    if (!file_exists($newDir)
        || is_file($newDir)
    ) {
        //nếu ko tồn tại folder thì tạo mới
        //tạo mới thư mục
        mkdir($newDir, 0775);
    }
    $fromFile = $_FILES['image']['tmp_name'];
    $destFileName = $newDir.'/'.time().$_FILES['image']['name'];
    move_uploaded_file($fromFile, $destFileName);
}
?>