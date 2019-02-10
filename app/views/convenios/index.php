<div class="home">
        <?php include 'menuConvenios.php';?>	
    	</div>
    	<div class="convenios_filtro_titulo">
    		<div class="row">
    			<div class="col s12 l12">
    				<div class="col s12 l6">
    					<span class="card-titulo-not activator grey-text text-darken-4">Nossos Convênios de <?php echo "Mostrar a categoria do convenio" ?></span>						
    				</div>
    				<div class="col s12 l12">
    					<hr class="hr-not">
    				</div>
    			</div>
    		</div>
    		
    		
    		<div class="convenios_filtro">			
    			<div class="col s12 l12">				
    				<div class="row">
    
    				<?php
    				if($convenios != false){
    					foreach ($convenios as $convenio):	
    					echo URL_IMG."arquivos/conv/convenio/".$convenio->url_img;
    			?>
    					<div class="col s6 l3">
    						<a href="#modal<?php echo $convenio->id_convenio; ?>">
    						<div class="card waves-effect waves-light-2 card-c">
    							<div class="card-image">
    							  <img class="activator" src="<?php echo URL_IMG."arquivos/conv/convenio/"?><?php
    							  if($convenio->url_img == "" or file_exists(URL_IMG."arquivos/conv/convenio/".$convenio->url_img)){ echo "logo-home.png"; }
    							  else{ echo $convenio->url_img; } ?>">
    							</div>
    							<div class="card-content">								
    								<span class="card-title activator grey-text text-darken-4">Fone: <?php echo $convenio->telefone; ?></span>							  
    							</div>							
    						</div>
    						</a>
    					</div>						
    					
    					<!-- Modal Structure -->
    					<div id="modal<?php echo $convenio->id_convenio; ?>" class="modal">
    						<div class="modal-footer">
    						  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="large material-icons">close</i></a>
    						</div>
    						<div class="modal-content">
    						  <div class="col s12 m12">				
    							<div class="card horizontal">
    							  <div class="card-image">
    								<iframe frameborder="0" height="350" src="<?php echo $convenio->url_localizacao; ?>" style="border:0" width="300"></iframe>
    							  </div>
    							  <div class="card-stacked">
    								<div class="card-content card-modal">	
    									<div class="rolagem">
    										<span class="card-title activator grey-text text-darken-4"><h5><?php echo $convenio->titulo; ?></h5></span>
    										<img src="<?php echo URL_IMG."arquivos/conv/convenio/"?>" />
    										<div class="card-modal-txt">
    											<p><?php echo $convenio->descricao; ?></p>
    											<br />
    											<p>Endereço: <?php echo $convenio->endereco; ?></p>
    											<p>Cidade: <?php echo $convenio->cidade; ?></p>
    										</div>
    									</div>
    								</div>
    								<div class="card-action">
    								  <a >Fone: <?php echo $convenio->telefone; ?></a>					  
    								</div>
    							  </div>
    							</div>
    						  </div>
    						</div>			
    					</div>	
    
    
    					
    					<?php
    					endforeach;
    					}else{
    						echo '<span class="card-titulo-not activator grey-text text-darken-4">Nenhum registro</span>';
    
    					}	?>	
    				</div>				
    			</div>	
    		</div>					
    	</div>	
    </div>
</div>





