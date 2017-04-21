<?php
function getImg($nome,$t='q')
{
    $item = '<a rel="help" data-imagelightbox="g" href="images/galleria/' . $nome . '.jpg">
                        <div class="img-holder">
                            <img src="images/galleria/' . $t.$nome . '_tn.jpg" alt="">
                        </div>
                    </a>';
    return $item;
}

?>
