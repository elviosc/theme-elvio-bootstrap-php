<?php
/**
    * Retorna os nomes dos arquivos de um diretório
    * @author Rafael Wendel Pinheiro
    * @param String $dir Caminho do diretório a ser utilizado
    * @return array
*/
function get_files_dir($dir, $tipos = null){
      if(file_exists($dir)){
          $dh =  opendir($dir);
          while (false !== ($filename = readdir($dh))) {
              if($filename != '.' && $filename != '..'){
                  if(is_array($tipos)){
                      $extensao = get_extensao_file($filename);
                      if(in_array($extensao, $tipos)){
                          $files[] = $filename;
                      }
                  }
                  else{
                      $files[] = $filename;
                  }
              }
          }
          if(is_array($files)){
              sort($files);
          }
          return $files;
      }
      else{
          return false;
      }
}

/**
    * Retorna a extensão de um arquivo
    * @author Rafael Wendel Pinheiro
    * @param String $nome Nome do arquivo a se capturar a extensão
    * @return resource Caminho onde foi salvo o arquivo, ou false em caso de erro
*/
function get_extensao_file($nome){
    $verifica = explode('.', $nome);
    return $verifica[count($verifica) - 1];
}
?>
<!DOCTYPE html>
<html>

    <head>


                        <title>Elvio Web Designer em Itu</title>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
                        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
                        rel="stylesheet" type="text/css">
                        <link rel="stylesheet" href="assets/css/elvio-com-br.css">
                        <link rel="canonical" href="http://elvio.com.br/" />
                        <link rel="next" href="http://elvio.com.br/blog/" />
                        <meta property="og:locale" content="pt_BR" />
                        <meta property="og:type" content="website" />
                        <meta property="og:title" content="Elvio Web Designer em Itu - 11 9 8534-9099 tim / 11 9 4156-5335 vivo" />
                        <meta property="og:url" content="http://elvio.com.br/" />
                        <meta property="og:site_name" content="Elvio Web Designer em Itu" />
                        <!-- css -->
                        <link rel="stylesheet" type="text/css" href="css/print.css" media="print">

                        <meta name="keywords" content="web, fanpage, site institucional, sistemas online">
                        <meta name="description" content="Assessoria, manutenção e desenvolvimento web.">
<!--<script src="//my.hellobar.com/1aeb8c11389eb6d1a959f98fdd483530f8b412a8.js" type="text/javascript" charset="utf-8" async="async"></script>-->
		<script type="text/javascript">//<![CDATA[

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-11070966-1']);
		_gaq.push(['_trackPageview']);
		(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
		})();
		//]]></script>
    </head>

    <body data-spy="scroll">
        <a href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.less"></a>
        <div class="navbar navbar-default" role="navigation">

            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                        <li class="">
                            <a href="http://ituwebdesign.com.br/pagamento/contact.php">Contato</a>
                        </li>
                        <li>
                            <a href="#">Ligue: 11 9 8534-9099 tim / 11 9 4156-5335 whatsapp</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Acesso Rápido <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu" role="menu">

                                <li>
                                    <a href="http://ituwebdesign.com.br/pagamento/clientarea.php">Área do Cliente</a>
                                </li>
                                <li>
                                    <a href="http://ituwebdesign.com.br/pagamento/cart.php">Contratar Hospedagem de site</a>
                                </li>
                                <li>
                                    <a href="http://ituwebdesign.com.br/pagamento/domainchecker.php">Pesquisar Domínios</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">Outras opções</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="http://ituwebdesign.com.br/pagamento/knowledgebase.php">Base de conhecimento</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section text-center">
            <div class="background-image background-image-fixed" style="background-image : url('https://download.unsplash.com/photo-1434626881859-194d67b2b86f')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Elvio Designer</h1>
                        <p class="lead">Web Designer em Itu, respeitando seu projeto e seu tempo.</p>
                        <br>
                        <br>
                        <a class="btn btn-default btn-lg" href="http://elvio.com.br/blog/"><i class="fa fa-fw fa-briefcase"></i>Meu Blog</a>

                        <a class="btn btn-danger btn-lg" href="http://ituwebdesign.com.br/pagamento/submitticket.php"><i class="fa fa-fw fa-support"></i>Suporte via tickets</a>
                        <a class="btn btn-lg btn-warning" href="#portfolio"><i class="fa fa-star fa-fw"></i>Portfólio</a>
                        <a class="btn btn-lg btn-success"><i class="fa fa-fw fa-arrow-down"></i>Baixe esse tema free</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills"></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><center>

<div>
  <!-- adsense - BEGIN -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 728x90, criado 01/10/08 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4169091545150888"
     data-ad-slot="3564430667"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- adsense - END -->
</div>
</center></div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>
                            <i class="fa fa-fw fa-cogs"></i>Assessoria e Manutenção</h1>
                        <p class="lead">Otimização do Site. Relatórios de acessos,
                            <br>Hospedagem de sites em plataforma Linux,
                            <br>Sites auto-administráveis, Lojas virtuais customizáveis.</p>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-primary">
                            <i class="fa fa-fw fa-adn"></i>Gerador de conteúdo
                            <span class="label label-new-mini label-success">Novo</span>
                        </h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-danger">
                            <i class="fa fa-fw -code-o ars fa-code"></i>Desenvolvimeto webs site</h1>
                        <p class="lead"> Com foco no que realmente importa: pessoas!!!.
Para que seu site gere resultados reais, é preciso que ele seja capaz de encantar,
 surpreender, deixar marcada na memória do visitante uma experiência fácil, divertida.
O design dos nossos sites nos preocupamos com muito mais do que isso.</p>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-success">
                            <i class="fa fa-fw fa-bar-chart-o"></i>&nbsp; Internet Marketing&nbsp;</h1>
                        <p class="lead">  A atividade de Internet Marketing permite não só que você crie um negócio próprio a partir de sua própria casa, mas também consiga criar uma estrutura que, dependendo da sua criatividade, poderá mudar totalmente a sua vida.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
<form method="post" class="form-horizontal" role="form" action="http://ituwebdesign.com.br/pagamento/dologin.php">
<h2>Central do cliente </h2>
  <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="username" class="control-label">E-mail</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" name="username" class="form-control" id="username" placeholder="Insira o email cadastrado na central do cliente">
                                </div>
                            </div>
<div class="form-group">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label">Senha</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Insira sua senha que recebeu no cadastro.">
                                </div>
                            </div>
<div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
<input type="submit" value="Login" class="btn btn-default" />

                                </div>
                            </div>

</form>

                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-lg btn-success" href="http://ituwebdesign.com.br/pagamento/register.php">Cadastar nova conta</a></div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="btn-group btn-group-lg" data-toggle="buttons">
                            <a href="#" class="btn btn-danger btn-lg">FAQ Biblioteca de Ajuda<i class="fa fa-fw fa-question"></i></a>
                            <a href="#" class="btn btn-success"><i class="fa fa-fw fa-arrow-down"></i>Gostou desse tema faça o Download.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center" id="portfolio">Portfólio
                            <br>
                        </h1>
                    </div>
                </div>
                <div class="row">

                <?php
		$extensoes = array('jpg', 'png');
		$nomes = get_files_dir('clientes/', $extensoes);

		if(is_array($nomes)){
		    foreach ($nomes as $nome){
		         //echo $nome . "<br />";
				 echo	'<div class="col-md-4">

						<a href="clientes/'.$nome.'" title="'.$nome.'">
							<img src="timthumb.php?src=clientes/'.$nome.'&w=450&h=350" class="img-responsive" alt="img: '.$nome.'">
						</a>

					</div>';
		    }
		}
		?>

                </div>

            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><center>



<?php
$banner1 = '<a class="btn btn-theme btn-sm btn-min-block" href="http://www.superdominios.org/home/aff.php?aff=3801"><img src="http://www.superdominios.org/banners/Leaderboard---728x90.jpg" alt="Banner Afiliado Superdominios"></a>';
$banner2 = '<!-- adsense - BEGIN -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 728x90, criado 01/10/08 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4169091545150888"
     data-ad-slot="3564430667"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- adsense - END -->';
 $banner3 = '<div id=\'ibb-widget-root\'></div><script>(function(t,e,i,d){var o=t.getElementById(i),n=t.createElement(e);o.style.height=90;o.style.width=728;o.style.display=\'inline-block\';n.id=\'ibb-widget\',n.setAttribute(\'src\',(\'https:\'===t.location.protocol?\'https://\':\'http://\')+d),n.setAttribute(\'width\',\'728\'),n.setAttribute(\'height\',\'90\'),n.setAttribute(\'frameborder\',\'0\'),n.setAttribute(\'scrolling\',\'no\'),o.appendChild(n)})(document,\'iframe\',\'ibb-widget-root\',"banners.itunes.apple.com/banner.html?partnerId=&aId=&bt=genre&t=genre_matrix_black&ft=topfreeapplications&st=apps&s=36&p=27&c=br&l=pt-BR&w=728&h=90");</script>';
//$banner4 = '<a href="BANNER4_URL" target="_blank"><img src="BANNER4_IMG_SRC" alt="BANNER4_ALT" title="BANNER4_TITLE"></a>';
$banners = array($banner1, $banner2, $banner3);
shuffle($banners);
?>
<div>
  <?php print $banners[0] ?>
</div>
</center></div>
                </div>
            </div>
        </div>

        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Sobre&nbsp;</h1>
                        <p>Desenvolvedor web desde 2001, conhecimentos em html5, PHP, CSS, LESS.</p>



                        <p>Rua Parque do Varvito, 337 - Candelária - Itu/São Paulo<br />
                        &copy;Copyright 2014 - Elvio Web Designer em Itu. Designed by <a href="http://elvio.com.br">elvio</a></p>


                         <a href="#intro" class="totop"><i class="fa fa-angle-up fa-3x"></i></a>

                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="https://instagram.com/elviosc"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="http://twitter.com/elviosc"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="http://facebook.com/elviosc"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="https://github.com/elviosc"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                                <p>Parceria Locaweb <br />
                         <a href="http://profissionaisdeinternet.com.br/professionals/2775">Locaweb - Profissionais de internet</a></p>

                         <p>Linkedin <br />
                         <a href="https://www.linkedin.com/pub/elvio-rog%C3%A9rio-scaravelli/9/756/8b5">Linkedin - Elvio </a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>
<!-- Start of GetKudos Script
<script>
(function(w,t,gk,d,s,fs){if(w[gk])return;d=w.document;w[gk]=function(){
(w[gk]._=w[gk]._||[]).push(arguments)};s=d.createElement(t);s.async=!0;
s.src='//static.getkudos.me/widget.js';fs=d.getElementsByTagName(t)[0];
fs.parentNode.insertBefore(s,fs)})(window,'script','getkudos');

getkudos('create', 'elvio');
</script>
  End of GetKudos Script -->

<script>
var frameSrc = "/login";

$('#openBtn').click(function(){
    $('#myModal').on('show', function () {

        $('iframe').attr("src",frameSrc);

	});
    $('#myModal').modal({show:true})
});
</script>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('3982-491-10-8303');/*]]>*/</script><noscript><a href="https://www.olark.com/site/3982-491-10-8303/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
</html>
