<?php foreach($books as $book): ?>
<li class="span3">
	<div class="thumbnail">		
		<?php echo $this->Html->image($book['image'],['class'=>'img img-responsive', 'style'=>'width:200px;height:200px;']); ?>
		<div class="caption">
			<div class="latest-product-name">
				<h4><span><?php echo $this->Html->link($book['title'],'/'.$book['slug']); ?></span></h4>
			</div>
			<div class="writer">
				<h5><?php echo "Tác giả: ";
				foreach ($book['writers'] as $writer) {
					echo $this->Html->link($writer['name'],'/tac-gia/'.$writer['slug'])."&nbsp;&nbsp;";
				}  ?></h5>
			</div>
			<h5><span>
				<?php echo $this->Number->format($book['sale_price'],['places'=> 0,'after'=>'VNĐ']); ?></span>
			<a class="btn btn-primary" href="#">Thêm vào <i class="icon-shopping-cart"></i></a></h5>

		</div>
	
	</div>
	
</li>
<?php endforeach; ?>


<!-- fail 05/10-->
<!-- <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
									<ul class="thumbnails">
									<?php foreach($books as $book): ?>
									    <li class="span3">
										    <div class="thumbnail">
											    <i class="tag"></i>
											    <a href="#"><?php echo $this->Html->image($book['image'],['class'=>'img img-responsive', 'style'=>'width:200px;height:200px;']); ?></a>
											    <div class="caption">
												    <div class="product-name">
												    	<p><h5><span><?php echo $this->Html->link($book['title'],'/'.$book['slug']); ?></span></h5></p>
												    </div>
												    <div>
												    	<h5>
												    		<?php echo "Tác giả: ";
												    		foreach ($book['writers'] as $writer) {
															echo $this->Html->link($writer['name'],'/tac-gia/'.$writer['slug'])."&nbsp;&nbsp;";
															}  ?>
														</h5>
													</div>
											    	<h4><span><?php echo $this->Number->format($book['sale_price'],['places'=> 0,'after'=>'VNĐ']); ?></span></h4>
											    </div>
										    </div>
									    </li>
									<?php endforeach; ?>
									</ul>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>    -->