<?php
	session_start();
 include("connectdb.php");

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>บ้านหนังสือติดปีก</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
    <style type="text/css">
    .card1 {            margin-bottom: 20px;
            text-shadow: none;
}
.container1 {  background-color: #f4f4f4;
  padding: 20px;
}
.form-control1 {  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}
		/* กำหนดพื้นที่แสดงชื่อสมาชิก */
  .username {
    white-space: nowrap; /* ป้องกันการขึ้นบรรทัดใหม่ */
    overflow: hidden; /* ซ่อนส่วนที่ยาวเกิน */
    text-overflow: ellipsis; /* แสดง "..." ถ้าข้อความยาวเกิน */
    max-width: 200px; /* กำหนดขนาดความกว้างสูงสุด */
  }
		/* ห้ามการขึ้นบรรทัดใหม่สำหรับทุกองค์ประกอบใน navbar */
  .navbar-nav .nav-item {
    white-space: nowrap; /* ป้องกันการขึ้นบรรทัดใหม่ */
  }

  /* สำหรับตัวอักษรและไอคอนในแต่ละลิงค์ */
  .nav-link {
    display: flex; /* ใช้ flexbox เพื่อจัดการตำแหน่ง */
    align-items: center; /* จัดตำแหน่งไอคอนและตัวอักษรให้อยู่กึ่งกลาง */
  }

  /* กำหนดระยะห่างระหว่างไอคอนและตัวอักษร */
  .nav-link svg {
    margin-right: 5px; /* ปรับระยะห่างตามต้องการ */
  }
				/* ไฮไลต์รายการเมนูเมื่อเอาเมาส์ไปวาง */
  .dropdown-menu .dropdown-item:hover {
    background-color: #FFCC66; /* สีพื้นหลังที่ต้องการเมื่อวางเมาส์ */
    color: #000000; /* สีข้อความเมื่อวางเมาส์ */
  }
	.dropdown-menu {
    max-height: 200px; /* กำหนดความสูงของ dropdown */
    overflow-y: auto; /* เพิ่มการเลื่อนเมื่อเนื้อหาเกินขอบเขต */
}
.form-signin {
    max-width: 1300px; /* ปรับความกว้างสูงสุดตามที่ต้องการ */
    width: 100%; 
    margin: auto;
    padding: 20px; /* เพิ่มระยะห่างภายใน */
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.custom-alert {
    font-size: 1rem; /* ปรับขนาดตามที่ต้องการ */
    text-align: center; /* จัดกลาง */
    margin: 20px auto; /* เพิ่มระยะห่างด้านบน-ล่าง และจัดกลาง */
    width: 300px; /* กำหนดความกว้างเฉพาะ */
    padding: 10px; /* เพิ่มระยะห่างภายใน */
    border: 1px solid #ccc; /* เพิ่มเส้นขอบ */
    border-radius: 5px; /* มุมมน */
}

		.card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background-color: #f8f9fa;
    }
 .card-body {
        position: relative;
        min-height: 150px;
    }

    .card-body .btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
		.card-title {
    display: -webkit-box;
    -webkit-line-clamp: 2;        /* แสดงชื่อสินค้าแค่ 2 บรรทัด */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 3em;              /* ความสูงสูงสุดที่ข้อความจะแสดง */
    </style>
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

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">

      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<nav class="navbar navbar-expand-md" style="background-color:#CC6600;" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand d-md-none" href="#">
      <svg class="bi" width="30" height="30"><use xlink:href="#aperture"/></svg>
      Aperture
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- จัดตำแหน่งให้อยู่ตรงกลาง พร้อมเพิ่มระยะห่างและขนาดตัวอักษร -->
        <ul class="navbar-nav d-flex justify-content-between w-100 align-items-center">
          <li class="nav-item me-4"><a class="nav-link fs-5" href="index.php">
            <svg class="bi" width="20" height="20"><use xlink:href="#aperture"/></svg>
          </a></li>
			   <li class="nav-item me-3"><a class="nav-link fs-6" href="mainpage.php">Home</a></li>
          	<?php
				// ดึงข้อมูลประเภทสินค้า
				$sql = "SELECT * FROM `category`";
				$result = $conn->query($sql);
			?>
				<li class="nav-item dropdown me-3">
				<a class="nav-link dropdown-toggle fs-6" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Product
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="mainpage.php">ประเภทหนังสือ</a></li>
					<li><hr class="dropdown-divider"></li>
					<?php
						// เช็คว่ามีข้อมูลในผลลัพธ์หรือไม่
						if ($result->num_rows > 0) {
							// แสดงรายการประเภทสินค้าทั้งหมด
							while($row = $result->fetch_assoc()) {
								// เพิ่มลิงก์ไปยังหน้าผลิตภัณฑ์ที่แสดงตามประเภท
								echo '<li><a class="dropdown-item" href="products2.php?c_id=' . $row['c_id'] . '">' . htmlspecialchars($row['c_name']) . '</a></li>';
							}
						} else {
							echo '<li><a class="dropdown-item" href="#">ไม่มีประเภทสินค้า</a></li>';
						}
					?>
				</ul>
			</li>
          <li class="nav-item me-4"><a class="nav-link fs-5" href="me2.php">ติดต่อเรา      </a></li>
          <!-- Search Bar -->
          <li class="nav-item flex-grow-1">
            <form method="post" action="" class="d-flex justify-content-center">
              <input type="text" Placeholder="Search" name="search" class="form-control form-control-sm me-2" autofocus>
              <button class="btn btn-success btn-sm " type="submit" name="Submit"><i class="bi bi-search"></i></button>
            </form>
          </li>
          <li class="nav-item me-3"><a class="nav-link fs-6" href="basket.php">
            <svg class="bi " width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
<div class="dropdown text-end">
    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
    </a>
    <ul class="dropdown-menu text-small">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Order</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
    </ul>
</div>

        </ul>
      </div>
    </div>
  </div>
</nav>


	  
<main class="form-signin w-100 m-100" style="margin-top: 100px;">
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary" >
		<h1>คำสั่งซื้อทั้งหมด</h1>

<!-- table-hover คือไฮไลต์วิ่งตามเม้า -->
<table id="myTable" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
			  <th width="10%">รายละเอียด</th>
                <th width="10%">เลขที่ออเดอร์</th>
				<th width="15%">สถานะคำสั่งซื้อ</th>
                <th width="10%">ราคารวม</th>
                <th width="10%">วัน/เดือน/ปี</th>
                <th width="10%">ชื่อผู้สั่งซื้อ</th>
            </tr>
        </thead>
        <tbody>
                
<?php
        include_once("connectdb.php");
        
        // SQL query to join the orders, order_status, and users tables
        $sql = "
            SELECT 
                o.o_id,
                os.o_status,
                o.o_total,
                o.o_date,
                u.u_fullname
            FROM 
                orders o
            LEFT JOIN 
                order_status os ON o.s_id = os.s_id
            LEFT JOIN 
                users u ON o.u_id = u.u_id
        ";

        $rs = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($rs)) {
        ?>
		<!-- ปุ่ม Detail -->
<td>
<a href="user_order_detail.php?o_id=<?= $data['o_id']; ?>" class="btn btn-success btn-sm">
        <i class="bi bi-ticket-detailed-fill"></i> Detail
    </a>

</td>	
                <td><?=$data['o_id'];?></td>
                <td><?=$data['o_status'];?></td>
                <td><?=$data['o_total'];?></td>
                <td><?=$data['o_date'];?></td>
                <td><?=$data['u_fullname'];?></td>            
			</tr>
        <?php
        }
        mysqli_close($conn);
        ?>
    </tbody>
</table>
	  <div class="text-end">
    <button type="button" class="btn btn-warning" onclick="window.location.href='mainpage.php'">
        <i class="bi bi-arrow-left"></i> ย้อนกลับ
    </button>
</div>

</div>
</div>	  
  </main>

<footer class="container py-5">
  <div class="row">
  </div>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
