<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>

<br>
<br>

<?php foreach ($convenios as $convenio){
    
    $caminho =str_replace("/","\\",URL_IMG."arquivos/conv/convenio/".$convenio->url_img."<br>");
    echo $caminho;
    
    if(file_exists($caminho)){
        echo "Entrou no if e econtrou a imagem";
    }else{
        echo "Entrou no else e não encontrou a imagem";
    }
    echo "<br><br><br><br>";
    
    
        }
?>



<br>
<br>
<br>

<br>

<br>

<br>
<br>

<br>
<br>

<br>