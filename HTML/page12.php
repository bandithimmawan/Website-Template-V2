<?php
include('db.php');
$sql = "SELECT * FROM topsale ORDER BY profit DESC;" ;
$query = mysqli_query($con,$sql);
$Icon = "Assets/icon.png";
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<html>
  <title>Cinevault+</title>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">
            <img src="../Assets/Icon.png" style="width: 60px;">
        </a>
        <span class="navbar-text" style="color: white;">Cinevault+</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="collapse navbar-collapse" id="mynavbar">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0)" onclick="location.href ='Page10-11.html';">หน้าแรก</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page18.html';">ลงรอบภาพยนตร์</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page20.html';">ค้นหาข้อมูลผู้ใช้งาน</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-secondary" type="button">Search</button>
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="">
                <img src="../Assets/userIcon.png" style="width: 30px;">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        </div>
    </div>
</nav>
    <div class="page12">
      <div class=" = movie-type-table">
        <div class="movies-type">
          <h3>ประเภทภาพยนตร์ขายดี</h3>
          <br>
          <table>
          <tr>
              <th>ประเภทภาพยนตร์</th>
              <th>ยอดขายตั๋วภาพยนตร์</th>          
        </tr>
            <!--<tr>
              <th>ประเภทภาพยนตร์</th>
              <th>ยอดขายตั๋วภาพยนตร์</th>
              
            </tr>
            <tr>
              <td>แอคชั่น</td>
              <td></td>
              
            </tr>
            <tr>
              <td>ผจญภัย</td>
              <td></td>
              
            </tr>
            <tr>
              <td>สงคราม</td>
              <td></td>
              
            </tr>
            <tr>
              <td>ดราม่า</td>
              <td></td>
              
            </tr>
            <tr>
              <td>วิทยาศาสตร์</td>
              <td></td>
              
            </tr>
            <tr>
              <td>ครอบครัว</td>
              <td></td>
              
            </tr>
            <tr>
              <td>ระทึกขวัญ</td>
              <td></td>
              
            </tr>
            <tr>
              <td>อาชญากรรม</td>
              <td></td>
              
            </tr>
            <tr>
              <td>ครอบครัว</td>
              <td></td>
              
            </tr>
            <tr>
              <td>สารคดี</td>
              <td></td>
              
            </tr>
            <tr>
              <td>การ์ตูน</td>
              <td></td>
              
            </tr>
            <tr>
              <td>Comedy (ภาพยนตร์ตลก)</td>
              <td></td>
              
            </tr>
            <tr>
              <td>Erotic (ภาพยนตร์ผู้ใหญ่)</td>
              <td></td>
              
            </tr>
            <tr>
              <td>Fantasy (ภาพยนตร์ผสมจินตนาการ)</td>
              <td></td>
              
            </tr>
            <tr>
              <td>Musicals Movies (ภาพยนตร์เพลง)  </td>
              <td></td>
              
            </tr>
            <tr>
              <td>Romance (ภาพยนตร์โรแมนติก))</td>
              <td></td>
              
            </tr>
            <tr>
              <td>Western (ภาพยนตร์ตะวันตก) </td>
              <td></td>
              
            </tr>
-->

    <?php foreach($query as $data){ ?>
  <tr>
    <td><?=$data['Movietype']  ?></td>
    <td><?=$data['sale']  ?></td>
  </tr>

  <?php } ?>
          </table>
      </div>

    </div>
      
</body>
</html>