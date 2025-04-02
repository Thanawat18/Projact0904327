<?php
session_start(); // เริ่มต้น session เพื่อเข้าถึงข้อมูลที่เก็บไว้

// ตรวจสอบว่ามีการเข้าสู่ระบบแล้วหรือไม่
$adminName = isset($_SESSION['aname']) ? htmlspecialchars($_SESSION['aname']) : 'ผู้ใช้งานไม่เข้าสู่ระบบ';
$adminImage = "https://i.pinimg.com/736x/c0/74/9b/c0749b7cc401421662ae901ec8f9f660.jpg"; // เปลี่ยน URL รูปภาพให้เป็นของผู้ดูแลระบบจริง
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Manage Product</title>
<!--jQuery ต้องวางบนสุด -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!--ต่อด้วย dataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css" />

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
	<!-- myTable คือไอดีของตารางนั้น -->
} );
</script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
		.nav-link {
    transition: background-color 0.3s, border-color 0.3s; /* เพิ่มการเปลี่ยนสีให้เรียบ */
}

.nav-link:hover {
    background-color: rgba(0, 123, 255, 0.2); /* เปลี่ยนพื้นหลังเป็นสีฟ้าอ่อน */
    border: 1px solid rgba(0, 123, 255, 0.5); /* เพิ่มกรอบสีฟ้าออกน้ำเงิน */
    border-radius: 4px; /* ทำให้มุมของกรอบมีความโค้ง */
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
</svg>

<main class="d-flex flex-nowrap">
  <h1 class="visually-hidden">Sidebars examples</h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="adminpage.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <i class="bi bi-building-fill-gear me-2 fs-4"></i>
      <span class="fs-4">Back office</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="adminpage.php" class="nav-link text-white" aria-current="page">
          <i class="bi bi-book-half me-2"></i>
          Manage Products
        </a>
      </li>
      <li>
        <a href="managecat.php" class="nav-link text-white">
          <i class="bi bi-tags-fill me-2"></i>	Manage Category
        </a>
      </li>
      <li>
        <a href="orders.php" class="nav-link text-white">
			<i class="bi bi-basket2-fill me-2"></i>	Orders
        </a>
      </li>
      <li>
        <a href="admin.php" class="nav-link text-white">
          <i class="bi bi-person-fill-lock me-2"></i>	Admin
        </a>
      </li>
      <li>
        <a href="customers.php" class="nav-link text-white">
          <i class="bi bi-people-fill me-2"></i>	Customers
        </a>
      </li>
      <li>
        <a href="logout2.php" class="nav-link text-white">
          <i class="bi bi-box-arrow-right me-2"></i>	Logout
        </a>
      </li>
	
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://i.pinimg.com/736x/c0/74/9b/c0749b7cc401421662ae901ec8f9f660.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php echo $adminName; ?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout2.php">Logout</a></li>
      </ul>
    </div>
  </div>         
  <div class="b-example-divider b-example-vr"></div>
<div class="container border">
		<h1>Manage Product <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add <i class="bi bi-plus"></i></button></h1>
<?php
// เปิดการรายงานข้อผิดพลาด
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
include_once("connectdb.php");

$modalTitle = '';
$modalBody = '';

if (isset($_POST['Submit'])) {
    // รับค่าจากฟอร์ม
    $name = $_POST['pname'];
    $detail = $_POST['pdetail'];
    $price = $_POST['pprice'];
    $category_id = $_POST['pcat'];

    // ตรวจสอบและจัดการไฟล์ภาพที่อัพโหลด
    $file_name = $_FILES['pimg']['name'];
    $ext = substr($file_name, strpos($file_name, '.') + 1);
    
    // ตรวจสอบและจัดการไฟล์ pd
    $pd_ext = '';
    if (isset($_FILES['pd']) && $_FILES['pd']['error'] == UPLOAD_ERR_OK) {
        $pd_name = $_FILES['pd']['name'];
        $pd_ext = substr($pd_name, strpos($pd_name, '.') + 1);
    }
    
    // ตรวจสอบและจัดการไฟล์ pd2
    $pd_ext2 = '';
    if (isset($_FILES['pd2']) && $_FILES['pd2']['error'] == UPLOAD_ERR_OK) {
        $pd_name2 = $_FILES['pd2']['name'];
        $pd_ext2 = substr($pd_name2, strpos($pd_name2, '.') + 1);
    }

    // SQL สำหรับการบันทึกข้อมูลลงตาราง product
    $sql = "INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_ext`, `pd_ext`, `pd_ext2`, `c_id`) 
            VALUES (NULL, '{$name}', '{$detail}', '{$price}', '{$ext}', '{$pd_ext}', '{$pd_ext2}', '{$category_id}')";

    // ตรวจสอบว่าบันทึกสำเร็จหรือไม่
    if (mysqli_query($conn, $sql)) {
        $idauto = mysqli_insert_id($conn);
        copy($_FILES['pimg']['tmp_name'], "images/" . $idauto . "." . $ext);
        
        // คัดลอกไฟล์ pd หากมีการอัปโหลด
        if ($pd_ext) {
            copy($_FILES['pd']['tmp_name'], "images/pd_" . $idauto . "." . $pd_ext);
        }

        // คัดลอกไฟล์ pd2 หากมีการอัปโหลด
        if ($pd_ext2) {
            copy($_FILES['pd2']['tmp_name'], "images/pd2_" . $idauto . "." . $pd_ext2);
        }

        $modalTitle = 'Success';
        $modalBody = 'เพิ่มข้อมูลสินค้าสำเร็จ';
    } else {
        $modalTitle = 'Error';
        $modalBody = 'เกิดข้อผิดพลาด: ' . mysqli_error($conn);
    }
}
?>

<!-- Modal สำหรับแสดงผลลัพธ์การบันทึก -->
<div class="modal fade" id="exampleModalResult" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $modalTitle; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?php echo $modalBody; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location.href='adminpage.php'" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- สคริปต์เพื่อเปิด Modal ทันทีหลังบันทึกข้อมูล -->
<?php if (isset($_POST['Submit'])): ?>
    <script type="text/javascript">
        var modal = new bootstrap.Modal(document.getElementById('exampleModalResult'));
        modal.show();
    </script>
<?php endif; ?>

<!-- Modal สำหรับแสดงผลลัพธ์การบันทึก -->
<div class="modal fade" id="exampleModalResult" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo htmlspecialchars($modalTitle); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?php echo htmlspecialchars($modalBody); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- สคริปต์เพื่อเปิด Modal ทันทีหลังบันทึกข้อมูล -->
<?php if (isset($_POST['Submit'])): ?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var modal = new bootstrap.Modal(document.getElementById('exampleModalResult'));
            modal.show();
        });
    </script>
<?php endif; ?>
<!-- Modal สำหรับฟอร์มการเพิ่มรายการสินค้า -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มรายการสินค้า</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registrationForm" class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" name="pname" class="form-control" required autofocus>
                        </div>

                        <div class="col-sm-12">
                            <label for="detail" class="form-label">Detail</label>
                            <textarea type="text" name="pdetail" class="form-control" required></textarea>
                        </div>

                        <div class="col-12">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="pprice" class="form-control" required>
                        </div>

                        <div class="col-12">
                            <label for="picture" class="form-label">Picture</label>
                            <input type="file" class="form-control" name="pimg" required>
                        </div>

                        <div class="col-12">
                            <label for="picture-detail" class="form-label">Picture-Detail</label>
                            <input type="file" class="form-control" name="pd">
                        </div>

                        <div class="col-12">
                            <label for="picture-detail2" class="form-label">Picture-Detail2</label>
                            <input type="file" class="form-control" name="pd2">
                        </div>

                        <div class="col-12">
                            <label for="type" class="form-label">ประเภทหนังสือ</label>
                            <select name="pcat" class="form-control" required>
                                <?php
                                // ดึงข้อมูลประเภทจากฐานข้อมูล
                                $sql2 = "SELECT c_id, c_name FROM category ORDER BY c_name ASC";
                                $rs2 = mysqli_query($conn, $sql2);

                                if (mysqli_num_rows($rs2) > 0) {
                                    while ($data2 = mysqli_fetch_array($rs2)) {
                                        echo "<option value='".$data2['c_id']."'>".$data2['c_name']."</option>";
                                    }
                                } else {
                                    echo "<option value=''>No categories found</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="Submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

	
<!-- table-hover คือไฮไลต์วิ่งตามเม้า -->
<table id="myTable" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
              <th>Edit</th>
              <th>Delete</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Price</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
                
<?php
  include_once("connectdb.php");
  $sql = "SELECT * FROM product AS p
  LEFT JOIN category AS c
  ON p.c_id = c.c_id
  ORDER BY p.p_id ASC";
  $rs = mysqli_query($conn,$sql);
  while ($data = mysqli_fetch_array($rs)){
	  $img = "images/".$data['p_id'].".".$data['p_ext'];
  ?>
            <tr>
            <td><a href="editpro.php?pid=<?=$data['p_id'];?>" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i> Edit</a></td>				
			<td><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="deleteItem('<?= $data['p_id']; ?>', '<?= $data['p_ext']; ?>', '<?= $data['pd_ext']; ?>', '<?= $data['pd_ext2']; ?>')">
                        <i class="bi bi-trash-fill"></i> Delete
                    </button>
                </td>

<!-- Modal สำหรับยืนยันการลบ -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">ยืนยันการลบสินค้า</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                คุณต้องการลบสินค้านี้ออกจากรายการหรือไม่?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" onclick="confirmDelete()">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal สำหรับแสดงผลลัพธ์การลบ -->
<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultModalLabel">ผลลัพธ์การลบสินค้า</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="window.location.href='test.php'" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="resultMessage">
                <!-- ข้อความผลลัพธ์จะถูกแสดงที่นี่ -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location.href='test.php'" data-bs-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<script>
    let deleteId, deleteExt, deletePdExt, deletePdExt2;

    function deleteItem(pid, ext, pd_ext, pd_ext2) {
        deleteId = pid;
        deleteExt = ext;
        deletePdExt = pd_ext;
        deletePdExt2 = pd_ext2;
    }

    function confirmDelete() {
        // ใช้ fetch ส่ง request ไปยังไฟล์ PHP ที่จะลบสินค้า
        fetch('delete-item.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                p_id: deleteId,
                ext: deleteExt,
                pd_ext: deletePdExt,
                pd_ext2: deletePdExt2
            }) // ส่ง p_id, ext, pd_ext, pd_ext2 ไปยัง PHP
        })
        .then(response => response.json())
        .then(data => {
            // ปิด modal แรก
            var modal = bootstrap.Modal.getInstance(document.getElementById('staticBackdrop'));
            modal.hide();

            // แสดงผลลัพธ์การลบใน modal ใหม่
            var resultMessage = document.getElementById('resultMessage');
            if (data.success) {
                resultMessage.textContent = 'ลบสินค้าสำเร็จ!';
            } else {
                resultMessage.textContent = 'เกิดข้อผิดพลาดในการลบสินค้า: ' + (data.message || 'ไม่ทราบสาเหตุ');
            }

            // แสดง modal ผลลัพธ์
            var resultModal = new bootstrap.Modal(document.getElementById('resultModal'));
            resultModal.show();

            // รีเฟรชหน้าอัตโนมัติหลังจาก 2 วินาที (ถ้าลบสำเร็จ)
           /* if (data.success) {
                setTimeout(() => {
                    location.reload(); // รีเฟรชหน้าเพื่ออัปเดตข้อมูล
                }, 2000);
            }*/
        })
        .catch(error => {
            console.error('Error:', error);
            alert('เกิดข้อผิดพลาดในการเชื่อมต่อ');
        });
    }
</script>
                <td><img src="<?=$img;?>"width="120"></td>
                <td><?=$data['p_name'];?></td>
                <td><?=$data['p_detail'];?></td>
                <td><?=$data['p_price'];?></td>
                <td><?=$data['c_name'];?></td>
            </tr>
			
 <?php          
  }
  mysqli_Close($conn);
  ?>
     </tbody>
    </table>
</div>
	
</main>
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script></body>
</html>
