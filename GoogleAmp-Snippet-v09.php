<?php
/* GoogleAmp Version 0.0.9
*  Created Wayne Roddy ( wayne@modx.com )
*  August 2016
*/

$get = modX::sanitize($_GET, $modx->sanitizePatterns);
$alias = urldecode($get['page']);

$resources = $modx->getCollection('modResource', array('alias'=>$alias,'class_key'=>'modDocument'));

foreach($resources as $resource) {
    $id = $resource->get('id');
    $ptitle = $resource->get('pagetitle');
    $content = $resource->get('content');
    $published = $resource->get('publishedon');
    $canonical = $modx->makeUrl($id,'','','full');
    
    $modx->setPlaceholders(array(
        'ptitle' => $ptitle,
        'content' => $content,
        'canonical' => $canonical,
        'published' => $published
    ),'amp_');
}
