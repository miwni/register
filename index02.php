

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ประมวลผลโปรแกรมคำนวลค่าดัชนีมวลกาย</title>
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
      <li><a href="index02.php">BMI</a></li>
    </ul>
  </div>  
  <div class="content">
    <div class="phuket" style="width:50%;">
      <div class="tnx">
      <div class="txt">
        <h1> </h1>
        <h1></h1>
      </div>
     

        <h2><i class="fas fa-map-marker-alt"></i> </h2>
      </div>
 
   <?php
   $weight=$_POST['weight'];
   $height=$_POST['height'];

   $height=$height/100;

   $bmi=$weight/($height*$height);

   if($bmi<=18.50){
      $c="น้ำหนักน้อย / ผอม";
      $s="มากกว่าคนปกติ";
   }else 
   if($bmi>18.50 && $bmi<22.90){
    $c="ปกติ (สุขภาพดี)";
    $s="เท่าคนปกติ";
   }else 
   if($bmi>23 && $bmi<24.90){
    $c="ท้วม / โรคอ้วนระดับ 1";
    $s="อัตรายระดับ 1";
   }else 
   if($bmi>25 && $bmi<29.90){
    $c="อ้วน / โรคอ้วนระดับ 2";
    $s="อัตรายระดับ 2";
   }else 
   if($bmi>30){
    $c="อ้วนมาก / โรคอ้วนระดับ 3";
    $s="อัตรายระดับ 3";
   }
   ?>
   

   <div align="center"><h1>คำนวลค่าดัชนีมวลกาย(BMI)</h1></div>
   <p align="center">
   <div align="center">
   <b>BMI : </b><?php echo $bmi;?>bmi<br /><br />
   <b>อยู่ในเกณท์ : </b><?php echo $c;?><br /><br /> 
   <b>ภาวะเสี่ยงต่อโรค : </b><?php echo $s;?>
   </p>
   <tr>
      <td colspan="2" style="font-size:20px; color: #;" align="center"></td>
    </tr>
  </div>
</div>
</div>
  

   </body>
</div>
</body>
</html>
