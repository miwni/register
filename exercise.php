<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recommend clean food</title>

    <link rel="stylesheet" href="style.css">


</head>
<body>
<link rel="stylesheet" href="" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container bg">
  <div class="navBar">
    <div class="logo">
      <a href="#">
        <i class="fas fa-suitcase-rolling"></i>
      </a>
    </div>
    <ul>
    <li><a href="index.php">Home</a></li>
      <li><a href="exercise.php">Exercise</a></li>
      <li><a href="clean.php">Clean</a></li>
      <li><a href="index01.php">BMI</a></li>
    </ul>
  </div>  
  <div class="content">
    <div class="phuket" style="width:50%;">
      <div class="tnx">
        <h2><i class="fas fa-map-marker-alt"></i> </h2>
      </div>
      <div class="txt">
        <h1>Exercise </h1>
        <h1>posture</h1>
      </div>
      <p>การลดน้ำหนักนั้นไม่จำเป็นต้องอดอาหาร ทุกคนยังคงทานอาหารได้ปกติเพียงแค่ลดปริมาณลงเท่านั้น และที่สำคัญต้องออกกำลังกายควบคู่กันไปด้วย สิ่งนี้แหละที่จะช่วยให้น้ำหนักตัวลดลงอย่างเป็นธรรมชาติและปลอดภัย
</p>
    </div>
  
    <div class="card" style="width:50%;">
      <a href="E01.php" target="_blank">
        <div class="box3">
          <h2>ท่าสควอท</h2>
        </div>
      </a>
      <a href="E02.php" target="_blank">
        <div class="box4">
          <h2>ท่าเลกลัน</h2>
        </div>
      </a>
      <a href="E03.php" target="_blank">
        <div class="box5">
          <h2>ท่าแพลงก์</h2>
        </div>
      </a>
      <a href="E04.php" target="_blank">
        <div class="box6">
          <h2>ท่าไซด์ไลน์แพลงก์</h2>
        </div>
      </a>
      <a href="E05.php" target="_blank">
        <div class="box7">
          <h2>ท่าตัววี</h2>
        </div>
      </a>
      <!--       <div class="box2">
        <h2>Island</h2>
      </div>
      <div class="box3">
        <h2>Mountain</h2>
      </div>
      <div class="box4">
        <h2>Scenery</h2>
      </div> -->
    </div>
  </div>

</div>
    
        <div class="homecontent">
    
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            
        <?php endif ?>
    


        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>welcom <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>
    
</body>
</html>