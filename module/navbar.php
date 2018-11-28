  <div style="background-color: #e0e0e0; padding: 10px 0;">
    <div class="container">
		<a href="index.php"><img src="assets/img/logo.png" style="width: 70px;" class="f-left"></a>
      <ul class="navbar">
        <?php if(!isset($_SESSION['id'])){ 
				echo('<li><a href="index.php?page=login">Login</a></li>');
			}else{
				echo('
					<li><a href="function/user_action.php?act=Logout">Logout</a></li>
					<li><a href="index.php?page=form">Input Form</a></li>
					<li>
					  <div class="dropdown">
						<p class="dropbtn">Report</button>
						<div class="dropdown-content">
						  <a href="index.php?page=cari-report-tanggal">By Date</a>
						  <a href="index.php?page=report&status=lulus">By Lulus</a>
						  <a href="index.php?page=report&status=tdk_lulus">By Tdk Lulus</a>
						  <a href="index.php?page=report">Tampil Semua</a>
						</div>
					  </div>
					</li>
					<li><a href="index.php?page=cari-idk">Cari IDK</a></li>
					<li><a href="index.php?page=data">Tampil Data</a></li>
				');
			}
		  ?>
        
        
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>