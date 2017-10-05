
<div class="paginator">
    <ul class="pagination" style="list-style-type: none; display:inline-block;">
        <?= $this->Paginator->first('<< ' . __('Đầu')) ?>
        <?= $this->Paginator->prev('< ' . __('Quay lại')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('Kế tiếp') . ' >') ?>
        <?= $this->Paginator->last(__('Cuối') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Trang {{page}}/{{pages}}, hiển thị {{current}} '.$object.' trong tổng số {{count}} '.$object)]) ?></p>
</div> 

<!-- Long sửa lại 05/10 video 24c-->
<!-- <div class="paginator">
	<ul class='pagination'>
		<?php echo $this->Paginator->prev('<<', ['tag'=> 'li'], '<<',['tag'=>'li','disablebTag'=>'a', 'class'=>'disabled']); ?>
		<?php echo $this->Paginator->numbers(['separator'=>' ','tag'=>'li','currentClass'=>'active','currentTag'=>'a']); ?>
		<?php echo $this->Paginator->next('>>', ['tag'=> 'li'], '>>',['tag'=>'li','disablebTag'=>'a', 'class'=>'disabled']); ?>
	</ul>
	<p><?= $this->Paginator->counter(['format' => __('Trang {{page}}/{{pages}}, hiển thị {{current}} '.$object.' trong tổng số {{count}} '.$object)]) ?></p>
</div> -->
<!--end-->