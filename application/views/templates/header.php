<!DOCTYPE html>
<html>
<head>
	<?php //echo $this->Html->charset(); ?>
	<title>
		<?php echo $title ?>
	</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
		$this->load->helper('html');
		echo link_tag('webroot/css/bootstrap.min.css');
		echo link_tag('webroot/css/bootstrap-theme.min.css');
		echo link_tag('webroot/css/signin.css');
		echo link_tag('webroot/css/doc.css');
		
	?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    
	<script type="text/javascript" src="<?php echo base_url();?>webroot/js/jquery-1.9.1.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>webroot/js/jquery-ui.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>webroot/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>webroot/js/jquery.validate.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>webroot/js/additional-methods.js" ></script>
    	

	
	
</head>
<body>
	<div id="container">
		<div class="bs-header" id="content">
			<div class="container">
				<h1>Epic ERP System</h1>
				<p>___________________________________________</p>
				<div class="carbonad">
					<div id="azcarbon" style="text-align: center;">
						<span class="carbonad-image">
							<a href="#" title="" target="_blank">
								<?php
									$image_properties = array(
									          'src' => 'webroot/img/mercedes-benz-sf1-final-concept-design-6.jpg',
									          'alt' => 'Epic System',
									          'class' => 'carbonad-image carbonad-img',
									          'width' => '120',
									          'height' => '90',
									          'title' => 'Epic System',
									          
									);

									echo img($image_properties);
									
								?>
							</a>

						</span>
					</div>
				</div>
			</div>
	    </div>
		<div id="content">

