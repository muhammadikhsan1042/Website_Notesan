<?php
session_start();

date_default_timezone_set('Asia/Jakarta');
$jam = date("H");
$tanggal = date("md");
$bulan = date("m");
$tahun = date("Y");


if (isset($_POST["Enter"])) {
	if (!empty($_POST["Nama"])) {
		$_SESSION["Nama"] = $_POST["Gender"]." ".$_POST["Nama"];
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
    <meta charset="utf-8">
    <title>Muhammad Ikhsan</title>
    <link rel="stylesheet" href="/Style/CSS/index.css">
	<link rel="shortcut icon" href="/Assets/logo/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/Assets/logo/favicon.ico" type="image/x-icon">
  </head>

  <body>
    <header>
      <?php if (!isset($_SESSION["Nama"])): ?>
      	<div class="welcome-page">
      		<div class="welcome-page-wrap">
						<?php if (($jam >= 5) && ($jam <= 10)): ?>
							<h1>GOOD MORNING</h1>
						<?php elseif (($jam >= 11) && ($jam <= 18)): ?>
							<h1>GOOD AFTERNOON</h1>
						<?php elseif (($jam >= 19) || ($jam <= 4)): ?>
							<h1>GOOD NIGHT</h1>
						<?php endif; ?>

						<h2>Do you mind if I ask you your name?</h2>

						<form action="/" method="post">

							<div>
								<select name="Gender">
									<option value="Mr.">Mr.</option>
									<option value="Mrs.">Mrs.</option>
								</select>
								<input type="text" name="Nama" placeholder="ENTER YOUR NAME THIS....">
							</div>

							<input type="submit" name="Enter" value="Enter">
						</form>

					</div>
      	</div>
      <?php else: ?>
				<div class="header-content">
					<div class="header-content-wrap">
						<div class="header-main-text">
							<img src="/Assets/logo/notesan-black.png" alt="NOTESAN" width="250">
						</div>
						<div class="header-navigation-wrap">
							<div class="header-navigation" style="border-bottom-color:blue" onclick="cek(0);">
								<span>HOME</span>
							</div>
							<div class="header-navigation" onclick="cek(680);">
								<span>PROFILE</span>
							</div>
							<div class="header-navigation" onclick="cek(1148);">
								<span>EDUCATION</span>
							</div>
							<div class="header-navigation" onclick="cek(1900);">
								<span>SKILL</span>
							</div>
							<div class="header-navigation" onclick="cek(2000);">
								<span>PROJECT</span>
							</div>
						</div>
						<div class="header-content-text">
							<div class="header-text-wrap">
								<div class="header-text-arabic">
									الَّذِينَ آمَنُوا وَتَطْمَئِنُّ قُلُوبُهُمْ بِذِكْرِ اللَّهِ ۗ أَلَا بِذِكْرِ اللَّهِ تَطْمَئِنُّ الْقُلُوبُ
								</div>
								<div class="header-text-en">
									VERILY NEVER WILL ALLAH CHANGE THE CONDITION OF A PEOPLE<br>UNTIL THEY CHANGE IT THEMSELVES.
								</div>
								<div class="header-text-qs">
									Q.S Ar-Ra’d: 11
								</div>
							</div>
						</div>
						<div class="header-content-button">
							<div class="header-button-cv" onclick="goto('https://drive.google.com/file/d/1DFgQPg9iQjkBEm1Xu2LrJWLP7-Zm_Vvx/view?usp=sharing')">
								<span>CURRICULUM VITAE</span>
							</div>
							<div class="header-button-ceritificate">
								<span>CERTIFICATE</span>
							</div>
						</div>
						<div class="header-content-connect">
							<div class="header-connect-text">
								<span>FIND ME</span>
							</div>
							<div class="header-connect-icon">
								<div class="connect-icon" onclick="goto('https://mail.google.com/mail/?view=cm&fs=1&to=muhammadikhsan1042@gmail.com')">
									<img src="/Assets/logo/email-black.png" alt="email" width="30">
								</div>
								<div class="connect-icon" onclick="goto('https://www.facebook.com/MuhammadIkhsan.Is')">
									<img src="/Assets/logo/facebook-black.png" alt="facebook" width="30">
								</div>
								<div class="connect-icon" onclick="goto('https://www.instagram.com/notesan.id/?hl=id')">
									<img src="/Assets/logo/instagram-black.png" alt="instagram" width="30">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="header-navigation-fixed">
					<div class="header-navigation-icon">
						<div class="navigation-logo">
							<img src="/Assets/logo/notesan-white.png" alt="NOTESAN" width="150">
						</div>
						<div class="navigation-text">
							<h3>The blog of <span>Muhammad Ikhsan</span></h3>
						</div>
					</div>
					<div class="header-navigation-wrap">
						<div class="header-navigation" style="border-bottom-color:blue;" onclick="cek(0);">
							<span>HOME</span>
						</div>
						<div class="header-navigation" onclick="cek(680);">
							<span>PROFILE</span>
						</div>
						<div class="header-navigation" onclick="cek(1148);">
							<span>EDUCATION</span>
						</div>
						<div class="header-navigation" onclick="cek(1900);">
							<span>SKILL</span>
						</div>
						<div class="header-navigation" onclick="cek(2000);">
							<span>PROJECT</span>
						</div>
					</div>
				</div>
      <?php endif; ?>
    </header>

		<?php if (isset($_SESSION["Nama"])): ?>
			<main>
				<div class="profile-page">
					<div class="main-tag">
						<div class="tag-icon">
							<img src="/Assets/logo/profile.png" width="50">
						</div>
						<div class="tag-name">
							<h1>PROFILE</h1>
						</div>
					</div>
					<div class="profile-page-wrap">
						<div class="profile-image">
							<img src="/Assets/image-profile.jpg" alt="image profile">
						</div>
						<div class="profile-about">
							<div class="profile-about-data">
								<div class="profile-about-data-name">
									<h3>Hallo <?php echo strtoupper($_SESSION["Nama"]) ?></h3>
									<h1>I'M MUHAMMAD IKHSAN</h1>
									<h3>Software Engineering</h3>
								</div>
								<div class="profile-about-data-information">
									<table>
										<tr height="22">
											<td width="120">Age</td>
											<td width="20">:</td>
											<td width="120">
												<?php if ($tanggal >= 920): ?>
													<?php echo $tahun-1998 ?>
												<?php else: ?>
													<?php echo $tahun-1998-1 ?>
												<?php endif; ?>
											</td>
										</tr>
										<tr height="22">
											<td rowspan="3" width="120" style="vertical-align:top;padding:0">Address</td>
											<td rowspan="3" width="20" style="vertical-align:top;padding:0">:</td>
											<td width="120">Abdul Muin Street Painan</td>
										</tr>
										<tr height="22">
											<td width="120">Pesisir Selatan</td>
										</tr>
										<tr height="22">
											<td width="120">Sumatera Barat</td>
										</tr>
										<tr height="22">
											<td width="120">Email</td>
											<td width="20">:</td>
											<td width="120">Muhammadikhsan1142@gmail.com</td>
										</tr>
										<tr height="22">
											<td width="120">Phone</td>
											<td width="20">:</td>
											<td width="120">0822-3199-9791</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="profile-about-connect">
								<div class="connect-icon" onclick="goto('https://www.facebook.com/MuhammadIkhsan.Is')">
									<img src="/Assets/logo/facebook-logo.png" alt="Facebook">
								</div>
								<div class="connect-icon" onclick="goto('https://www.linkedin.com/in/muhammad-ikhsan-45334a137/')">
									<img src="/Assets/logo/linkedin-logo.png" alt="linkedin">
								</div>
								<div class="connect-icon" onclick="goto('https://github.com/muhammadikhsan1042?tab=repositories')">
									<img src="/Assets/logo/github-logo.png" alt="Github">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="education-page">
					<div class="main-tag">
						<div class="tag-icon">
							<img src="/Assets/logo/education-logo.png" width="50">
						</div>
						<div class="tag-name">
							<h1>EDUCATION</h1>
						</div>
					</div>
					<div class="education-page-wrap">
						<div class="education-information">
							<div class="education-information-header">
								<h3>ELEMENTARY SCHOOL</h3>
								<h1>SDN 23 PAINAN UTARA</h1>
								<h2>2004-2010</h2>
							</div>
							<div class="education-information-main">
								<p>
									Masa sekolah dasar, merupakan masa dimana saya sering dibully. Ukuran badan yang kecil,
									serta cara bicara yang sebrautan membuat saya menjadi bahan bullyan di antara teman saya.
									selain fisik, dari segi kemampuan saya juga tidak terlalu diunggulkan, kesusahan saya dalam
									menghafal membuat saya kesulitan dalam mengikuti pelajaran.
								</p>
							</div>
						</div>
						<div class="education-information">
							<div class="education-information-header">
								<h3>JUNIOR HIGH SCHOOL</h3>
								<h1>SMP N 1 PAINAN</h1>
								<h2>2010-2013</h2>
							</div>
							<div class="education-information-main">
								<p>
									Di saat saya SMP, dengan kemampuan dalam menyelesaikan permasalah mata pelajaran logika dan hitungan seperti
									matematikan dan fisika, saya dapat membantu teman saya yang sulit dalam mempelajari hal-hal tersebut.
									Dimasa SMP ini saya juga dapat belajar melakukan editing musik yang saya gunakan untuk pengambilan nilai menari
									modern atau dance.
								</p>
							</div>
						</div><div class="education-information">
							<div class="education-information-header">
								<h3>SENIOR HIGH SCHOOL</h3>
								<h1>SMA N 2 PAINAN</h1>
								<h2>2013-2016</h2>
							</div>
							<div class="education-information-main">
								<p>
									Sekolah menengah atas, dimana saya mulai aktif dalam bidang akademik. Disini saya sering sekali mengikuti perlombaan matematika SMA
									tingkat kabupaten dan tingkat provinsi. Dari semua perlombaan yang saya ikuti, saya hanya mampu mendapatkan 1 kali juara 3 di olimpiade
									tingkat kabupaten pada kelas 11. Pada kelas 12, saya mencoba untuk berbagi ilmu kepada adik-adik kelas saya. Saya menjadi staf pengajar
									olimpiade matematika dan olimpiade komputer sekaligus. Kegiatan mengajar ini masih saya lakukan setelah saya kuliah, saya sering kali
									kembali ke SMA untuk mengajar adik-adik kelas saya yang ingin menambah ilmu mereka. Di SMA ini juga, saya belajar melakukan editing
									video untuk memenuhi tugas sekolah.
								</p>
							</div>
						</div><div class="education-information">
							<div class="education-information-header">
								<h3>UNIVERSITY</h3>
								<h1>DIPONEGORO UNIVERSITY</h1>
								<h2>2016-NOW</h2>
							</div>
							<div class="education-information-main">
								<p>
									Sebagai seorang mahasiswa, saya telah berpikir lebih jauh untuk kehidupan saya yang akan datang. Sulitnya persaingan dalam perlombaan saya
									mencoba untuk mencari pengalaman dalam berorganisasi. Tidak berani ambil resiko, saya hanya mengikuti 1 sampai 2 organisasi sampai semester 5.
									Dalam 5 semester saya telah bisa mengerjakan sebuah website untuk organisasi yang saya ikuti, dan saya juga telah berhasi membuat beberapa project
									animasi, project animasi ini saya kerjakan untuk memenuhi tugas teman saya dan juga tugas kuliah saya.
									Untuk tugas kuliah saya, video animasi yang saya buat berhasil menjadi video animasi terbaik. Website ini saya buat untuk menambah pengalaman saya
									dalam pembuatan website dan juga untuk mempelajari lebih banyak lagi dalam pembuatan website.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="skill-page">
					<div class="main-tag">
						<div class="tag-icon">
							<img src="/Assets/logo/skill-logo.png" width="50">
						</div>
						<div class="tag-name">
							<h1>SKILL</h1>
						</div>
					</div>

					<div class="skill-page-wrap">
							<div class="skill-item">
								<img src="/Assets/logo/Skill/html-5.png" alt="HTML 5" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/css-3.png" alt="CSS 3" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/SASS.png" alt="SASS" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/bootstrap.png" alt="Bootstrap" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/javascript.png" alt="Javascript" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/jquery.png" alt="Jquery" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/angular.png" alt="Angular JS" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/php.png" alt="PHP" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/laravel.png" alt="Laravel" width="70px">
							</div>
							<div class="skill-item">
								<img src="/Assets/logo/Skill/java.png" alt="Java" width="70px">
							</div>
					</div>
				</div>

				<div class="project-page">
					<div class="main-tag">
						<div class="tag-icon">
							<img src="/Assets/logo/project-logo.png" width="50">
						</div>
						<div class="tag-name">
							<h1>PROJECT</h1>
						</div>
					</div>
					<div class="project-page-wrap">
						<div class="project-image">
							<img src='/Assets/project-image/smundip.png' width='320'>
						</div>
						<div class="project-list">
							<div class="project-list-header">
								<h1>Website Application</h1>
							</div>
							<div class="project-list-item">
								<ul class="project-scroll">
									<li value="https://github.com/muhammadikhsan1042/website_smundip">Website Senat Mahasiswa Universitas Diponegoro (sm.undip.ac.id)</li>
									<li value="https://github.com/muhammadikhsan1042/Website_notesan">Website Portofolio Pribadi (notesan.id)</li>
									<li value="https://github.com/muhammadikhsan1042/efter-effect-korupsi">Animation Video about Corruption</li>
									<li value="https://www.youtube.com/watch?v=WnYthgQYzsU">Animation Video about Karnaugh Map</li>
								</ul>
							</div>
							<div style="margin-top:5px;color:red;">
								<span>*note : double click to show the project</span>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer>
				<div class="aboutme-page">
					<div class="main-tag">
						<div class="tag-name">
							<h1>THANK YOU FOR VISIT</h1>
							<h2>See you again with me, Muhammad Ikhsan</h2>
						</div>
					</div>
				</div>
			</footer>
		<?php endif; ?>

  </body>
  <script type="text/javascript" src="/Style/JS/jquery.min.js"></script>
  <script type="text/javascript" src="/Style/JS/index.js"></script>
</html>
