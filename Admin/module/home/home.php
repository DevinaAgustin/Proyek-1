<?php

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login </br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";

  $r['username'] = $_SESSION['namauser'];
  $user = $r['username'];

  $queryAdmin = mysqli_query($koneksi, "SELECT * FROM akun WHERE username ='$user' ");
  
  $hasilQuery = mysqli_fetch_array($queryAdmin);
      $username    = $hasilQuery['username'];
      $nama_admin  = $hasilQuery['nama']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Require meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Ukm Kotak Pena</title>

  

	<!-- Bootstrap CSS first -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<!-- then Font Awesome -->
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- and Reza Admin CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/reza-admin.min.css">
	<!-- Favicon -->
	<link rel="icon" href="dist/img/KOPEN.png">
</head>
<body>		
	
	<!-- sidebar -->
	

				<div class="jumbotron" style="background-color:red;">
					<div align="center">
 				 <div class="container">
    			<h1 class="display-4"><p style="font-family:lucida handwriting">Selamat Datang Admin </p></h1>
   			 <p class="lead"><marquee>Selamat Bekerja ! Keberlangsungan WEBSITE ini tergantung pada Pekerjaan Anda.</marquee></p>


  </div>
</div>
</div>
			

			<!-- charts -->
			
		
			<!-- table -->
			
			</div>
		</div><!-- row -->
	</main>
	<!--  -->







<!-- footer -->
	<footer class="footer footer--ml-sidebar-width">
		<p class="mb-2 mb-sm-0">Komunitas Mahasiswa Jurnalistik Pencinta Karya</p>
	</footer>

	<!-- jQuery first, then Bootstrap JS, and Reza Admin JS-->
    <script src="dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/reza-admin.min.js"></script>

    <!-- Optional Javascript -->
    <script src="plugins/Chart.js/Chart.min.js"></script>

	<script type="text/javascript">
		// visitor charts
		const visitorChart = document.querySelector("#visitor_chart").getContext('2d');
		let configVisitorChart = {
			type: 'line',
		    data: {
		        labels: ['Sunday, 11','Monday, 12','Tuesday, 13','Wednesday, 14','Thursday, 15','Friday, 16'],
		        datasets: [{
		            label: 'Visitors',
		            data: [10,6,7,5,1,14],
		            fill: 'origin',
		            backgroundColor: 'rgba(37,151,224,.7)',
		            borderColor: '#2597e0'
		        }]
		    },
		    options: {
		    	maintainAspectRatio: false,
		    	legend: {
		    		display: false,
		        },
		        tooltips: {
                    titleFontFamily: 'sans-serif',
                    bodyFontFamily: 'sans-serif',
                    backgroundColor: '#fff',
                    titleFontColor: '#333',
                    bodyFontColor: '#333',
                    borderColor: '#e2e2e2',
                    borderWidth: '1',
                }
		    }
		}
		new Chart(visitorChart, configVisitorChart);

		// browser usage
		const browserUsageChart = document.querySelector("#browser_usage_chart").getContext('2d');
		let configBrowserUsageChart = {
			type: 'pie',
		    data: {
		        labels: ['Chrome','Mozilla','Uc Browser','Opera Mini'],
		        datasets: [{
		            data: [10,6,7,5],
		            backgroundColor: [
		            	"#1bd741",
	                    "#2597e0",
	                    "#f9a022",
	                    "#dd2525"
		            ]
		        }]
		    },
		    options: {
		    	maintainAspectRatio: false,
		    	legend: {
		    		display: true
		        },
		        tooltips: {
                    titleFontFamily: 'sans-serif',
                    bodyFontFamily: 'sans-serif',
                    backgroundColor: '#fff',
                    titleFontColor: '#333',
                    bodyFontColor: '#333',
                    borderColor: '#e2e2e2',
                    borderWidth: '1',
                }
		    }
		}
		new Chart(browserUsageChart, configBrowserUsageChart);

		// show more btn
		const showMoreBtn = document.querySelector("a.show-more-btn");
		if(showMoreBtn !== null) {
			showMoreBtn.addEventListener('click', function(e) {
				// not aktifkan fungsi default link
				e.preventDefault();

				let targetShowBtnMore = e.target;
				if(!targetShowBtnMore.classList.contains("show-more-btn")) targetShowBtnMore = e.target.parentElement;
				if(targetShowBtnMore.classList.contains("show-more-btn")) {
					targetShowBtnMore.nextElementSibling.classList.remove("d-none");
					setTimeout(function(){
						targetShowBtnMore.nextElementSibling.classList.add("d-none");
					}, 1000);
				}
			});
		}
		
	</script>
		<?php } ?>
</body>
</html>
