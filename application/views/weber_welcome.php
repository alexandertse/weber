<?php $this->load->view("layout/header"); ?>

<div id="main">
  <div class="container-fluid main-banner">
    <p>This is a quiz for who is applying to full-stack developer.</p>
  </div>

  <div class="container section-lucky-draw">
    <div class="copy">
      <h2>Lucky Draw!</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>


    <div class="prize-blocks">
        <div class="row">
        <div class="prize-block prize-block-1 col-xs-12 col-md-7 box">
          <div class="block-content block-content-1 col-md-12"><span>1</span> </div>
        </div>
        <div class="prize-block prize-block-2 col-xs-6 col-md-5 box">
          <div class="block-content block-content-2 col-md-12"><span>2</span> </div>
        </div>
        <div class="prize-block prize-block-3 col-xs-3 col-md-5">
          <div class="block-content block-content-3 col-md-12"><span>3</span> </div>
        </div>
        <div class="prize-block prize-block-4 col-xs-3 col-md-4">
          <div class="block-content block-content-4 col-md-12"><span>4</span> </div>
        </div>
        <div class="prize-block prize-block-5 col-xs-3 col-md-3">
            <div class="block-content block-content-5 col-md-12"><span>5</span> </div>
        </div>
      </div>
    </div>
    <div class="call-to-action col-md-12">
        <div class="">
          <a href="<?php echo site_url().'#join'; ?>" class="button transparent">Join Now</a>
        </div>
    </div>
  </div>

  <div class="container-fluid section-showcase">
    <div class="showcase-1">
      <div class="container showcase-content-1 col-xs-9 col-xs-push-3 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
        <h4>Lorem ipsum</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="call-to-action col-md-12">
            <div class="">
              <a href="<?php echo site_url().'#join'; ?>" class="button white">Join Now</a>
            </div>
        </div>
      </div>
    </div>
    <div class="showcase-2">
      <div class="container showcase-content-2 col-xs-9 col-sm-4 col-md-4 col-md-offset-1">
      <h4>Lorem ipsum</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="call-to-action col-md-12">
          <div class="">
            <a href="<?php echo site_url().'#join'; ?>" class="button white">Join Now</a>
          </div>
      </div>
      </div>
    </div>
  </div>

	<div class="container-fluid section-join">
		<div class="container col-sm-offset-2	col-sm-8 col-md-offset-3 col-md-6">
			<div id="join">
        <div class="copy">
  				<h1>Join it Now</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="join-form">
				<?php echo form_open(); ?>
        <div class="form-group col-md-6">
          <?php echo form_label('First Name','first_name'); ?>
					<?php echo form_input('first_name', set_value('first_name'), 'id=first_name class="form-control" autocomplete=false required'); ?>
					<?php echo form_error('first_name'); ?>
				</div>
        <div class="form-group col-md-6">
          <?php echo form_label('Last Name','last_name'); ?>
					<?php echo form_input('last_name', set_value('last_name'), 'id=last_name class="form-control" autocomplete=false required'); ?>
					<?php echo form_error('last_name'); ?>
				</div>
        <div class="form-group gender col-md-12">
          <?php echo form_label('Gender','gender');
          $gender_selected = set_value('gender');
          ?>
          <ul class="form-gender">
          <li class=""><?php echo form_radio(array("name"=>"gender","id"=>"gender_1","value"=>"male", 'checked'=>($gender_selected == 'male') ? TRUE : FALSE ));
          echo form_label('Male','gender_1'); ?></li>
          <li class=""><?php echo form_radio(array("name"=>"gender","id"=>"gender_2","value"=>"female", 'checked'=>($gender_selected == 'female') ? TRUE : FALSE));
          echo form_label('Female','gender_female'); ?></li>
          <li class=""><?php echo form_radio(array("name"=>"gender","id"=>"gender_3","value"=>"other", 'checked'=>($gender_selected == 'other') ? TRUE : FALSE));
          echo form_label('Other','gender_other'); ?></li>
          </ul>
          <?php echo form_error('gender'); ?>
        </div>

				<div class="form-group col-md-12">
          <?php echo form_label('Email Address','email_address'); ?>
					<?php echo form_input('email_address', set_value('email_address'), 'id=email_address class="form-control" autocomplete=false required'); ?>
					<?php echo form_error('email_address'); ?>
				</div>

        <div class="form-group col-md-6">
          <?php echo form_label('Contact Number','contact_number'); ?>
          <?php echo form_input('contact_number', set_value('contact_number'), 'id=contact_number class="form-control" autocomplete=false required minlength="8" maxlength="8"'); ?>
					<?php echo form_error('contact_number'); ?>
				</div>

        <div class="form-group col-md-6"> <!-- Date input -->
           <label class="control-label" for="date">Date of Birth</label>
           <input class="form-control" value="<?php echo set_value('date'); ?>" id="date" name="date" required type="text"/>
         </div>

				<?php if(isset($join_error)) { ?>
					<div class="error_join"><?php echo $join_error;?></div>
				<?php } ?>

        <div class="submit">
				<p>
					<?php echo form_submit('submit', 'Submit', 'class="button white" '); ?>
				</p>
        </div>
				<?php echo form_close(); ?>
      </div>

      <div class="draw-results"><a href="./draw">View Results</a></div>
			</div>
		</div>
	</div>
</div>

<script>
    $(document).ready(function(){
      var tdate = new Date();
      var dd = tdate.getDate();
      var MM = tdate.getMonth();
      var yyyy = tdate.getFullYear()-21;
      var end_date= ( MM+1) + "/" + dd + "/" + yyyy;

      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('#join_form').length>0 ? $('#join_form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
        endDate:end_date,
      };
      date_input.datepicker(options);
    })
</script>

<?php $this->load->view("layout/footer"); ?>
