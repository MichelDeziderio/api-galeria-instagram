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