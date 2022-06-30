
       		 <!-- </div> -->
       		 <div class="col-md-4">
       		 	<!-- <a href=""><img src="image/anh-quangcao20.gif" width="350"></a> -->
       		 	<div class="center"><marquee><h4>Tin Tức - Sự Kiện</h4></marquee></div>
            <div class="event">
                    <ul>
                    	<?php
                    		$dt->select('SELECT * FROM tinbai ORDER BY id LIMIT 10');
                    		while ($r=$dt->fetch()) {
                    			$id=$r['id'];
                    			$idtheloai=$r['idTheLoai'];
                    			$name= $r['TieuDe'];
                    			echo "<li><a href='newsdetail.php?idTheLoai=$idtheloai&&id=$id'><h6>$name</h6></a></li>";
                    		}
                    	 ?>
                    </ul>
            </div>
           	 <!-- <div class="quangcao"> -->
            	<h5>Quảng cáo bởi Admin</h5><hr>
              <div class="quangcao1 position:relative">
                <a href=""> <img src="image/anh-quangcao10.jpg" width="360" height="335"></a>
                <a href=""><img src="image/anh-quangcao11.jpg" width="360" height="200"></a>
            </div>
            </div>