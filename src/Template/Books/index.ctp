<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
  */
?>

<div class="well well-small">
	<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
	<div class="row-fluid">
		<div id="featured" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<ul class="thumbnails">
						<?php foreach($books as $book): ?>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>		
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
					</ul>
				</div>
			</div>
		</div>
	</div>
	<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>		

<?php echo $this->element('books',['books'=>$books]) ?>

</div>
