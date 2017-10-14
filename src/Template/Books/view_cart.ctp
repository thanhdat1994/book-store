<?php 
	$session = $this->request->session();
?>

	<!-- $cart = $session->read('cart'); -->
<div class="panel panel-default" style="width: 872px;">
<h4 class="panel-heading">
	 <i class="fa fa-shopping-cart"></i> Chi tiết Giỏ hàng
</h4>
<div>
	<?php if ($session->check('cart')): ?>
		<?php $cart = $session->read('cart'); ?>
		<?php $payment = $session->read('payment.total'); ?>
		<?php $stt = 0; ?>
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
										<?php $stt+=1;
										echo $stt; ?>
									</td>
									<td>
										<?php echo $this->Html->link($book['title'],'/'.$book['slug']); ?>
									</td>
									<td>
										<?php echo $this->Number->format($book['quantity']);  ?>
									</td>
									<td>
										<?php echo $this->Number->format($book['sale_price'],['places'=>0,'after'=>' VNĐ']); ?>
									</td>
									<td>
										<?php echo $this->Number->format($book['sale_price']*$book['quantity'],['places'=>0,'after'=>' VNĐ']); ?>
									</td>
									<td>
										<a href="#"><span class="fa fa-times"></span></a>
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
								<td colspan="4">
									<p>Thuế VAT (10%)</p>
								</td>
								<td colspan="2"><strong>
									<?php 
										$vat = $payment * 10 / 100; 
										echo $this->Number->format($vat,['places'=>0,'after'=>' VNĐ']); ?>
								</strong></td>
							</tr>
							<tr>
								<td colspan="4">
									<p>Thành tiền:</p>
								</td>
								<td colspan="2"><span class = "label label-danger">
									<?php 
										$thanhtien = $payment + $vat;
										echo $this->Number->format($thanhtien,['places'=>0,'after'=>' VNĐ']); ?>
								</span></td>
							</tr>
						</tbody>
					</table>
					<div>
						<p style="float:right; margin-right:80px;"><?php echo $this->Html->link('Đặt hàng','/#',['class'=>"btn btn-primary"]); ?></p>
						<p><?php echo $this->Html->link('Về trang chủ','/',['class'=>"btn btn-primary"]); ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php else: ?>
	<div class="thumbnail">
		<h5> &nbsp; &nbsp; &nbsp;Chưa có sản phẩm nào trong giỏ hàng! Vui lòng thêm sản phẩm trước khi xem chi tiết giỏ hàng!</h5>
			<p><?php echo $this->Html->link('Về trang chủ','/',['class'=>"btn btn-primary"]); ?></p>
	</div>
	<?php endif ?>
</div>
</div>