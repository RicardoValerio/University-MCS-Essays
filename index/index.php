<?php ob_start();
if (isset($_POST['escolha']) ){
	$escolha = $_POST['escolha'];
	$local = "Location: http://europeia.webprojects-valerio.pusku.com/MCS". $escolha;
	header($local);
	exit("Bazinga! xD");
}
ob_end_flush();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>MCS - Index dos Trabalhos</title>

	<!-- <base target="_blank"> -->

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="css/reveal.min.css">
	<link rel="stylesheet" href="css/theme/ray.css" id="theme">

	<!-- For syntax highlighting -->
	<link rel="stylesheet" href="lib/css/solarized_light.css">

	<!-- If the query includes 'print-pdf', use the PDF print sheet -->
	<script>
	document.write( '<link rel="stylesheet" href="css/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
	</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->

		<style>

		select.funcy option{
			font-family: cursive;
		}

		</style>

	</head>



	<body>

		<div class="reveal">
			<div class="slides">



				<section><!-------------------------- slide ------------------------>
					<div style="margin-bottom:40px;">
						<h1 style="color:#FC9414; font-size:90px; margin: 0 0 100px 0;">Metodologia das Ciências Sociais</h1>
					</div>
					<br>

					<div style="width:60%; float:left; ">


						<small style="color:#D7D2D2;"><em style="color:#B6DDDD;">Index</em> dos trabalhos realizados <br>ao longo do semestre:</small>
						<br><br>

						<p>

							<form action="?" method="post">
								<select class="funcy" style="display:inline; clear:both; width:340px; text-align:center; height:40px; font-weight: bold; " name="escolha" id="">
									<option value="/1/Trabalho1.pdf">Trabalho 1 - Questões de Investigação Científica</option>
									<option value="/2/">Trabalho 2 - Pesquisa Google Académico</option>
									<option value="/3/">Trabalho 3 - Pesquisa Scielo e EBSCO</option>
									<option value="/4/">Trabalho 4 - Estatísticas sobre Questão Científica</option>
									<option value="/5/Trabalho5.pdf">Trabalho 5 - Ficha de Leitura sobre um Artigo Científico</option>
									<option value="/6/Trabalho6.pdf">Trabalho 6 - Referências estilo APA, (Manual | Mendeley)</option>
									<option value="/7/Trabalho7.pdf">Trabalho 7 - Classificação de Estudos</option>
									<option value="/8/Trabalho8.pdf">Trabalho 8 - Questionário</option>
									<option value="/9/Trabalho9.pdf">Trabalho 9 - Entrevista</option>
									<option style="background-color: green; color:white; font-weight: bolder;" value="/10/Trabalho10.pdf">Trabalho 10 (final) - Abstract</option>
									<!--
								-->
							</select>


							<input type="submit" style=" margin-left:15px; border-radius:5px; height:50px; background-color:#1CDE1C; color:white; font-family: cursive; font-weight: bold; cursor:pointer;" title="Ver o trabalho escolhido!" value="View the Paper!">
						</form>

					</p>


				</div>

				<div style="float:right; width:35%; border-left:1px solid gray;">
					<p style="padding-left:10px; margin-left:10px;">
						<small>Grupo constituído por: <br> <br>
							<a href="">Ricardo Valério - Nº 50029995</a>  <br>
							<a href="">João Faria - Nº 50030485</a> <br>
							<a href="">João Alpalhão - Nº 50030249</a> <br>

						</small>
					</p>
				</div>
			</section>



		</div><!-- slides -->
	</div><!-- reveal -->

	<script src="lib/js/head.min.js"></script>
	<script src="js/reveal.min.js"></script>

	<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: false,
				progress: false,
				history: true,
				center: true,
				rollingLinks: false,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none
				transitionSpeed: 'slow',

				// Optional libraries used to extend on reveal.js
				dependencies: [
				{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
				{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
				{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
				{ src: 'plugin/highlight/highlight.js', async: true, callback: function() {
						hljs.tabReplace = '<span class="tabindent">\t</span>';// replace tabs with spaces
						hljs.initHighlightingOnLoad();
					} },
					{src: 'http://code.jquery.com/jquery-1.9.1.js'},
					{src: 'http://code.jquery.com/ui/1.10.3/jquery-ui.js', callback: function() {
						$(function() {
							$( ".sortable" ).sortable();
						});
					}},

					{ src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: 'plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
					// { src: 'plugin/search/search.js', async: true, condition: function() { return !!document.body.classList; } }
					// { src: 'plugin/remotes/remotes.js', async: true, condition: function() { return !!document.body.classList; } }
					]
				});

</script>
<script>
Reveal.addEventListener('fragmentshown', function(event) {
	if (event.fragment.id==='populate') {
		document.querySelector("#myField").value="Don't forget"
	}
});
</script>






</body>
</html>
