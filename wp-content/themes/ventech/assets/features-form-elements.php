<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Form elements - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Form Elements for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu        = 'menu-features';   // To set active on the same id of primary menu ?>
<?php
// Specific Configuration for Page

?>

<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>


<section class="section section-header full-layout">
	<div class="height-xs-5 height-md-6" >
		<div class="parallax-bg bg-tech-key" data-parallax="-.6">
			<div class="content-title">
				<div class="container">
					<ul class="breadcrumb">
						<li>
							<a href="index.php">
								Home
							</a>
						</li>
						<li>
							<a href="features-typography.php">
								Features
							</a>
						</li>
						<li>
							<a href="features-form-elements.php">
								Forms
							</a>
						</li>
						<li class="active">
							Elements
						</li>
					</ul>
					<h1 class="title-text">
						Elements
					</h1>
				</div>
			</div>
		</div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>		
	</div>
</section>
<!-- .section -->

<section class="main-content bg-light-white full-layout">
	<div class="container">
		<div id="form-basic" class="row">
			<div class="col-sm-6">
				<div class="panel">
					<div class="panel-heading ">
						<h3 class="panel-title">
							<i class="fa fa-bar-chart-o text-primary mgr-10">
							</i>Input Basic
						</h3>
					</div>
					<div class="panel-body">
						<form action="#" class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Input
								</label>
								<div class="col-sm-7 controls">
									<input type="text" placeholder="" class="form-control">
									<span class="help-inline">
										Some hint here
									</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Input Large
								</label>
								<div class="col-sm-7 controls">
									<input type="text" placeholder="" class="form-control input-lg">
									<span class="help-inline">
										Some hint here
									</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Input XLarge
								</label>
								<div class="col-sm-7 controls">
									<input type="text" placeholder="" class="form-control input-xl">
									<span class="help-inline">
										Some hint here
									</span>
								</div>
							</div>                            
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Input Width 50%
								</label>
								<div class="col-sm-7 controls">
									<input type="text" class="form-control width-50" placeholder="">
									<span class="help-inline">
										Some hint here
									</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Input Minimal
								</label>
								<div class="col-sm-7 controls">
									<input type="text" class="form-control input-minimal" placeholder="">
									<span class="help-inline">
										Some hint here
									</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Disabled Input
								</label>
								<div class="col-sm-7 controls">
									<input type="text" placeholder="Disabled input here..." class="form-control" disabled="">
									<span class="help-inline">
										Some hint here
									</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Readonly Input
								</label>
								<div class="col-sm-7 controls">
									<input type="text" readonly="" placeholder="Readonly input here..." class="form-control">
									<span class="help-inline">
										Some hint here
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="panel">
					<div class="panel-heading ">
						<h2 class="panel-title">
							<i class="fa fa-edit text-primary mgr-10">
							</i>Text Area
						</h2>
					</div>
					<div class="panel-body">
						<form  action="#" class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Textarea Width 30%
								</label>
								<div class="col-sm-7 controls">
									<textarea class="form-control  width-30" rows="3">
									</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Textarea Width 70%
								</label>
								<div class="col-sm-7 controls">
									<textarea class="form-control  width-70" rows="3">
									</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Textarea
								</label>
								<div class="col-sm-7 controls">
									<textarea class="form-control" rows="3">
									</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Textarea Minimal
								</label>
								<div class="col-sm-7 controls">
									<textarea class="form-control input-minimal" rows="3">
									</textarea>
								</div>
							</div>                            
						</form>
					</div>
				</div>
				<div class="panel">
					<div class="panel-heading ">
						<h2 class="panel-title">
							<i class="fa fa-caret-square-o-down  text-primary mgr-10">
							</i>Dropdown
						</h2>
					</div>
					<div class="panel-body">
						<form  action="#" class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Dropdown
								</label>
								<div class="col-sm-7 controls">
									<select data-style="btn-success" data-rel="select" class="form-control">
										<option>
											Choice 1
										</option>
										<option>
											Choice 2
										</option>
										<option>
											Choice 3
										</option>
										<option>
											Choice 4
										</option>
										<option>
											Choice 5
										</option>
									</select>   
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Dropdown info
								</label>
								<div class="col-sm-7 controls">
									<select data-style="btn-info" data-rel="select" class="form-control">
										<option>
											Choice 1
										</option>
										<option>
											Choice 2
										</option>
										<option>
											Choice 3
										</option>
										<option>
											Choice 4
										</option>
										<option>
											Choice 5
										</option>
									</select>                                  
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Dropdown warning
								</label>
								<div class="col-sm-7 controls">
									<select data-style="btn-warning" data-rel="select" class="form-control">
										<option>
											Choice 1
										</option>
										<option>
											Choice 2
										</option>
										<option>
											Choice 3
										</option>
										<option>
											Choice 4
										</option>
										<option>
											Choice 5
										</option>
									</select>                                    
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Dropdown danger
								</label>
								<div class="col-sm-7 controls">
									<select data-style="btn-danger" data-rel="select" class="form-control">
										<option>
											Choice 1
										</option>
										<option>
											Choice 2
										</option>
										<option>
											Choice 3
										</option>
										<option>
											Choice 4
										</option>
										<option>
											Choice 5
										</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Dropdown Minimal
								</label>
								<div class="col-sm-7 controls">
									<select data-style="btn-default btn-line input-minimal form-control" data-rel="select" class="form-control">
										<option>
											Choice 1
										</option>
										<option>
											Choice 2
										</option>
										<option>
											Choice 3
										</option>
										<option>
											Choice 4
										</option>
										<option>
											Choice 5
										</option>
									</select>
								</div>
							</div>                            
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Dropdown Default Width 80%
								</label>
								<div class="col-sm-7 controls">
									<select data-rel="select" class="width-80">
										<option>
											Choice 1
										</option>
										<option>
											Choice 2
										</option>
										<option>
											Choice 3
										</option>
										<option>
											Choice 4
										</option>
										<option>
											Choice 5
										</option>
									</select>                                    
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Dropdown Lg
								</label>
								<div class="col-sm-7 controls">
									<select data-rel="select" data-style="btn-lg" class="width-80">
										<option>
											Choice 1
										</option>
										<option>
											Choice 2
										</option>
										<option>
											Choice 3
										</option>
										<option>
											Choice 4
										</option>
										<option>
											Choice 5
										</option>
									</select>                                    
								</div>
							</div>                            
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Multiple Dropdown
								</label>
								<div class="col-sm-7 controls">
									<select data-rel="select" multiple="" >
										<option>
											1
										</option>
										<option>
											2
										</option>
										<option>
											3
										</option>
										<option>
											4
										</option>
										<option>
											5
										</option>
									</select>                                   
								</div>
							</div>
						</form>
					</div>
				</div>                
			</div>
			<!-- col -->
			<div class="col-sm-6">
            
				<div class="panel">
					<div class="panel-heading ">
						<h2 class="panel-title">
							<i class="fa fa-bar-chart-o text-primary mgr-10">
							</i>Input Group
						</h2>
					</div>
					<div class="panel-body">
						<form  action="#" class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Prepend Input
								</label>
								<div class="col-sm-7 controls">
									<div class="input-group">
										<span class="input-group-addon">
											@
										</span>
										<input type="text" class="form-control" placeholder="Username">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Append Input
								</label>
								<div class="col-sm-7 controls">
									<div class="input-group">
										<input type="text" placeholder="Price" class="form-control">
										<span class="input-group-addon">
											.00
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Append and Prepend Input
								</label>
								<div class="col-sm-7 controls">
									<div class="input-group">
										<span class="input-group-addon">
											$
										</span>
										<input type="text" placeholder="Price" class="form-control">
										<span class="input-group-addon">
											.00
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Prepend Input Small
								</label>
								<div class="col-sm-7 controls">
									<div class="input-group input-group-sm">
										<span class="input-group-addon">
											@
										</span>
										<input type="text" class="form-control" placeholder="Username">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Append Input Large
								</label>
								<div class="col-sm-7 controls">
									<div class="input-group input-group-lg">
										<input type="text" placeholder="Price" class="form-control">
										<span class="input-group-addon">
											.00
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Color Variation
								</label>
								<div class="col-sm-7 controls">
									<div class="input-group">
										<span class="input-group-addon bg-info bd-info text-white">
											$
										</span>
										<input type="text" placeholder="Price" class="form-control">
										<span class="input-group-addon bg-success bd-success text-white">
											.00
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Input Group Minimal
								</label>
								<div class="col-sm-7 controls">
									<div class="input-group input-group-minimal">
										<input type="text" placeholder="Email" class="form-control input-minimal">
										<span class="input-group-btn pdl-10">
											<button data-button="submit" type="submit" class="btn btn-success">
												Go!
											</button>
										</span>
									</div>
								</div>
							</div>                            
						</form>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading ">
						<h2 class="panel-title">
							<i class="fa fa-bars text-primary mgr-10">
							</i>Radio Button &amp; Checkbox
						</h2>
					</div>
					<div class="panel-body">
						<form  action="#" class="form-horizontal">

							<div class="form-group">
								<label class="col-sm-4 control-label">
									Radio Buttons
								</label>
								<div class="col-sm-7 controls">
									<div class="radio radio-success">
										<input type="radio" id="yes" name="optionyes" value="yes">
										<label for="yes">
											Option one is this.
										</label>
									</div>
									<div class="radio radio-success">
										<input type="radio" id="no" name="optionyes" value="no" checked="checked">
										<label for="no">
											Option two can be something else.
										</label>
									</div>

								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Radio Info Color
								</label>
								<div class="col-sm-7 controls">
									<div class="radio radio-info">
										<input type="radio" id="radio-info" name="radio-info" value="no" checked="checked">
										<label for="radio-info">
											Radio Info
										</label>
									</div>

								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Radio Warning Color
								</label>
								<div class="col-sm-7 controls">
									<div class="radio radio-warning">
										<input type="radio" id="radio-warning" name="radio-warning" value="no" checked="checked">
										<label for="radio-warning">
											Radio Warning
										</label>
									</div>

								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Radio Danger Color
								</label>
								<div class="col-sm-7 controls">
									<div class="radio radio-danger">
										<input type="radio" id="radio-danger" name="radio-danger" value="no" checked="checked">
										<label for="radio-danger">
											Radio Danger
										</label>
									</div>

								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Radio Buttons Inline
								</label>
								<div class="col-sm-7 controls form-inline">
									<span class="radio radio-success">
										<input type="radio" checked="" value="option3" id="optionsRadios3" name="optionsRadios2">
										<label for="optionsRadios3">
											3
										</label>
									</span>
									<span class="radio radio-success">
										<input type="radio" value="option4" id="optionsRadios4" name="optionsRadios2">
										<label for="optionsRadios4">
											4
										</label>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Checkbox
								</label>
								<div class="col-sm-7 controls">
									<div class="checkbox checkbox-success">
										<input type="checkbox" id="checkbox-1" value="1">
										<label for="checkbox-1">
											Option one
										</label>
									</div>
									<div class="checkbox checkbox-info checkbox-done">
										<input type="checkbox" id="checkbox-2" value="1">
										<label for="checkbox-2">
											Checkbox Done will strip the text
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Checkbox Inline
								</label>
								<div class="col-sm-7 controls form-inline">
									<span class="checkbox checkbox-default">
										<input type="checkbox" id="checkbox-3" value="1">
										<label for="checkbox-3">
											1
										</label>
									</span>
									<span class="checkbox checkbox-success">
										<input type="checkbox" id="checkbox-4" value="2">
										<label for="checkbox-4">
											2
										</label>
									</span>
									<span class="checkbox checkbox-info">
										<input type="checkbox" id="checkbox-5" value="3">
										<label for="checkbox-5">
											3
										</label>
									</span>
									<span class="checkbox checkbox-warning">
										<input type="checkbox" id="checkbox-6" value="4">
										<label for="checkbox-6">
											4
										</label>
									</span>
									<span class="checkbox checkbox-danger">
										<input type="checkbox" id="checkbox-7" value="5">
										<label for="checkbox-7">
											5
										</label>
									</span>
								</div>
							</div>                           
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Checkbox Star
								</label>
								<div class="col-sm-7 controls form-inline">
									<span class="star star-default">
										<input type="checkbox" id="star-1" value="1">
										<label for="star-1">
										</label>
									</span>
									<span class="star star-success">
										<input type="checkbox" id="star-2" value="1">
										<label for="star-2">
										</label>
									</span>
									<span class="star star-info">
										<input type="checkbox" id="star-3" value="1">
										<label for="star-3">
										</label>
									</span>
									<span class="star star-warning">
										<input type="checkbox" id="star-4" value="1">
										<label for="star-4">
										</label>
									</span>
									<span class="star star-danger">
										<input type="checkbox" id="star-5" value="1">
										<label for="star-5">
										</label>
									</span>
								</div>
							</div>

						</form>
					</div>
					<!-- panel-body -->
				</div>
				<!-- panel -->
				<div class="panel">
					<div class="panel-heading ">
						<h2 class="panel-title">
							<i class="fa fa-bars text-primary mgr-10">
							</i>Shop Spinner
						</h2>
					</div>
					<div class="panel-body">
						<form  action="#" class="form-horizontal">

							<div class="form-group">
								<label class="col-sm-4 control-label">
									No Max
								</label>
								<div class="col-sm-7 controls">
									<input value="1"  name="spin-1" data-rel="spinner">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Max 10 with Disabled Edit
								</label>
								<div class="col-sm-7 controls">
									<input value="1"  name="spin-2" data-rel="spinner" data-max="10"  disabled>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									Max 100 
								</label>
								<div class="col-sm-7 controls">
									<input value="1"  name="spin-3" data-rel="spinner" data-max="100">
								</div>
							</div>                            

						</form>
					</div>
					<!-- panel-body -->
				</div>
				<!-- panel -->

				<div class="panel">
					<div class="panel-heading ">
						<h2 class="panel-title">
							<i class="fa fa-list-alt  text-primary mgr-10">
							</i>Radio Accordion
						</h2>
					</div>                
					<div class="panel-body">
						<div class="panel-group" id="payment-group" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default panel-primary">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a class="show" role="button"  href="#collapseOne" data-radio-accordion="#payment-group" data-radio-id="#radio-cod">
											Cash on Delivery
											<i class="check-accordion lnr lnr-checkmark-circle pull-right">
											</i>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" >
									<div class="panel-body">
										<input type="radio" checked="checked" value="COD" name="radio-payment" id="radio-cod" class="hidden">
										Your items are eligible to use Cash on Delivery Shipping. You can pay with cash or debit card. Our delivery person will provide you with the debit machine.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading"  id="headingTwo">
									<h4 class="panel-title">
										<a class="show collapsed"  href="#collapseTwo"  data-radio-accordion="#payment-group"  data-radio-id="#radio-transfer">
											Direct Bank Transfer
											<i class="check-accordion lnr lnr-checkmark-circle pull-right hidden">
											</i>                                    
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<input type="radio" value="Bank Transfer" name="radio-payment" id="radio-transfer" class="hidden">
										<p>
											Please transfer the payment to:
										</p>
										<ul class="clean-list">
											<li>
												Acc Name:
												<b>
													Guardian Angel
												</b>
											</li>
											<li>
												Acc No:
												<b>
													8212391204293
												</b>
											</li>
										</ul>
										<p>
											Then send email to
											<a href="#">
												billing@ventech.com
											</a>for payment confirmation.
										</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="show collapsed" href="#collapseThree"  data-radio-accordion="#payment-group"  data-radio-id="#radio-credit">
											Credit Card
											<i class="check-accordion lnr lnr-checkmark-circle pull-right hidden">
											</i>                                    
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<input type="radio" value="Credit Card" name="radio-payment" id="radio-credit" class="hidden">
										<p>
											Provide the following information:
										</p>
										<form class="form-horizontal" action="#">
											<div class="form-group">
												<div class="col-sm-12 controls">
													<label class="control-label font-normal font-xs-2">
														Card Number:
													</label>
													<input type="text" class="form-control input-minimal" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12 controls">
													<label class="control-label font-normal font-xs-2">
														Card Name:
													</label>
													<input type="text" class="form-control input-minimal" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-6 controls">
													<label class="control-label font-normal font-xs-2">
														Expiry Date:
													</label>
													<div class="row">
														<div class="col-xs-4">
															<input type="text" class="form-control input-minimal width-xs-1 mgr-10" placeholder="mm">
														</div>
														<div class="col-xs-4">
															<input type="text" class="form-control input-minimal width-xs-1" placeholder="yy">
														</div>
													</div>
												</div>
												<div class="col-sm-6 controls">
													<label class="control-label font-normal font-xs-2">
														CVV:
													</label>
													<input type="text" class="form-control input-minimal width-xs-1 mgr-10" placeholder="">
												</div>

											</div>
										</form>
									</div>
								</div>
								<!-- panel -->
							</div>
							<!-- panel panel-default -->                        
						</div>
						<!-- panel-group -->
					</div>
					<!-- panel-body -->                    
				</div>
				<!-- panel -->
                
			</div>
			<!-- col-md-6 -->

		</div>
		<!-- row -->

	</div>
	<!-- container -->
</section>
<!-- .main-content -->


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>