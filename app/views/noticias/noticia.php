<div class="home">
    <div class="inf-main">		
    	<div class="row">
    		<div class="col s12 l12 xl12">			
    			<div class="row">				
    				<div class="col s12 l12 center-align">
    				<span class="not-int grey-text text-darken-4"><?php echo @$noticia->titulo ?></span>
    				</div>
    				<div class='col l3 hide-on-med-and-down'></div>
    				<?php if(!@$noticia->url_img_noticia == ""): ?>
    					<div class='col s12 l6 center-align img-not'>				
    						<img class='responsive-img' src='<?php echo URL_IMG."arquivos/not/".@$noticia->url_img_noticia ?>' />
    					</div>
    									
    				<?php endif; ?>
    				<div class='col l3 hide-on-med-and-down'></div>
    				<div class="container">
    					<div class='col s12 l11'>
    						<div class="cab-visualizacao"><br /><p>Autor: <span><?php echo @$noticia->autor ?></span></p>
    							<p>Publicado em <span><?php setlocale(LC_ALL, 'pt_br', 'pt_br.utf-8', 'pt_br.utf-8', 'portuguese');
    							echo strftime('%d de %B de %Y', strtotime(@$noticia->data)); ?></span></p>
    						</div>
    					</div>
    				
    					<div class="col s12 l12 txt-noticia">
    						 <p><?php echo @$noticia->descricao ?></p>
    					</div>
    				</div>
    			</div>						
    			
    		</div>		
    	</div>
    </div>
</div>