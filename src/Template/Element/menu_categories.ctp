
<?php
	//$categories = $this->requestAction(['controller'=>'categories','action'=>'menu']);
	//debug($categories);
?>
<div class="col-sm-12">
	<?php foreach ($categories as $category): ?>
		<!--category-productsr-->		
		<?php echo $this->Html->link($category['name'], '/danh-muc/'.$category['slug']).'<br>' ?>			
	<?php endforeach ?>
</div>
							