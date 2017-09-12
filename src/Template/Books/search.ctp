<?php echo $this->Form->create('Books'); ?>
<?php echo $this->Form->input('keyword',['label'=>'','placeholder'=>'Gõ vào từ khóa để tìm kiếm...']); ?>
<?php echo $this->Form->unlockField('Search'); ?>
<!-- Hiền thị kết quả -->
<?php if ($notfound == false && isset($result)): ?>
	<?php echo $this->element('books',['books'=>$result]); ?>
<?php elseif($notfound): ?>
	Không tìm thấy quyển sách này!
<?php endif ?>
