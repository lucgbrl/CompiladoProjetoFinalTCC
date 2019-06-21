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

h3.subs {
	font-size: 68px !important;

}
</style>
<section class = "index">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6">
				<h4 class = "text-white">Lucas Gabriel, 356726</h4>
				<h3 class = "subs text-white"><b>Otimização de imagens para a internet</b></h3>
				<p class = "text-white" style="font-size: 23px;">
					Construído utilizando PHP7 + Apache2.4 e hospedagem na nuvem. Focado na entrega de conteúdo.</p>
				<a class = "btn btn-outline-light text-light"><i class = "fab fa-twitter"></i> Leia mais</a>		
				<a class = "btn btn-warning">Acessar galeria de imagens<a>
			</div>
		</div>
	</div>
</section>
<div class = "container" style = "height: 550px;">
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
<section class = "jumbotron bg-dark text-white" style="background: rgba(38,38,38,1);
background: -moz-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(24,38,41,1) 50%, rgba(13,33,41,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(38,38,38,1)), color-stop(50%, rgba(24,38,41,1)), color-stop(100%, rgba(13,33,41,1)));
background: -webkit-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(24,38,41,1) 50%, rgba(13,33,41,1) 100%);
background: -o-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(24,38,41,1) 50%, rgba(13,33,41,1) 100%);
background: -ms-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(24,38,41,1) 50%, rgba(13,33,41,1) 100%);
background: linear-gradient(to right, rgba(38,38,38,1) 0%, rgba(24,38,41,1) 50%, rgba(13,33,41,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#262626', endColorstr='#0d2129', GradientType=1 );
!important;">
	<div class = "container">
		<div class = "row p-4">
			<div class = "col-md-12">
				<h4 class = "text-muted">Desempenho</h4>
				<h3 class = "subs"><b>Auditoria empregando a ferramenta Lighthouse</b></h3>
				<p class = "text-muted" style="font-size: 23px;">
					Auditoria de páginas para a internet com ferramentas Open Source.
				 	Qualidade da imagem. Acessibilidade & Usabilidade. Palavras-chave.</p>
				<a class = "btn btn-outline-light text-light"><i class = "fab fa-twitter"></i> Leia mais</a>		
			</div>
			<div class = "col-md-6">
				<div class = "row">
					<div class = "col-md-3">
						<p class = "text-muted">Páginas dinâmicas</p>
						<h1>04</h1>
						<p class = "text-muted">HTML + PHP</p>
					</div>
					<div class = "col-md-3">
						<p class = "text-muted">Imagens otimizadas</p>
						<h1>66</h1>
						<p class = "text-muted">Amostras</p>
					</div>
					<div class = "col-md-3">
						<p class = "text-muted">Técnicas pontuais</p>
						<h1>03</h1>
						<p class = "text-muted">Metodologias</p>
					</div>
					<div class = "col-md-3">
						<p class = "text-muted">Experimentos & Estudos</p>
						<h1>16</h1>
						<p class = "text-muted">Testes com a Lighthouse</p>
					</div>
				</div>
			</div>
			<div class = "col-md-6"></div>
			<div class = "col-md-6">
				<img src = "img/91374.png" width="100%">
			</div>
			<div class = "col-md-6">
				<h4 class = "text-muted">Desempenho</h4>
				<h3 class = "subs"><b>Otimizando imagens para a internet</b></h3>
				<p class = "text-muted" style="font-size: 23px;">
					Implementando técnicas de redimensionamento e suavização aliadas a otimização da entrega de conteúdo.</p>
				<a class = "btn btn-outline-light text-light"><i class = "fab fa-twitter"></i> Leia mais</a>		
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
