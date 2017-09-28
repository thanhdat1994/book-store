<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
  */
?>
<h4 style="margin-left: 20px;">Sách mới nhất <small><?php echo $this->Html->link('Xem tất cả ->', '/sach-moi',['class'=>'pull-right']); ?></small></h4>
<?php echo $this->element('books',['books'=>$books]) ?>

<?php //echo $this->element('menu_categories') ?>