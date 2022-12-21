<?php $this->load->view("layout/header"); ?>

<div id="main">
	<div class="container-fluid section-draw">
		<div class="container col-sm-offset-2	col-sm-8 col-md-offset-3 col-md-6">
			<div id="draw">
        <div class="copy">
  				<h1>Draw Results</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

				<h4>Draw Date: <?php echo date("M d, Y",strtotime($draw_results[0]['draw_date'])); ?></h4>
        <table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Contact Number</th>
						</tr>
					</thead>
					<tbody>
							<?php foreach ($draw_results as $key => $value) {
								echo "<tr>"."<th>".$value['draw_order']."</th>"
								."<td>".$value['firstname']."</td>"
								."<td>".$value['lastname']."</td>"
								."<td>".$value['contactnumber']."</td>"
								."</tr>";
							}
							?>
					</tbody>
				</table>
      </div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("layout/footer"); ?>
