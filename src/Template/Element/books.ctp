<?php foreach($books as $book): ?>
<li class="span3">
	<div class="thumbnail">		
		<?php echo $this->Html->image($book['image'],['class'=>'img img-responsive', 'style'=>'width:200px;height:200px;']); ?>
		<div class="caption">
			<h5><?php echo $this->Html->link($book['title'],'/'.$book['slug']); ?></h5>
			<?php echo 'Tác giả: ';
			foreach ($book['writers'] as $writer) {
				echo $this->Html->link($writer['name'],'/tac-gia/'.$writer['slug']); echo "<br>";
			}  ?>					
			Giá bán: <?php echo $this->Number->format($book['sale_price'],['places'=> 0,'after'=>' VNĐ']); ?>
			<a class="btn btn-primary" href="#">Thêm vào <i class="icon-shopping-cart"></i></a>
		</div>
	
	</div>
</li>
<?php endforeach; ?>