<?php
include_once("data/dSoft.php");
include_once("stdafx.php");
?>
<?php
$softObj = new dSoft;
$query = "select count(id) from authors";
$count = $softObj->getDataListWithQuery($query);
$count = $count[0];
$count = $count['count(id)'];
for($i = 1; $i <= $count; ++$i)
{
    $query = "select author, title from authors where id = $i";
    $result = $softObj->getDataListWithQuery($query);
#var_dump($result);
    $result = $result[0];
    $author = $result['author'];
    $title = $result['title'];
    echo $author. "\n";
    echo $title. "\n";
    if(0 == substr_count($title, $author))
    {
        echo "exec";
        echo "\n";
#$query = "update authors set title = 'NULL' where id = $i";
        $result = $softObj->update("authors", array('id'=>$i), array('title'=>"NULL"));
    }
}
?>
