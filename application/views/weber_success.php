<?php $this->load->view("layout/header"); ?>

<div id="main">
	<div class="container">
		<div class="col-sm-offset-2	col-sm-8 col-md-offset-3 col-md-6">
			<div id="join">
				<h1>Join it Now</h1>
        <p>Your submission was successful.</p>
				<p>You will be redirected back home in 5 seconds.</p>
			</div>
		</div>
	</div>
</div>

<script>
    var timer = setTimeout(function() {
        window.location='<?php echo site_url(); ?>'
    }, 5000);
</script>
<?php $this->load->view("layout/footer"); ?>
