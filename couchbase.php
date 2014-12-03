<?php
$cluster = new CouchbaseCluster('http://54.228.168.130:8091');
$bucket = $cluster->openBucket('beer-sample');

// Store a document

$doc = array(
    'name' => 'Norbeert',
    'comment' => 'Random beer from Norway'
);

$result = $bucket->replace('aass_brewery-juleol', $doc);
var_dump($result);


// Retrieve

$result = $bucket->get('aass_brewery-juleol');
var_dump($result);

