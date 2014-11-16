<?php
/**
 * Created by PhpStorm.
 * User: edev
 * Date: 15-Nov-14
 * Time: 8:42 PM
 */
?>
<ul>
<li><?php echo CHtml::link('Создать новую запись',array('post/create')); ?></li>
<li><?php echo CHtml::link('Управление записями',array('post/admin')); ?></li>
<li><?php echo CHtml::link('Одобрение комментариев',array('comment/index'))
        . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
<li><?php echo CHtml::link('Выход',array('site/logout')); ?></li>
</ul>