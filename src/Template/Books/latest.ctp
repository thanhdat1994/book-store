<div class="panel panel-default">
<h4 class="panel-heading"><i class="gylphicon glyphicon th">Sách mới</i>
<small class="sorts pull-fight">Sắp xếp theo
<?php echo $this->Paginator->sort('title','Sắp xếp theo tên sách'); ?>
<?php echo $this->Paginator->sort('created','Mới nhất/Cũ nhất'); ?>
</small></h4>
<?php echo $this->element('books',['books'=>$books]); ?>

<?php echo $this->element('pagination',['object'=>'quyển sách']); ?>
</div>