<?php
// load oxid framework
require_once(dirname(__FILE__). "/../../../../bootstrap.php");
$result = \OxidCommunity\Elasticsearch\Application\Controller\Admin\ElasticsearchCron::RecreateArticleIndex();
if ($result == '1') {
    echo 'Done';
} else {
    echo 'Something went wrong';
}
