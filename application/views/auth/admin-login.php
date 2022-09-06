<div class="container ">	
			<br />
			<div class="col-md-3"></div>
			<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="panel panel-default login">
			<?= $this->session->flashdata('message');?>
				<div class="panel-body">
					<form action="<?=base_url("admin-login");?>" method="POST">
											<br/>
						<div class="form-group">
							<label> EMAIL</label>
							<input type="email" name="email" class="form-control input-lg" value="<?php echo set_value('email');?>" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
						<div class="form-group">
							<label> PASSWORD</label>
							<input type="password" name="password" class="form-control input-lg" value="" />
							<span class="text-danger"><?php echo form_error('password');?></span>
							<br/><br/>
							<span class="help-block">Forgot your password?<a href='#'>
							Click here</a></span>
							<div class="checkbox">
									<label class="control-label" for="remember">
										<input type="checkbox" name="remember" id="remember">Remember me
									</label>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="input-lg btn btn btn-primary btn-lg btn-block">SIGN IN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
</div>
