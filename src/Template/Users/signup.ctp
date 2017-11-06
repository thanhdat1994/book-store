<div class="panel panel-info">
            <h4 class="panel-heading"><span class="glyphicon glyphicon-user"> Đăng ký</span></h4>
            <?php //echo $this->Flash->render('auth'); ?>
            <?php echo $this->element('errors'); ?>
                        <?php echo $this->Flash->render(); ?>
                        <?php echo $this->Form->create('User', ['class' => 'form-horizontal', 'novalidate' => true, 'inputDefaults' => ['label' => false]]); ?>
                                    <div class="control-group">
                                                <label class="control-label" for="inputLastName">Last Name</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('lastname', ['placeholder' => 'Họ']); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <label class="control-label" for="inputFirstName">First Name</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('firstname', ['placeholder' => 'Tên', 'type' => 'text']); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <label class="control-label" for="inputUserName">Username</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('username', ['placeholder' => 'Tên đăng nhập', 'type' => 'text']); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <label class="control-label" for="inputEmail">Email</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('email', ['placeholder' => 'Địa chỉ email', 'type' => 'text']); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <label class="control-label" for="inputPassword">Password</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('password', ['placeholder' => 'Mật khẩu', 'type' => 'password']); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <label class="control-label" for="inputConfirmPassword">Confirm Password</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('confirmPassword', ['placeholder' => 'Xác nhận mật khẩu', 'type' => 'password']); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <label class="control-label" for="inputAddress">Address</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('address', ['placeholder' => 'Địa chỉ', 'type' => 'text', 'error' => false]); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <label class="control-label" for="inputPhone">Phone</label>
                                                <div class="controls">
                                                            <?php echo $this->Form->input('phone', ['placeholder' => 'Số điện thoại', 'type' => 'number', 'error' => false]); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <div class="controls">
                                                            <?php echo $this->Form->input('agree', ['label' => false, 'type' => 'checkbox', 'div' => false, 'after' => '<label>Tôi đồng ý với các điều khoản đã đưa ra.</label>']); ?>
                                                </div>
                                    </div>
                                    <div class="control-group">
                                                <div class="controls">
                                                            <?php echo $this->Form->button('Đăng ký', ['type' => 'submit', 'class' => 'col-lg-2 btn btn-primary']); ?>
                                                </div>
                                    </div>
                        <?php echo $this->Form->end(); ?>
</div>
