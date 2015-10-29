<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<div class="bar animated fadeInDown">
    <div class="main">
        <div class="inbar"><a1>ผลบอล/โปรแกรมการแข่งขัน : พรีเมียร์ลีก อังกฤษ</a1></div>
            <div class="inbar-right"><a1>อัพเดทล่าสุด วันที่ 24 กันยายน 2558</a1></div>
        </div>
    </div>
</div>

<html lang="th">
<head>
    <title>Show ข้อมูล</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/perff.js"></script>
    <link rel="shortcut icon" href="../pic/icon-logo.ico"/>
</head>
<body>

    <br><br><br><br><br><br><br><br>
    <div class="logo2 animated flip"></div>
    <center>
        <table style="width:80%" >
            <tr>
                <td class="left">
                    <?php echo anchor("manageuser/add","เพิ่มข้อมูล")?>
                </td>
                <td class="right">
                    <form action="manageuser/search_keyword" method="post">    
                    <c style="color:fff;">ค้นหาจาก</c>
                    <select name="type" size="1">
                    <option value="time">เวลา</option>
                    <option value="date">วันที่</option> 
                    </select> 
                    <input type="text" name="keyword"  id="name1"  >
                    <input type="submit" value="ค้นหา" class="submit">  
                    </form>
                </td>
            </tr>
        </table>
    </center>
        <br>

        <table style="width:80%" align="center" border="1">
        <thead>
        <tr>
        <td class='bg' style="width:">ธง</td>
        <td class='bg' style="width:">เวลา</td>
        <td class='bg' style="width:">วันที่</td>
        <td class='bg' style="width:">ทีมเจ้าบ้าน</td>
        <td class='bg' style="width:">ผลบอล</td>       
        <td class='bg' style="width:">ทีมเยือน</td>
        <td class='bg' style="width:">ทรรศนะฟุตบอลวันนี้/ทีเด็ดบอลคืนนี้</td>
        <td class='bg' style="width:">สถานะ</td>
        <td class='bg' style="width:">ถ่ายทอดสด</td>
        <td class='bg' style="width:">ปรับแต่ง</td>
        </tr>
        </thead>

        <?php   $num=0;
            foreach($rs->result() as $r){ $num++;

            echo "<tbody>";
                echo"<tr>";
                echo"<td class='fontsizebg'>";
                echo img('pic/eng.jpg');
                echo"</td>";
                echo"<td class='fontsizebg'>".$r->time."</td>";
                echo"<td class='fontsizebg'>".$r->date."</td>";
                echo"<td class='fontsizebg'>".$r->team1."</td>";
                echo"<td class='fontsizebg'>".$r->score."</td>";
                echo"<td class='fontsizebg'>".$r->team2."</td>";
                echo"<td class='fontsizebg'>".$r->comment."</td>";
                echo"<td class='fontsizebg'>".$r->status."</td>";
                echo"<td class='fontsizebg'>".$r->tv."</td>";
                echo"<td class='fontsizebg'>";
                echo anchor("manageuser/edit/".$r->id,"แก้ไข")."&nbsp;&nbsp;&nbsp;&nbsp;";
                echo anchor("manageuser/delete/".$r->id,"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่ ?');"));
                echo"</td>";
                echo"</tr>";
        }
    ?>
    </tbody>
</table>
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