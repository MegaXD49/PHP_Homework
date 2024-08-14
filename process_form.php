<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // รับข้อมูลจากฟอร์ม
      $name = htmlspecialchars($_POST['name']);
      $class = htmlspecialchars($_POST['class']);
      $number = htmlspecialchars($_POST['number']);
      $gender = htmlspecialchars($_POST['gender']);

      // การประมวลผลหรือจัดเก็บข้อมูลในฐานข้อมูล
      // ตัวอย่างการแสดงผลข้อมูล
      echo "<div class='container mt-5'>";
      echo "<h2>ข้อมูลที่ได้รับ:</h2>";
      echo "<p>ชื่อ-สกุล: " . $name . "</p>";
      echo "<p>ชั้น: " . $class . "</p>";
      echo "<p>เลขที่: " . $number . "</p>";
      echo "<p>เพศ: " . $gender . "</p>";
      echo "</div>";
	} else {
    	echo "กรุณาส่งข้อมูลผ่านฟอร์ม.";
	}
?>
