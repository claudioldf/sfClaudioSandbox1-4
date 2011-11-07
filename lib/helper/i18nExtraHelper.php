<?php

function image_tag_i18n($source, $options = array()){
    $culture = sfContext::getInstance()->getUser()->getCulture();

    return image_tag($culture . '/' . $source, $options);
}

?>
