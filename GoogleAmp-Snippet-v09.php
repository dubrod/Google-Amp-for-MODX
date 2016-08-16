<?php
/* GoogleAmp Version 0.0.9
*  Created Wayne Roddy ( wayne@modx.com )
*  August 2016
*/

$get = modX::sanitize($_GET, $modx->sanitizePatterns);
$alias = urldecode($get['page']);

$resource = $modx->getObject('modResource', array('alias'=>$alias,'class_key'=>'modDocument'));

if ($resource) {
    $modx->setPlaceholders(array(
        'ptitle' => $resource->get('pagetitle'),
        'content' => $resource->get('content'),
        'canonical' => $modx->makeUrl($resource->get('id'),'','','full'),
        'published' => $resource->get('publishedon')
    ),'amp_');
}
