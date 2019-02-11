<div class="row">
    <div class="menu-topo">
        <div class="col s6 m6 l6 xl6">
            <h3 class="branco-text">Fone: (83) 3218-6790</h3>
        </div>
        <div class="col s6 m6 l6">
            <div class="menu-topo-icon right">
                <ul>                
                    <li class="branco-text login_mobile">Olá, faça seu <a href="#" class="branco-text"><b>login</b></a> ou <a href="#" class="branco-text"><b>cadastre-se</b></a></li>
                    <li class="invisivel"><a href="https://www.facebook.com/caixabeneficentepb/"  data-position="bottom right" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook-official branco-text" aria-hidden="true"></i></a></li>
                    <li class="invisivel"><a href="https://www.instagram.com/caixabeneficentepb/?hl=pt-br" data-position="bottom right" data-delay="50" data-tooltip="Instagram"><i class="fa fa-instagram branco-text" aria-hidden="true"></i></a></li>
                    <li class="invisivel"><a href="https://twitter.com/cxbeneficentepb" data-position="bottom right" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter-square branco-text" aria-hidden="true"></i></a></li>
                    <li class="invisivel"><a href="https://www.youtube.com/channel/UCNgcrId0mbCMQ1GIvvs-r3g" data-position="bottom right" data-delay="50" data-tooltip="Youtube"><i class="fa fa-youtube branco-text" aria-hidden="true"></i></a></li>
                    <li class="cursor_on invisivel"><a data-position="bottom right" data-delay="50" data-tooltip="Whatsap: (83) 99847-4958"><i class="fa fa-whatsapp branco-text" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="menu-meio">
        <div class="col s12 m12 l12">			
            <div class="row">                
                <div class="col s10 m8 l6">
                	<a href="<?php echo URL_BASE?>">
                   	 <img src="<?php echo URL_BASE ?>assets/img/logop1.png" class="responsive-img" />
                    </a>
                </div>                
            </div>
        </div>	
    </div>   
</div>


    
<div class="menu-principal">
    <nav class="vermelho-caixa">
        <div class="nav-wrapper">
            <div class="row">                
                <div class="col s12 m12 l12">					
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="hide-on-med-and-down">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">A CBPMBM <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Serviços <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>                        
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Institucional <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown4">Atendimento <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo URL_BASE."convenios" ?>">Convênios</a></li>
                        <li><a href="<?php echo URL_BASE."noticias"?>">Notícias</a></li>
                        <li><a href="collapsible.html">Contato</a></li>                        						
                    </ul>					
                </div>
            </div>
        </div>
    </nav>
</div>



<ul class="side-nav" id="mobile-demo">
	<ul class="collapsible" data-collapsible="accordion">
		<li>
			<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i> A CBPMBM</div>
			<div class="collapsible-body"><span>
				<ul>
				  <li><a href="#!">A Diretoria</a></li>
				  <li><a href="#!">Nossa Historia</a></li>
				  <li><a href="<?php echo URL_BASE."sedes" ?>">Nossas Sedes</a></li>
				</ul>			
			</span></div>
		</li>
		<li>
			<div class="collapsible-header">Serviços <i class="fa fa-angle-down" aria-hidden="true"></i></div>
			<div class="collapsible-body"><span>
				<ul>
				  <li><a href="#!">Quem pode</a></li>
				  <li><a href="#!">Benefícios</a></li>  
				</ul>			
			</span></div>
		</li>
		<li>
			<div class="collapsible-header"><a href="<?php if(!$titulo == ""){ echo "../"; }?>convenios/con_index.php?t_header=Nossos Convênios">Convênios</a></div>			
		</li>
		<li>
			<div class="collapsible-header">Institucional <i class="fa fa-angle-down" aria-hidden="true"></i></div>
			<div class="collapsible-body"><span>
				<ul>				  
				  <li><a href="#!">Planejamento</a></li>				  
				  <li><a href="<?php if(!$titulo == ""){ echo "../"; }?>portalt/pt_index.php?t_header=Transparência ao Sócio">Portal da Transparência</a></li>
				  <li><a href="<?php if(!$titulo == ""){ echo "../"; }?><?php echo URL_BASE."home/getServicos/estatuto"?>">Reforma do Estatuto</a></li>
				</ul>			
			</span></div>
		</li>
		<li>
			<div class="collapsible-header">Atendimento <i class="fa fa-angle-down" aria-hidden="true"></i></div>
			<div class="collapsible-body"><span>
				<ul>
				  <li><a href="<?php if(!$titulo == ""){ echo "../"; }?>espaco/espaco_index.php?acao=5&t_header=Nossos Serviços">Espaço dos Associado</a></li>
				  <li><a href="#!">Aniversariantes</a></li>				  
				</ul>			
			</span></div>
		</li>
		<li>
			<div class="collapsible-header"><a href="<?php if(!$titulo == ""){ echo "../"; }?>noticias/not_index.php?acao=5&t_header=Notícias">Notícias</a></div>			
		</li>
		<li>
			<div class="collapsible-header"><a href="collapsible.html">Contato</a></div>			
		</li>
		<li>
			<div class="collapsible-header"><a href="<?php if(!$titulo == ""){ echo "../"; }?>historia/hist_index.php?acao=5&t_header=Nossa História">Nossa História</a></div>			
		</li>		
	</ul>
</ul>


<!-- UL dos Dropdown -->

<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">A Diretoria</a></li>
  <li><a href="#!">Nossa História</a></li>
  <li><a href="<?php echo URL_BASE."sedes" ?>">Nossas Sedes</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Quem pode</a></li>
  <li><a href="#!">Benefícios</a></li>  
</ul>

<ul id="dropdown3" class="dropdown-content"> 
  <li><a href="#!">Planejamento</a></li>   
  <li><a href="portalt/pt_index.php?t_header=Transparência ao Sócio">Portal da Transparência</a></li>
  <li><a href="<?php echo URL_BASE."home/getServicos/estatuto"?>">Reforma do Estatuto</a></li>
</ul>

<ul id="dropdown4" class="dropdown-content">
  <li><a href="espaco/espaco_index.php?acao=5&t_header=Nossos Serviços">Espaço dos Associado</a></li>
  <li><a href="#!">Aniversariantes</a></li>   
</ul>