<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>


<h1>Главная страница</h1>

<?php
$this->menu=array(
array('label'=>'Create Post', 'url'=>array('create')),
array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

