<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<!--<div data-src="assets/images/slide.jpg">-->
				<div data-src="<?php echo site_url('assets/images/slide.jpg'); ?>" alt=" ">
					<div class="caption fadeIn">
						<h2>LONDON</h2>
						<div class="price">
							FROM
							<span>$350</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div>
					<div data-src="<?php echo site_url('assets/images/slide1.jpg'); ?>" alt=" ">
					<!--data-src="images/slide1.jpg"-->
					<div class="caption fadeIn">
						<h2>Maldives</h2>
						<div class="price">
							FROM
							<span>$230</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<!--<div data-src="images/slide2.jpg">-->
				<div data-src="<?php echo site_url('assets/images/slide2.jpg'); ?>" alt=" ">
					<div class="caption fadeIn">
						<h2>Venice</h2>
						<div class="price">
							FROM
							<span>$420</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="prefix_3">
				<div class="grid_6">
					<h3>book your flight.</h3>
						<?php $data = array('id'=>'bookingForm');
						echo form_open('Login/create_booking', $data); ?>
						<div class="fl1">
							<div class="tmInput">
							<?php $data = array('name'=>'origin', 'id'=>'origin');?>
							<select name="origin" class="tmSel auto" data-class="tmSel tmSel2" data-constraints="">
								<option>Origin</option>
								<option value="Amsterdam">Amsterdam</option>
								<option value="Beijing">Beijing</option>
								<option value="Cairo">Cairo</option>
								<option value="Cape Town">Cape Town</option>
								<option value="Dubai">Dubai</option>
								<option value="Kiev">Kiev</option>
								<option value="Kuala Lumpur">Kuala Lumpur</option>
								<option value="London">London</option>
								<option value="Paris">Paris</option>
								<option value="Madrid">Madrid</option>
								<option value="Moscow">Moscow</option>
								<option value="New York">New York</option>
								<option value="Sydney">Sydney</option>
								<option value="Tokyo">Tokyo</option>
							</select>
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput mr0">
							<?php $data = array('name'=>'destination', 'id'=>'destination');?>
							<select name="destination" class="tmSel auto" data-class="tmSel tmSel2" data-constraints="">
								<option>Destination</option>
								<option value="Amsterdam">Amsterdam</option>
								<option value="Beijing">Beijing</option>
								<option value="Cairo">Cairo</option>
								<option value="Cape Town">Cape Town</option>
								<option value="Dubai">Dubai</option>
								<option value="Kiev">Kiev</option>
								<option value="Kuala Lumpur">Kuala Lumpur</option>
								<option value="London">London</option>
								<option value="Paris">Paris</option>
								<option value="Madrid">Madrid</option>
								<option value="Moscow">Moscow</option>
								<option value="New York">New York</option>
								<option value="Sydney">Sydney</option>
								<option value="Tokyo">Tokyo</option>
							</select>
							</div>
						</div>
						<div class="clear"></div>
						<div class="fl1">
							<div class="tmInput">
								<?php $data = array('name'=>'d_date', 'id'=>'d_date', 'placeHolder'=>'Depart Date');
								echo form_input($data);?>
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<?php $data = array('name'=>'r_date', 'id'=>'r_date', 'placeHolder'=>'Return Date');
								echo form_input($data);?>
							</div>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<?php $data = array('name'=>'adults', 'id'=>'adults');?>
							<select name="adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option value="1">1</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							<div class="clear"></div>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<?php $data = array('name'=>'children', 'id'=>'children');?>
							<select name="children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option value="0">0</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
						<div class="clear"></div>
							<div class="fl5">
							<div class="tmInput">
							<?php $data = array('name'=>'email', 'id'=>'email', 'placeHolder'=>'Input Email To Confirm');
							echo form_input($data);?>
							</div>
						</div>
						<div class="clear"></div>
						<?php $data = array('name'=>'book','value'=>'Book','class'=>'btn');
						echo form_submit($data); ?>
					<?php echo form_close(); ?>
						
				</div>
				</div>
				</div>
			</div>
		</div>

		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<!--<img src="images/ban_img1.jpg" alt="">-->
						<img src="<?php echo site_url('assets/images/ban_img1.jpg'); ?>" alt="">
						<div class="label">
							<div class="title">Barcelona</div>
							<div class="price">FROM<span>$ 423</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<!--<img src="images/ban_img2.jpg" alt="">-->
						<img src="<?php echo site_url('assets/images/ban_img2.jpg'); ?>" alt="">
						<div class="label">
							<div class="title">GOA</div>
							<div class="price">FROM<span>$ 300</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<!--<img src="images/ban_img3.jpg" alt="">-->
						<img src="<?php echo site_url('assets/images/ban_img3.jpg'); ?>" alt="">
						<div class="label">
							<div class="title">PARIS</div>
							<div class="price">FROM<span>$ 600</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>

				
<!--==============================footer=================================-->
