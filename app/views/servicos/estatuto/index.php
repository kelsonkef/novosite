<div class="home">
    <div class="row">
    	<div class="container">
    		<div class="col s12 m12 l12 center-align txt-noticia2">
    			<p><h2>Apresenteção</h2></p>
    		</div>
    		<div class="col s12 m12 l12 txt-noticia3">
    			<p>A proposta ideológica da impressão e divulgação das Normas Regulamentadoras do Estatuto da Caixa, sempre foi acalentada pela nossa Diretoria, sendo 
    			inclusive um dos compromissos assumidos pela atual Administração.</p>
    			<p>Reputamos este momento como sendo o mais oportuno para apresentarmos a cada sócio, um exemplar do documento base da nossa Entidade. Este procedimento visa
    			difundir de forma mais clara e precisa todo conteúdo do Estatuto fora reformado para uma melhor adequação a realidade atual e os interesses dos nossos associados, que 
    			são a razão maior da existência da Caixa Beneficente.</p>
    		</div>
    		<div class="col s12 m12 l12 img-not">
    			<div class="row">
    				<div class="col s12">
    					<div class="ui centered card">
    					  <a href="#modal/1-6" class="image">
    						<img src="<?php echo URL_IMG."servicos/estatuto/"?>estatuto_logo.png">
    					  </a>
    					  <div class="content">
    						<a href="#modal/1-6" class="header">Clique aqui</a>								
    					  </div>
    					</div>
    					
    					<!-- Modal Structure -->
    					<div id="modal/1-6" class="modal modal-fixed-footer">
    						<div class="modal-content">						  
    						  <p><embed src="<?php echo URL_BASE."assets/arquivos/estatuto.pdf"?>" width="100%" height="755" alt="pdf" ></p>
    						</div>
    						<div class="modal-footer">
    						  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
    						</div>
    					</div>
    				</div>							
    			</div>
    		</div>
    	</div>	
    </div>

</div>




	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE."assets/js/materialize.min.js"?>"></script>
	<script type="text/javascript">
		$(".button-not").sideNav();
		$('.modal').modal();
		$('.dropdown-button').dropdown({
				belowOrigin: true,
				hover: true,
				constrainWidth: false
			}
		);
		$('.button-collapse').sideNav({
			 menuWidth: 230
			}
		);
		$('.slider').slider({
			height: 430
		});
		
		var offset = $('.menu-pri').offset().top;
		var $meuMenu = $('.menu-pri'); // guardar o elemento na memoria para melhorar performance
		$(document).on('scroll', function () {
			if (offset <= $(window).scrollTop()) {
				$meuMenu.addClass('navbar-fixed');
			} else {
				$meuMenu.removeClass('navbar-fixed');
			}
		});		
		
		$(document).ready(function(){
		  $('.menu-pri').pushpin({
			top:180,
			offset: 15
		  });
		});		 
	</script>
	<script type="text/javascript" src="<?php echo URL_BASE."assets/js/semantic.min.js"?>"></script>
