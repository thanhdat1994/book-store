<?php
	$session=$this->request->session();
 ?>
 <?php if ($session->check('cart')): ?>
 <?php $cart = $session->read('cart'); ?>
 	<ul id="sideManu" class="nav nav-tabs nav-stacked panel panel-default">
	     <h4 style="margin-left: 10px;"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Giỏ hàng</h4>
		 <?php foreach ($cart as $book): ?>
		    <?php //echo $this->element('menu_categories'); ?>
			<li><a href="danh-muc/ki-nang-song"></a></li>
		
		 <?php endforeach ?>
	 </ul>
<?php else: ?>
	Không có sản phẩm trong giỏ hàng!
<?php endif ?>