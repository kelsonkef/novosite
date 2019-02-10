<div class="home">
    <div class="inf-main">		
    	<div class="row">
    		<div class="col l1"></div>
    		<div class="col s12 l10">
    			<?php foreach ($noticias as $noticia):?>		
    			
    			<div class="ui items">
    				  <div class="item">
    					<?php if(!$noticia->url_img_noticia == ""):?>
    						<a class='ui medium rounded image' href='<?php echo URL_BASE."noticias/getNoticia/".$noticia->id_noticia ?>'>
    							<img class='responsive-img' src='<?php echo URL_BASE?>assets/img/arquivos/not/<?php echo $noticia->url_img_noticia ?>' />
    						</a>			
    					<?php endif; ?>	
    					<div class="middle aligned content">
    					  <div class="header">
    						<?php echo $noticia->titulo ?>
    					  </div>
    					  <div class="meta">
    						<span class="price">Publicado em <?php setlocale(LC_ALL, 'pt_br', 'pt_br.utf-8', 'pt_br.utf-8', 'portuguese');
    						echo strftime('%d de %B de %Y', strtotime($noticia->data)); ?>						
    					  </div>
    					  <div class="description">
    						<p><?php echo $this->resume($noticia->descricao,400) ?></p>
    					  </div>
    					  <div class="extra">
    						
    						  <a href="<?php echo URL_BASE."noticias/getNoticia/".$noticia->id_noticia ?>" class="ui right floated button">Leia mais</a>
    						
    					  </div>
    					</div>
    				  </div>			  
    				</div>		
    				<br />
    			<?php endforeach; ?> 					
    			
    		</div>
    		<div class="col l1"></div>
    	</div>
    	<div class="row">
    		<div class="col s12 l12">
    			<div class="row">
    				<div class="col s12 l3">
    					<a href="<?php echo URL_BASE."noticias/maisNoticias/".$quantidade;?>" class="ui animated red fade button" tabindex="0">
    					  <div class="visible content">Mais Notícias</div>
    					  <div class="hidden content">
    						MAIS NOTÍCIAS
    					  </div>
    					</a>					
    					<br /><br />
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>