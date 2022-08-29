<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> SITE </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/index.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
			<div style="width:30px;height:90px;border:dashed 75px;" id="view_photo"><img id='output' style="height=200px; width=10px"></div>
			<input type="file" name="files" />
             </figure>
			 <?php echo  "<h1> " . $_SESSION['username'] . "</h1>"; ?>
			 <script>
				var files = document.querySelector('input[name="files"]');

				files.addEventListener("change", function(file){
				var input = file.target;
	
				var reader = new FileReader();
    
				reader.onload = function(){
    			  var dataURL = reader.result;
     			 var output = document.getElementById('output');
     			 output.src = dataURL;
  				  };

 				   reader.readAsDataURL(input.files[0]);
						});
					</script>

						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>𝙼𝙰𝙶𝙽𝙰𝚃𝙰𝚂 𝚂𝚃𝙾𝚁𝙴</h2>
							<p>𝕓𝕖𝕞 𝕧𝕚𝕟𝕕𝕠 𝕒 𝕖𝕤𝕤𝕒 𝕘𝕣𝕒𝕟𝕕𝕖 𝕝𝕠𝕛𝕒 𝕕𝕠 𝕕𝕚𝕤𝕔𝕠𝕣𝕕<br />
							 </p>
						</header>
						<span class="image"><img src="images/MAG.jpg" alt="" /></span>
					
						
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/MAG.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>ESSE SITE FOI CRIADO PRA APRESENTAR MINHA LOJA E SITE</h2>
										<p>OBRIGADO POR ACHAR </p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>𝕒𝕠 𝕖𝕟𝕥𝕣𝕒𝕣 𝕟𝕠 𝕤𝕚𝕥𝕖 𝕧𝕔 𝕥𝕖𝕞 𝕕𝕚𝕤𝕡𝕠𝕟𝕚𝕓𝕚𝕝𝕚𝕕𝕒𝕕𝕖 𝕕𝕖 𝕞𝕦𝕚𝕥𝕒𝕤 𝕔𝕠𝕚𝕤𝕒𝕤 𝕒𝕢𝕦𝕚 𝕔𝕠𝕞𝕠 𝕔𝕠𝕞𝕡𝕣𝕒 𝕖 𝕔𝕠𝕟𝕧𝕖𝕣𝕤𝕒 𝕔𝕠𝕞 𝕠𝕤 𝕢𝕦𝕖 𝕖𝕟𝕥𝕣𝕒𝕣𝕒𝕞 𝕟𝕠 𝕤𝕚𝕥𝕖. 𝔼𝕤𝕤𝕖 𝕤𝕚𝕥𝕖 𝕖 𝕒𝕡𝕖𝕟𝕒𝕤 𝕦𝕞 𝕥𝕖𝕤𝕥𝕖 𝕡𝕒𝕣𝕒 𝕥𝕠𝕕𝕠𝕤 𝕡𝕠𝕕𝕖𝕣𝕖𝕞 𝕔𝕠𝕟𝕙𝕖𝕔𝕖𝕣 𝕞𝕖𝕦 𝕥𝕣𝕒𝕞𝕡𝕠
									</p>
								</div>
								<div class="col-4 col-12-medium">
									<p></p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/MAG.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>ℙ𝔸ℝ𝔸 ℂ𝕆ℕℍ𝔼ℂ𝔼ℝ 𝕄𝔸𝕀𝕊 𝕆 𝕊𝕀𝕋𝔼 𝔼ℕ𝕋ℝ𝔼 𝔸ℚ𝕌𝕀</h2>
							<p>𝕖𝕤𝕥𝕒 𝕥𝕦𝕕𝕠 𝕓𝕖𝕞 𝕓𝕒𝕤𝕚𝕔𝕠 𝕒𝕡𝕖𝕟𝕒𝕤 𝕡𝕒𝕤𝕤𝕖 𝕤𝕖 𝕢𝕦𝕚𝕤𝕖𝕣 𝕧𝕖𝕣 𝕞𝕒𝕚𝕤 𝕒𝕝𝕘𝕠 𝕤𝕠 𝕚𝕣 𝕕𝕖𝕤𝕔𝕖𝕟𝕕𝕠 𝕡𝕖𝕝𝕠 𝕤𝕚𝕥𝕖 𝕡𝕒𝕣𝕒 𝕧𝕖𝕣 𝕒𝕤 𝕔𝕠𝕚𝕤𝕒𝕤 𝕒 𝕞𝕒𝕚𝕤</p>
						</header>
						<p></p>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/MAG.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>𝕊𝔼 ℚ𝕌𝕀𝕊𝔼ℝ 𝔸𝕃𝔾𝕌𝕄𝔸 𝕀ℕ𝔽𝕆ℝ𝕄ℂ̧𝔸̃𝕆 𝕊𝕆 ℂ𝕃𝕀ℂ𝔸ℝ ℕ𝔼𝕊𝕊𝔼 𝔹𝕆𝕋𝔸̃𝕆</h2>
							<p>          𝕆 𝕤𝕚𝕥𝕖 𝕖𝕤𝕥𝕒 𝕖𝕞 𝕕𝕖𝕤𝕖𝕟𝕧𝕠𝕝𝕧𝕚𝕞𝕖𝕟𝕥𝕠 </p>
						</header>
						<p></p>
						<ul class="actions">
							<li><a href="conhecaosite.html" class="button">𝕃𝔼𝕀𝔸 𝕄𝔸𝕀𝕊 𝔸ℚ𝕌𝕀</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>  𝔸𝕃𝔾𝕌𝕄𝔸𝕊 ℂ𝕆𝕀𝕊𝔸𝕊 𝔻𝕀𝔽𝔼ℝ𝔼ℕ𝕋𝔼𝕊 𝔼𝕊𝕋𝔸𝕆 𝔸ℚ𝕌𝕀 </h2>
							<p></p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-chart-area"></span>
									<h3>𝕊𝕀𝕋𝔼 𝔽𝔸ℂ𝕀𝕃</h3>
									<p></p>
									<li><a href="cadastrar.html" class="button">𝕊𝔼 ℂ𝔸𝔻𝔸𝕊𝕋ℝ𝔼</a></li>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-comment"></span>
									<h3>𝕊𝕀𝕋𝔼 ℕ𝕆𝕍𝕆</h3>
									<p></p>
									<li><a href="index.html" class="button">𝕊𝕌𝔹𝔸 ℙ𝔸ℝ𝔸 𝕆 𝕀ℕ𝕀ℂ𝕀𝕆</a></li>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-flask"></span>
									<h3>𝔽𝔼𝕀𝕋𝕆 ℙ𝔸ℝ𝔸 𝕌𝕄𝔸 𝕃𝕆𝕁𝔸</h3>
									<p></p>
									<li><a href="conhecaosite.html" class="button">ℂ𝕆ℕℍ𝔼ℂ̧𝔸 𝕄𝔸𝕀𝕊 𝔸ℚ𝕌𝕀</a></li>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-paper-plane"></span>
									<h3>𝕄𝔼𝕃ℍ𝕆ℝ 𝕊𝕀𝕋𝔼 𝔻𝔼 𝕋𝕆𝔻𝕆𝕊</h3>
									<p></p>
									<li><a href="index.html" class="button">𝕊𝕌𝔹𝔸 ℙ𝔸ℝ𝔸 𝕆 𝕀ℕ𝕀ℂ𝕀𝕆</a></li>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-file"></span>
									<h3>ℂ𝕆𝕄𝔼ℂ̧𝕆𝕌 𝔸 ℙ𝕆𝕌ℂ𝕆 𝕋𝔼𝕄ℙ𝕆</h3>
									<p></p>
									<li><a href="conhecaosite.html" class="button">ℂ𝕆ℕℍ𝔼ℂ̧𝔸 𝕄𝔸𝕀𝕊 𝔸ℚ𝕌𝕀</a></li>	
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-lock"></span>
									<h3>𝕀ℕ𝔽𝕆ℝ𝕄𝔸ℂ̧𝕆̃𝔼𝕊 𝔸𝔹𝔸𝕀𝕏𝕆</h3>
									<p></p>
									<li><a href="conhecaosite.html" class="button">𝕃𝔼𝕀𝔸 𝕄𝔸𝕀𝕊 𝔸ℚ𝕌𝕀</a></li>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="index.html" class="button">𝕊𝕌𝔹𝔸 ℙ𝔸ℝ𝔸 𝕆 𝕀ℕ𝕀ℂ𝕀𝕆</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>𝕍𝕀ℕℂ𝕌𝕃𝔼 𝕌𝕄 𝔼𝕄𝔸𝕀𝕃 𝔸ℚ𝕌𝕀</h2>
							<p></p>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="COLOQUE SEU EMAIL AQUI" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="INICIE AQUI" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons"></ul>
					<ul class="copyright">
						<li>&copy; TODOS OS DIREITOS RESERVADOS </li><li>Design: <a href="conhecaosite.html">𝕊𝕆𝔹ℝ𝔼 𝕆 ℂℝ𝕀𝔸𝔻𝕆ℝ</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>