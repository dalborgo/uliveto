<?php
function getImg($nome, $filter, $verso = 'q', $span=4, $right=false)
{
    $folder = 'galleria-test';
    $dir=($right)?'single-r-gallery':'';
    $item = '<div class="single-gallery ' . $dir . ' anim-5-all ' . $filter . ' mix span-' . $span . '">
    <a rel="help" data-imagelightbox="g" href="images/' . $folder . '/' . $nome . '.jpg">
                        <div class="img-holder">
                            <img src="images/' . $folder . '/' . $verso . $nome . '_tn.jpg" alt="">
                        </div>
                    </a>
                    </div>';
    return $item;
}

?>
