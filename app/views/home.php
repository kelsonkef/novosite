<div class="home">
    <div class="row">
        <div class="col s12 m12 l9">
            <div class="slider">
                <ul class="slides">
                <?php                    
                    foreach ($carroucels as $carroucel){
                        @$link_car;
                        if(($carroucel->id_noticia) == 0){$link_car = "#";}else{$link_car = URL_BASE."noticias/getNoticia/".$carroucel->id_noticia."";}
                        if($carroucel->ativo_carroucel == "s"){ ?>								

                            <li><a href='<?php echo $link_car ?>'>
                                    <img src='<?php echo URL_BASE ?>assets/img/arquivos/car/<?php echo $carroucel->url_img ?>'> <!-- random image -->
                                    <div class='caption center-align'>
                                            <h3 class='h3_slider'><?php echo $carroucel->titulo ?></h3>
                                            <h5 class='h5_slider light grey-text text-lighten-3 text-slider-top'><?php echo $carroucel->descricao ?></h5>
                                    </div>
                            </a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>		
        </div>
        
        <div class="col s12 m12 l3 center-align cards-principal">            
            
            <div class="ui special cards centered">
              <div class="card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                            <div class="content">
                                    <a href="<?php echo URL_BASE."transparencia"?>">
                              <div class="center">						
                                    <p class="font_card">O Portal da Transparência é uma importante ferramenta de divulgação da utilização dos recursos, propiciando a participação do sócio, o aperfeiçoamento da gestão e o fortalecimento da democracia.</p>						
                              </div>
                                    </a>
                            </div>
                      </div>
                      <img src="<?php echo URL_BASE ?>assets/img/transp_img.png">
                    </div>
                    <div class="content">
                      <h4><a href="portalt/pt_index.php?t_header=Transparência ao Sócio">Portal da Transparência</a></h4>				  
                    </div>				
              </div> 
            </div>

            <div class="ui special cards centered">
              <div class="card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                            <div class="content">
                                    <a href="<?php echo URL_BASE."convenios"?>">
                              <div class="center">						
                                    <p class="font_card">Uma rede de estabelecimentos comerciais e/ou serviços, em convênio com a Caixa Beneficente, com finalidade de oferecer descontos e beneficios diversos aos sócios.</p>						
                              </div>
                                    </a>
                            </div>
                      </div>
                      <img src="<?php echo URL_BASE ?>assets/img/conv_img.png">
                    </div>
                    <div class="content">
                      <h4><a href="convenios/con_index.php?t_header=Nossos Convênios">Rede Conveniada</a></h4>				  
                    </div>				
              </div> 
            </div>
            
        </div>
        
    </div>
    
    <div class="home-associar">
	<div class="row">
		<div class="col s12 l2"></div>
		<div class="col s6 l4">
			
			<div class="col s12 l12 center-align txt-associar">
				<a class="branco-text"><b>Quero me associar</b></a>		
			</div>		
			<div class="col l12 s12 center-align">
				<div class="ui animated red fade button" tabindex="0">
				  <div class="visible content">Clique aqui</div>
				  <a href="<?php echo URL_BASE."home/getServicos/associar"?>" class="qsocio">
				  <div class="hidden content">
					CLIQUE AQUI
				  </div>
				  </a>
				</div>
			</div>
			
		</div>

		<div class="col s6 l4">
			
			<div class="col s12 l12 center-align txt-associar">
				<a class="branco-text"><b>Faça Seu Recadastramento</b></a>		
			</div>		
			<div class="col l12 s12 center-align">
				<div class="ui animated red fade button" tabindex="0">
				  <div class="visible content">Clique aqui</div>
				  <a href="<?php echo URL_BASE."home/getServicos/recadastro";?>" class="qsocio">
				  <div class="hidden content">
					CLIQUE AQUI
				  </div>
				  </a>
				</div>
			</div>
			
		</div>	
		<div class="col s12 l2"></div>
	</div>
    </div>
    
    <div class="inf-main">
        <div class="row">
            <div class="col s12 l3">
                    <span class="card-titulo activator grey-text text-darken-4">Nossos Serviços</span>
            </div>
        </div>							
        <div class="row">
                <div class="col s12 l2 center-align">
                        <br />
                        <div class="ui special cards centered">
                          <div class="card">
                                <div class="blurring dimmable image">
                                  <div class="ui inverted dimmer">
                                        <div class="content">
                                                <a href="<?php echo URL_BASE."home/getServicos/odontologia";?>">
                                          <div class="center">						
                                                <p class="font_card">Proficionais prontos para deixar seu sorriso perfeito.</p>						
                                          </div>
                                                </a>
                                        </div>
                                  </div>
                                  <img src="<?php echo URL_BASE ?>assets/img/card05.png">
                                </div>
                                <div class="content">
                                  <h4>Odontologia</h4>				  
                                </div>
                                <div class="extra content">
                                        <a href="<?php echo URL_BASE."home/getServicos/odontologia";?>" class="ui basic button">					  
                                          Saiba mais aqui
                                        </a>
                                </div>
                          </div> 
                        </div>			
                </div>
                <div class="col s12 l2 center-align">			
                        <br />
                        <div class="ui special cards centered">
                          <div class="card">
                                <div class="blurring dimmable image">
                                  <div class="ui inverted dimmer">
                                        <div class="content">
                                        <a href="<?php echo URL_BASE."home/getServicos/psicologia";?>">						
                                          <div class="center">						
                                                <p class="font_card">Médicos preparados para atender aos sócios em seus problemas na área psicologia e psiquiatria.</p>						
                                          </div>
                                         </a>
                                        </div>
                                  </div>
                                  <img src="<?php echo URL_BASE ?>assets/img/card08.png">
                                </div>
                                <div class="content">
                                  <h4>Psiquiatria e Psicologia</h4>				  
                                </div>
                                <div class="extra content">
                                        <a href="<?php echo URL_BASE."home/getServicos/psicologia"?>" class="ui basic button">					  
                                          Saiba mais aqui
                                        </a>
                                </div>
                          </div> 
                        </div>		
                </div>
                <div class="col s12 l2 center-align">		
                        <br />
                        <div class="ui special cards centered">
                          <div class="card">
                                <div class="blurring dimmable image">
                                  <div class="ui inverted dimmer">
                                        <div class="content">
                                                <a href="<?php echo URL_BASE."home/getServicos/juridico";?>">	
                                          <div class="center">						
                                                <p class="font_card">Os advogados da Caixa Beneficente se colocam a disposição dos associados. A orientação é totalmente gratuita para sócios e dependentes.</p>						
                                          </div>
                                                </a>
                                        </div>
                                  </div>
                                  <img src="<?php echo URL_BASE ?>assets/img/juridico.png">
                                </div>
                                <div class="content">
                                  <h4>Assistência Jurídica</h4>				  
                                </div>
                                <div class="extra content">
                                        <a href="<?php echo URL_BASE."home/getServicos/juridico";?>" class="ui basic button">					  
                                          Saiba mais aqui
                                        </a>
                                </div>
                          </div> 
                        </div>			
                </div>
                <div class="col s12 l2 center-align">		
                <br />
                        <div class="ui special cards centered">
                          <div class="card">
                                <div class="blurring dimmable image">
                                  <div class="ui inverted dimmer">
                                        <div class="content">
                                                <a href="<?php echo URL_BASE."home/getServicos/barbearia";?>">
                                          <div class="center">						
                                                <p class="font_card">Atendendo os sócios, homens e mulheres com serviços de corte e escova.</p>						
                                          </div>
                                                </a>
                                        </div>
                                  </div>
                                  <img src="<?php echo URL_BASE ?>assets/img/card06.png">
                                </div>
                                <div class="content">
                                  <h4>Barbearia</h4>				  
                                </div>
                                <div class="extra content">
                                        <a href="<?php echo URL_BASE."home/getServicos/barbearia";?>" class="ui basic button">					  
                                          Saiba mais aqui
                                        </a>
                                </div>
                          </div> 
                        </div>			
                </div>
                <div class="col s12 l2 center-align">		
                <br />
                        <div class="ui special cards centered">
                          <div class="card">
                                <div class="blurring dimmable image">
                                  <div class="ui inverted dimmer">
                                        <div class="content">
                                                <a href="<?php echo URL_BASE."home/getServicos/nutricionista";?>">
                                          <div class="center">						
                                                <p class="font_card">Um profissional responsável por estudar as maneiras mais corretas de nutrição para os associados.</p>						
                                          </div>
                                                </a>
                                        </div>
                                  </div>
                                  <img src="<?php echo URL_BASE ?>assets/img/card07.png">
                                </div>
                                <div class="content">
                                  <h4>Nutricionista</h4>				  
                                </div>
                                <div class="extra content">
                                        <a href="<?php echo URL_BASE."home/getServicos/nutricionista";?>" class="ui basic button">					  
                                          Saiba mais aqui
                                        </a>
                                </div>
                          </div> 
                        </div>			
                </div>
                <div class="col s12 l2 center-align">		
                <br />
                        <div class="ui special cards centered">
                          <div class="card">
                                <div class="blurring dimmable image">
                                  <div class="ui inverted dimmer">
                                        <div class="content">
                                                <a href="<?php echo URL_BASE."home/getServicos/medico";?>">
                                          <div class="center">						
                                                <p class="font_card">Médico preparado para atender aos sócios em seus problemas na área de saúde.</p>						
                                          </div>
                                                </a>
                                        </div>
                                  </div>
                                  <img src="<?php echo URL_BASE ?>assets/img/clinico.png">
                                </div>
                                <div class="content">
                                  <h4>Clinico Geral</h4>				  
                                </div>
                                <div class="extra content">
                                        <a href="<?php echo URL_BASE."home/getServicos/medico";?>" class="ui basic button">					  
                                          Saiba mais aqui
                                        </a>
                                </div>
                          </div> 
                        </div>			
                </div>
        </div>	
    </div>
    
    
    <div class="noticias">		
        <div class="row">
                <div class="col s12 l12">
                        <hr class="hr-not">
                </div>
                <div class="row">
                    <div class="col s12 l3">
                        <span class="card-titulo activator grey-text text-darken-4">Notícias</span>
                    </div>
                </div>
                <div class="col s12 l12"></div>
                <div class="col s12 l8 noticia">

                        <?php	
                        		
                        foreach ($noticias as $noticia){			
                        ?>				

                                <div class="ui items">
                                  <div class="item">
                                        <?php if(!$noticia->url_img_noticia == ""){ ?>
                                                <a class='ui medium rounded image' href='<?php echo URL_BASE."noticias/getNoticia/".$noticia->id_noticia ?>'>
                                                        <img class='responsive-img' src='<?php echo URL_BASE ?>assets/img/arquivos/not/<?php echo $noticia->url_img_noticia ?>' />
                                                </a>				
                                        <?php } ?>	
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
                        <?php } ?> 

                        <div class="row">
                                <div class="col s12 l3">
                                        <a href="<?php echo URL_BASE."noticias";?>" class="ui animated red fade button" tabindex="0">
                                          <div class="visible content">Mais Notícias</div>
                                          <div class="hidden content">
                                                MAIS NOTÍCIAS
                                          </div>
                                        </a>					
                                        <br /><br />
                                </div>
                        </div>
                </div>
                <div class="col l1"></div>
                <div class="col s12 l3">

                    <div class="row">
                        <div class="col s12 l12 center-align">
                            <div class="row">
                                <div class="col s12 l12">
                                    <span class="card-titulo-ult activator grey-text text-darken-4">Últimas Notícias</span>
                                </div>
                            </div>
                            <?php
                                $cont = 1;
                                foreach ($ultnoticias as $ultnoticia){
                                    if($cont > 3){
                            ?>
                                    <a class="ui card centered" href="<?php echo URL_BASE."noticias/getNoticia/".$ultnoticia->id_noticia ?>">
                                      <div class="content">
                                            <div class="header"><?php echo $ultnoticia->titulo ?></div>												
                                      </div>
                                      <div class="extra content">
                                            <div class="meta">
                                              <span class="category"><?php setlocale(LC_ALL, 'pt_br', 'pt_br.utf-8', 'pt_br.utf-8', 'portuguese');
                                            echo strftime('%d de %B de %Y', strtotime($ultnoticia->data)); ?></span>
                                            </div>
                                      </div>
                                    </a>										

                             <?php }$cont++;} ?>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    
    <div class="videos">		
        <div class="row">
                <div class="col s12 l12">
                        <hr class="hr-not">
                </div>
                <div class="row">
                    <div class="col s12 l3">
                        <span class="card-titulo activator grey-text text-darken-4">Vídeos</span>
                    </div>
                </div>
                <div class="col s12 l12"></div>

                <div class="col s12 l6 noticia">
                        <div class="col s12 l12 center-align">
                                <h4 class="activator grey-text text-darken-4">Sede Administrativa João Pessoa</h4><br />					
                        </div>
                        <div class="col s12 l12"></div>
                        <video class="responsive-video" controls>
                                <source src="<?php echo URL_BASE ?>assets/img/arquivos/videos/sede_adm_jp.mp4" type="video/mp4">
                        </video>				
                </div>

                <div class="col s12 l6 noticia">
                        <div class="col s12 l12 center-align">
                                <h4 class="activator grey-text text-darken-4">A Caixa chega ao Sertão</h4><br />						
                        </div>
                        <div class="col s12 l12"></div>
                        <video class="responsive-video" controls>
                                <source src="<?php echo URL_BASE ?>assets/img/arquivos/videos/sertao.mp4" type="video/mp4">
                        </video>				
                </div>

        </div>
    </div>
    
</div>