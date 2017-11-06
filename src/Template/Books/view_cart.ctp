<?php 
	$session = $this->request->session();
?>
<script type="text/javascript">

	/* Update product variant quantity in cart
	  ============================================================ */
	  function updateQuantity(fn, variantId) {
	    var quantity;
	    var cartLineItem = findCartItemByVariantId(variantId);
	    if (cartLineItem) {
	      quantity = fn(cartLineItem.quantity);
	      updateVariantInCart(cartLineItem, quantity);
	    }
	  }
</script>
	<!-- $cart = $session->read('cart'); -->
<div class="panel panel-default" style="width: 872px;">
<h4 class="panel-heading">
	 <i class="fa fa-shopping-cart"></i> Chi tiết Giỏ hàng
</h4>
<div>
	<?php if ($session->check('cart')): ?>
		<?php $cart = $session->read('cart'); ?>
		<?php $payment = $session->read('payment.total');
			$discount = $session->read('payment.discount');
			$pay = $payment - ($payment * $discount/ 100);
			
		 ?>
		<?php $stt = 1; ?>
		<!-- Hiển thị chi tiết giỏ hàng -->
		<div class="thumbnail">
			<div class="row">
				<!-- table -->
				<div>
					<table class="table table-hover table-striped body-table">
						<tbody class="body-table">
							<tr>
								<th>STT</th>
								<th>Tên Sách</th>
								<th> Số Lượng</th>
								<th>Đơn Giá</th>
								<th>Thành Tiền</th>
								<th>Xóa</th>
							</tr>
							<?php foreach ($cart as $book): ?>
								<tr>
									<td>
										<?php
										echo $stt++; ?>
									</td>
									<td>
										<?php echo $this->Html->link($book['title'],'/'.$book['slug']); ?>
									</td>
									<td>
										<?php echo $this->Form->create('Books',['class'=>"form-inline"]); ?>
										<?php echo $this->Form->input('quantity',['value'=>$book['quantity'], 'class'=>'col col-lg-2','label'=>false,'div'=>false]); ?>
										<?php echo $this->Form->button('Cập nhật',['type'=>"submit", 'conclick'=>"updateQuantity();"]); ?>
										<?php echo $this->Form->end();  ?>
									</td>
									<td>
										<?php echo $this->Number->format($book['sale_price'],['places'=>0,'after'=>' VNĐ']); ?>
									</td>
									<td>
										<?php echo $this->Number->format($book['sale_price']*$book['quantity'],['places'=>0,'after'=>' VNĐ']); ?>
									</td>
									<td>
										<?php echo $this->Form->postLink('<span class="fa fa-times"></span></a>','/books/delete_sp/'.$book['id'],['escape'=>false]); ?>
									</td>
								</tr>
							<?php endforeach ?>
							<tr>
								<td colspan="4">
									<p>Tổng tiền:</p>
								</td>
								<td colspan="2"><strong>
									<?php echo $this->Number->format($payment,['places'=>0,'after'=>' VNĐ']); ?>
								</strong></td>
							</tr>
							<tr>
								<?php if ($session->check('payment.coupon')): ?>
									<td colspan="4">
										<p>Đã giảm: (Coupon <?php echo $session->read('payment.coupon'); ?> - giảm <?php echo $session->read('payment.discount'); ?> %)</p>
									</td>
									<td colspan="2"><strong>
										<?php 
											echo $this->Number->format($payment * $discount / 100,['places'=>0,'after'=>' VNĐ']); 
										?>
									</strong></td>
								<?php else: ?>
									<td colspan="4">
										<p>Đã giảm:</p>
									</td>
									<td colspan="2"><strong>
										0 VNĐ
									</strong></td>
								<?php endif ?>
							</tr>
							<tr>
								<td colspan="4">
									<p>Thành tiền:</p>
								</td>
								<td colspan="2"><span class = "label label-danger">
									<?php 
										echo $this->Number->format($pay ,['places'=>0,'after'=>' VNĐ']); ?>
								</span></td>
							</tr>
						</tbody>
					</table>
					<div class="cart_link">
						<?php echo $this->Form->postLink('Làm rỗng giỏ hàng','/books/empty_cart',['class'=>"btn btn-primary",'style'=>"float:left; margin-left:150px;"]); ?>
						<?php echo $this->Html->link('Tiếp tục mua hàng','/',['class'=>"btn btn-primary",'style'=>'margin-left:150px;']); ?>
						
					</div>
				</div>

			</div>
		</div>
		<!-- coupon -->
		<div class="panel panel-success col col-lg-4" style="margin-top:10px;">
			<h4 class='panel-heading'><i class="fa fa-barcode"></i>&nbsp; &nbsp; Mã giảm giá</h4>
				<?php echo $this->Flash->render('coupons'); ?>
				<?php if ($session->check('payment.coupon')): ?>
				<?php pr($session->read('payment.coupon')); ?>
					 Bạn đã nhập mã giảm giá!
					<?php else: ?>
						<?php echo $this->Form->create('Coupons',['url'=>['controller'=>'coupons','action'=>'add'],'class'=>"form-inline"]); ?>
						<?php echo $this->Form->input('code',['class'=>'input text','placeholder'=>"Nhập mã giảm giá",'label'=>false,'div'=>false]); ?>
						<?php echo $this->Form->button('Nhập',['type'=>"submit",'class'=>"btn btn-primary"]); ?>
						<?php $session->write('payment.coupon','code'); ?>
						<?php echo $this->Form->end(); ?>
						<h4>Ghi chú</h4>
						<ul>
							<li>Mỗi mã giảm giá khác nhau và chỉ dùng trong khoảng thời gian quy định.</li>
							<li>Chỉ dùng 1 mã giảm giá khi thanh toán đơn hàng.</li>
							<li>Số tiền giảm giá dựa trên % giảm giá * tổng giá trị của đơn hàng.</li>
						</ul>
				<?php endif ?>
		</div>
		<!-- order -->
		<div class="panel panel-success col col-lg-7" style="margin-top:10px; float:right;">
			<h4 class='panel-heading'><i class="fa fa-user"></i>&nbsp; &nbsp; Thông tin đặt hàng</h4>
			<?php if (true): ?>
				<?php echo $this->Form->create('Orders',['url'=>['controller'=>'orders','action'=>'checkout'], 'class'=>'form-horizontal']); ?>
					 <div class="col col-lg-10">
					 	<?php echo $this->Form->input('name',['placeholder'=>"Nhập tên",'label'=>"Tên: ",'value'=>"TranLong"]); ?>
					 </div>
					 <div class="col col-lg-10">
					 	<?php echo $this->Form->input('email',['placeholder'=>"Nhập email",'value'=>"long.tv@bookstore.com"]); ?>
					 </div>
					 <div class="col col-lg-10">
					 	<?php echo $this->Form->input('address',['placeholder'=>"Nhập địa chỉ",'label'=>"Địa chỉ: ",'value'=>"31 Vo Truong Toan"]); ?>
					 </div>
					 <div class="col col-lg-10">
					 	<?php echo $this->Form->input('phone',['placeholder'=>"Nhập số diện thoại",'label'=>"Số điện thoại: ",'value'=>"01684669005"]); ?>
					 </div>
					<div class="row">
						<?php echo $this->Html->link('Đặt hàng','/orders/checkout',['class'=>"btn btn-primary", 'style'=>"float:right; margin-right:80px;"]); ?>
					</div>
				<?php echo $this->Form->end(); ?>
			<?php else: ?>
				Bạn phải đăng nhập trước khi đặt hàng!
			<?php endif ?>
			
		</div>
	<?php else: ?>
		<?php $session->delete('payment.coupon') ?>
	<div class="thumbnail">
		<h5> &nbsp; &nbsp; &nbsp;Chưa có sản phẩm nào trong giỏ hàng! Vui lòng thêm sản phẩm trước khi xem chi tiết giỏ hàng!</h5>
			<p><?php echo $this->Html->link('Về trang chủ','/',['class'=>"btn btn-primary"]); ?></p>
	</div>
	<?php endif ?>
</div>
</div>