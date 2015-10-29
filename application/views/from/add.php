﻿<!DOCTYPE html>
<div class="bar animated fadeInDown">
    <div class="main">
        <div class="inbar"><a1>ผลบอล/โปรแกรมการแข่งขัน : พรีเมียร์ลีก อังกฤษ</a1></div>
            <div class="inbar-right"><a1>อัพเดทล่าสุด วันที่ 24 กันยายน 2558</a1></div>
        </div>
    </div>
</div>
<html lang="th">
<head>
    <title>Add ข้อมูล</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/perff.js"></script>
    <link rel="shortcut icon" href="../pic/icon-logo.ico"/>
</head>

<body>
	<br><br><br><br><br><br><br><br>
    <div class="logo2 animated flip"></div>
	<center><h2>เพิ่มข้อมูล</h2></center>

		<?php echo form_open('manageuser/add'); ?>
			<table  style="width:30%" align="center" border="1">
				<tr>
					<td>ธง</td>
					<td><?php echo img('pic/eng.jpg');?></td>
				</tr>
				<tr>
					<td>เวลา</td>
					<td><input type="text" name="time" value=""></td>
				</tr>
				<tr>
					<td>วันที่</td>
					<td><input type="text" name="date" value=""></td>
				</tr>
				<tr>
					<td>ทีมเจ้าบ้าน</td>
					<td>
                        <input type="text" name="team1" value=""/>
                    </td>
				</tr>
				<tr>
					<td>ผลบอล</td>
					<td>
                        <input type="text" name="score" value="VS" />
                    </td>
				</tr>
				<tr>
					<td>ทีมเยือน</td>
					<td>
                        <input type="text" name="team2" value=""/>
                    </td>
				</tr>
				<tr>
					<td>วิเคราะห์บอล</td>
					<td>
                        <input type="text" name="comment" value=""/>
                    </td>
				</tr>
				<tr>
					<td>สถานะการแข่งขัน</td>
					<td>
                        <input type="radio" name="status" value="ยังไม่เริ่มแข่งขัน" checked="true"/>ยังไม่เริ่มแข่งขัน&nbsp;
                        <input type="radio" name="status" value="กำลังแข่งขัน" />กำลังแข่งขัน&nbsp;
                        <input type="radio" name="status" value="จบการแข่งขัน" />จบการแข่งขัน
                    </td>
				</tr>
				<tr>
					<td>ช่องถ่ายทอดสด</td>
					<td>
                        <input type="text" name="tv" value=""/>
                    </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btsave" value="บันทึก"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor("manageuser","ยกเลิก")?>
					</td>
				<tr>
			</table>
		<?php echo form_close(); ?>

		<br><br>
<footer>
<div class="bar1 animated fadeInDown">
    <div class="main">
        <div class="inbar1"><a1></a1></div>
        </div>
    </div>
</div>
</footer>

		<div id="particles"><canvas class="pg-canvas" width="1583" height="775"></canvas></div>
</body>
    <script>
    function loop() {
        $('.logo2').animate({top:"-=15px"}, {
            duration: 1000, 
            complete: function() {
                $('.logo2').animate({top:"+=15px"}, {
                    duration: 1000, 
                    complete: loop});
            }});
    }
    loop();
    </script>
</html>