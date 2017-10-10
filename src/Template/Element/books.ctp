<div class="thumbnails">
<?php foreach($books as $book): ?>
<li class="span3">
	<div class="thumbnail">		
		<?php echo $this->Html->image($book['image'],['class'=>'img img-responsive', 'style'=>'width:200px;height:200px;']); ?>
		<div class="caption">
			<div class="latest-product-name">
				<h4><span><?php echo $this->Html->link($book['title'],'/'.$book['slug']); ?></span></h4>
			</div>
			<div class="writer">
				<h5><?php
				foreach ($book['writers'] as $writer) {
					echo $this->Html->link($writer['name'],'/tac-gia/'.$writer['slug'])."&nbsp;&nbsp;";
				}  ?></h5>				
			</div>
			<h5><span>Giá: <?php echo $this->Number->format($book['sale_price'],['places'=> 0,'after'=>'VNĐ']); ?></h5>
			<span><a class="btn btn-primary" href="#">Thêm vào <i class="icon-shopping-cart"></i></a></span>
		</div>
	
	</div>
	
</li>
<?php endforeach; ?>
</div>
