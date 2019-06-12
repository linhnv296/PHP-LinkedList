<?php
include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(55);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo "<br>";
echo implode ('-' , $linkData);
var_dump($linkData);
print_r($linkedList);
