<?php

foreach ($obj['data'] as $post) {
    
    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
    
    echo "<div class='md-inner-slick'>";      

        echo "<a href='{$pic_link}' target='_blank' >";
            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}' width='100%'>";
        echo "</a>";
        
    echo "</div>";
}
?>