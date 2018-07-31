Autor : Michel Deziderio e Silva
Descrção : Aqui está uma ferramenta extremamente forte e com vários fins de uso.
Autor URL : www.micheldeziderio.com.br

Olá você que está lendo este artigo.

Vou mostrar duas formas simples de usar a API de fotos do Instagram como galeria fotos para o seu site.
Eu tenho certeza que vão gostar dessa. 😀

Mas antes de eu começar a mostrar os códigod da API, vou falar dos prós e os contras.

Prós:

– Felizmente temos a vantagem de poder estilizar a API de galeria da forma que bem entender.

– Teremos uma galeria dinâmica onde não teremos nenhum problema de atualizações em nosso site ou site dos nossos clientes.

Contras:

– Infelizmente a API só nos deixa carregar até 30 fotos, mesmo com o Ajax para tentar forçar o carregamento das demais, sendo que eu acho que ninguém vai precisar demais de 15 fotos em sua galeria.

– Vídeos, sim os vídeos. Vou deixa-los um pouco triste em dizer que quando é uma postagem de dum vídeo o instagram nos envia para a API aquela thumbnail que é carregada no nosso feed. Tudo isso por causa da segurança rigorosa do facebook, para não ter a possibilidade de outras pessoas baixar os seus vídeos quando é carregado em seu site. Porém podemos colocar links aonda o usuário final possa acessar o link direto da sua postagem dentro do aplicativo ou do web instagram.

– API que tenho desenvolvida é em PHP, mas tem o seu pró também da possiblidade de ser gerada em outras linguagens que preferir, pois as fotos, links e textos são gerados por um Json.

Tudo isso não é maneiro? 🙂

Agora vamos botar a mão na massa?

1º É necessário que entre na sua conta do Instagram pelo browser.
Acesse este link:
https://www.instagram.com/developer/

2º Click em registar aplicação, para registar é bem simples, basta clicar em Register You Apllication e preencher o formulário.

http://micheldeziderio.com.br/wp-content/uploads/2018/07/instagram-resister-application.png

3º Você tem que criar um token para que o nosso API possa acessar suas fotos.
CLick nesse link:
http://instagram.pixelunion.net

4º Guarde o token em um lugar em lugar para poder inserir no código adiante.

Abaixo está a conexão com o Json da API do instagram.

<?php

$access_token="COLE SEU TOKEN AQUI";
$photo_count=8;
    
$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

?>

Criando o loop e imprimindo a galeria e modal com Bootstrap.

<?php
foreach ($obj['data'] as $post) { // Cria o loop da galeria
    
    $pic_text=$post['caption']['text']; // Pega o texto do Post em array
    $pic_link=$post['link'];            // Pega o link do Post em array
    $pic_like_count=$post['likes']['count']; // Pega o tanto de links do Post em array
    $pic_comment_count=$post['comments']['count']; // Pega os comentários em array
    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']); // Pega a resoluções do Post em array 
    $pic_created_time=date("F j, Y", $post['caption']['created_time']); // Pega a data de postagem em array
    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days")); // Faz o tratamento da data


    // Usando explode para criar um id para cada imagem a ser exibida no modal
    $imagem="{$pic_link}"; 
    $array=explode("/",$imagem); 
    
    $quebra="$array[4]";
    $arrayb=explode("-",$quebra);
    // Fim do explode para criar id para cada imagem a ser exibida no modal
    
    // Criando para o texto explode e tira as Hashtags
    $titulo="{$pic_text}";
    $arrayc=explode("#",$titulo);
    // Fim do explode das Hashtags
    
    // Div onde será a galeria 
    echo "<div class='col-md-3 col-sm-6 col-xs-12 item_box'>";        
        echo "<a href='#' target='_blank' data-toggle='modal' data-target='#$arrayb[0]' >";
            echo "<img class='img-responsive' src='{$pic_src}' alt='{$pic_text}' width='100%'>";
        echo "</a>";        
    echo "</div>";
    // Fim da div da galeria
?>

    <!-- Modal do Bootstrap -->

    <div id="<?php echo "$arrayb[0]"; ?>" class="modal fade bs-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div id="modal-responsive" class="modal-content text-center">
                
                    <?php
                        echo "<img id='img_insta' class='img-responsive' src='{$pic_src}' alt='{$pic_text}' id='img_insta' style='width:500xp;'>";
                        echo "<p class='text-xs-center'>$arrayc[0]</p>";
                        echo "<p><a href='{$pic_link}' target='_blank'>Ver essa foto no instagram</a></p>";
                    ?>
                
            </div>
        </div>
    </div>

    <!--Fim Modal do Bootstrap -->

<?php 
} // Fim do loop
?>

Ele vai ficar como no modelo de exemplo do link abaixo.

http://micheldeziderio.com.br/exemplos/galeria-instagram/
