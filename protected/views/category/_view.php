<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('posts')); ?>:</b>

    <?php foreach ($data->posts as $post){
    echo CHtml::link(CHtml::encode($post->title), array('post/view','id'=>$post->id));
    echo '</br>';
    }
    ?>
    <br />


</div>