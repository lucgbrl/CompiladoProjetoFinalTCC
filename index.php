<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set("memory_limit", "32M");
include_once ("scripts/Redimensiona.php");

if (isset($_POST['acao']) && $_POST['acao']=="cadastrar"){

	$foto = $_FILES['foto'];
	$redim = new Redimensiona();
	$src=$redim->Redimensionar($foto, 350, "static");

}

include('head.php');
include('nav.php');

?>
<style>
h2{
    font-size:100px !important;
}

h3 {
	font-size: 48px !important;

}
</style>
<section class = "index">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6">
				<h2 class = "text-white">Galeria de imagens</h2>
				<p class = "text-white">Produzida utilizando a linguagem PHP 7 e o Servidor Apache 2.4. Clique no botão abaixo para acessar a galeria.</p>
				<a class = "btn btn-warning">Acessar galeria de imagens<a>
			</div>
		</div>
	</div>
</section>
<div class = "container">
	<div class = "row">
		<div class = "col-md-6">
			<h1 class = "heading-1">Upload de imagem</h1>

			<p>Utilize o campo abaixo para selecionar a imagem para envio. Ela será redimensionada e enviada para o servidor. Após selecionar clique em enviar.</p>
			<form method="post" action="" enctype="multipart/form-data">

			<div class = "custom-file mb-3">
				<input type="file" name="foto" value = "Enviar imagem" class = "custom-file-input" />
				<label class="custom-file-label" for="customFile"><i class = "fa fa-camera-retro"></i> Escolher arquivo</label>
			</div>

			<button class = "btn btn-outline-primary" type="submit"><i class = "fa fa-camera"></i> Enviar</button>
			<button class = "btn btn-outline-danger" type="submit"><i class = "fa fa-trash"></i> Cancelar</button>
			<input class = "btn btn-success" type="hidden" name="acao" value="cadastrar" />
			</form>
			<?php
			if (isset($_POST['acao']) && $_POST['acao']=="cadastrar"){
				echo "<img src=\"$src\">";
			}
			?>
		</div>
	</div>
</div>
<section class = "jumbotron bg-dark text-white">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 mb-3">
				<h4 class = "">Desempenho</h4>
				<h3><b>Otimizando imagens para a internet</b></h3>
				<p class = "text-muted">
					Auditoria de páginas para a internet com ferramentas Open Source.
				 	Qualidade da imagem. Acessibilidade & Usabilidade. Palavras-chave.</p>
				<a class = "btn btn-outline-light text-light">Leia mais</a>
			</div>
			<div class = "col-md-6">
				<div class = "row">
					<div class = "col-md-3">
						<p class = "text-muted">Páginas</p>
						<h1>04</h1>
						<p class = "text-muted">	HTML + PHP</p>
					</div>
					<div class = "col-md-3">
						<p class = "text-muted">Imagnes</p>
						<h1>66</h1>
						<p class = "text-muted">Amostras</p>
					</div>
					<div class = "col-md-3">
						<p class = "text-muted">Técnicas</p>
						<h1>03</h1>
						<p class = "text-muted">Metodologias</p>
					</div>
					<div class = "col-md-3">
						<p class = "text-muted">Experimentos</p>
						<h1>03</h1>
						<p class = "text-muted">Testes com a Lighthouse</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class = "container">
	<div class = "row">
	<div class = "col-md-6 p-5">
			<h2>Features</h2>
		</div>
		<div class = "col-md-6 p-5">
			<div class = "twitter">
				<h3>Website construído utilizando PHP</h3>
				<i class = "fab fa-2x fa-html5"></i>
				<i class = "fab fa-2x fa-css3-alt"></i>
				<i class = "fab fa-2x fa-php"></i>
				<p>Utilizando o Carregamento Lento, do inglês, <i>lazyload</i> versus redimensionamento via aplicação.</p>
				<a class = "btn btn-outline-primary">Ler mais sobre</a>
				<a class = "btn btn-primary text-white"><i class = "fab fa-twitter"></i>Comentar sobre</a>
			</div>
			<br><br>
			<div class = "twitter">
				<h3>Aplicativo construído com Java & Kotlin</h3>
				<i class = "fab fa-2x fa-android"></i>
				<i class = "fab fa-2x fa-java"></i>
				<i class = "fab fa-2x fa-github"></i>
				<p>Utilizando o Carregamento Lento, do inglês, <i>lazyload</i> versus redimensionamento via aplicação.</p>
				<a class = "btn btn-outline-primary">Ler mais sobre</a>
				<a class = "btn btn-primary text-white"><i class = "fab fa-twitter"></i>Comentar sobre</a>
			</div>
			<br><br>
			<div class = "twitter">
				<h3>Android OS</h3>
				<i class = "fab fa-2x fa-github"></i>
				<i class = "fab fa-2x fa-twitter"></i>
				<i class = "fab fa-2x fa-facebook"></i>
				<p>Utilizando o Carregamento Lento, do inglês, <i>lazyload</i> versus redimensionamento via aplicação.</p>
				<a class = "btn btn-outline-primary">Ler mais sobre</a>
				<a class = "btn btn-primary text-white"><i class = "fab fa-twitter"></i>Comentar sobre</a>
			</div>
		</div>
	</div>
</div>

<section class = "jumbotron bg-primary text-white">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6 mb-3">
				<h3 class = "">Infraestrutura & Monitoramento</h3>
				<p>Coletando métricas e auditando páginas para a internet para o TCC de Lucas Gabriel Guilherme dos Santos.</p>
				<a class = "bnt btn-white">Leia mais</a>
			</div>
			<div class = "col-md-6">
				<div class = "row">
					<div class = "col-md-3">
						<h1>04</h1>
						<p>Páginas</p>
					</div>
					<div class = "col-md-3">
						<h1>66</h1>
						<p>Imagens base</p>
					</div>
					<div class = "col-md-3">
						<h1>03</h1>
						<p>Metodologias</p>
					</div>
					<div class = "col-md-3">
						<h1>03</h1>
						<p>Experimentos</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class = "container ">
        <div class ="row">
            <div class = "col-md-4">
                <ul>
                    <li><i class = "fab fa-2x fa-instagram"></i></li>
                    <li><h3>Sociais</h3></li>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                </ul>
            </div>
            <div class = "col-md-4">
                <ul>
                    <li><i class = "fab fa-2x fa-whatsapp"></i></li>
                    <li><h3> Canais</h3></li>
                    <li>WhatsApp</li>
                    <li>E-mail</li>
					<li>Linked In</li>

                </ul>
            </div>
            <div class = "col-md-4">
                <ul>
                    <li><i class = "fab fa-2x fa-vuejs"></i></li>
                    <li><h3>Notícias</h3></li>
                    <li>Updates & Newsletter</li>
                    <li>Gitbook</li>
                    <li>Github</li>
                    <li>Pesquisa & Extensão</li>
					<li>Tutoriais</li>
                </ul>
            </div>
        </div>
      </section>

    <?php include 'pages/foo.php'; ?>
