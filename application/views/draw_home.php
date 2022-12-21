<?php $this->load->view("layout/header"); ?>

<div id="main">
	<div class="container-fluid section-draw">
		<div class="container col-sm-offset-2	col-sm-8 col-md-offset-3 col-md-6">
			<div id="draw">
        <div class="copy">
  				<h1>Draw it Now</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="join-form">
				<?php echo form_open(); ?>
        <?php echo form_hidden('limit','5'); ?>
        <div class="submit">
				<p>
					<?php echo form_submit('submit', 'Submit', 'class="button black" '); ?>
				</p>
        </div>
				<?php echo form_close(); ?>
      </div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view("layout/footer"); ?>
