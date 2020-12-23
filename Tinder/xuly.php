<?php
    include "ketnoi.php";
    if(isset($_POST['btnDK']))
    {
        $username = $_POST['tentk'];
        if(strlen($username)<6)
        {
            echo "username phai nhieu hon 6 ky tu. <a href='index.php'>Trở lại</a>";
            exit;
        }
        $password = md5($_POST['mk']);
        $hoten = $_POST['tennd'];
        $ngaysinh = $_POST['ns'];
        $sdt = $_POST['sdt'];
        $gioitinh = $_POST['gt'];
        if (!$username || !$password || !$hoten || !$ngaysinh || !$sdt || !$gioitinh)
        {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='index.php'>Trở lại</a>";
            exit;
        }
        
    
    }
    $sql = "INSERT into nguoidung(`tentk`,`mk`,`hoten`,`ngaysinh`,`sdt`,`gioitinh`) VALUES('$username','$password','$hoten','$ngaysinh','$sdt','$gioitinh')";
    $data = $o->query($sql);
    if(isset($data))
    {
        header("location:index.php");
    }
    else
    {
        echo "đăng ký thất bại. <a href='index.php'>Trở lại</a>";
            exit;
    }       
?>