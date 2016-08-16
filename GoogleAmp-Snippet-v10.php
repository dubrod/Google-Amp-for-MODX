<?php
/* GoogleAmp Version 0.1.0
*  Created Wayne Roddy ( wayne@modx.com )
*  August 2016
*/

$site_url = MODX_SITE_URL;
$base_url = MODX_BASE_PATH;
$get = modX::sanitize($_GET, $modx->sanitizePatterns);
$alias = urldecode($get['page']);

$resource = $modx->getObject('modResource', array('alias'=>$alias,'class_key'=>'modDocument'));

if ($resource) {
    
    //Get Image from TV "page_img"
    $image = $resource->getTVValue('page_img');
    $image_url = "".$site_url."".$image."";
    $image_base = "".$base_url."".$image."";
    list($width, $height) = getimagesize($image_base);
    
    $modx->setPlaceholders(array(
        'ptitle' => $resource->get('pagetitle'),
        'content' => $resource->get('content'),
        'canonical' => $modx->makeUrl($resource->get('id'),'','','full'),
        'published' => $resource->get('publishedon'),
        'edited' => $resource->get('editedon'),
        'image' => $image_url,
        'image_width' => $width,
        'image_height' => $height
    ),'amp_');
}
