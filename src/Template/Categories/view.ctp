<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Category $category
  */
?>

<div class="panel panel-default" style="width: 872px;">
    <div class="related">
        <h4 class="panel-heading"><?php echo $category['name'];?> <i class="fa fa-server"></i></h4>
        <?php if (!empty($books)): ?>
            <?php echo $this->element('books',['books'=>$books]); ?>
            <?php echo $this->element('pagination',['object'=>'quyển sách']); ?>
        <?php endif; ?>
    </div>
</div>
