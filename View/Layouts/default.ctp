<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('SUM-Cake: simple user management:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro|Hammersmith+One&v2' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('sum-cake');
			
		// javascripts
		// echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js');
		echo $scripts_for_layout;
	?>
</head>
<body>

	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('SUM-Cake: simple user management'), 'https://github.com/cdburgess/SUM-Cake'); ?></h1>
		</div>
		<?php echo $this->element('login'); ?>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('http://i.creativecommons.org/l/by-sa/3.0/80x15.png', array('alt'=> __('Creative Commons License'), 'border' => '0',  'class' => 'aligned')),
					'http://creativecommons.org/licenses/by-sa/3.0/',
					array('target' => '_blank', 'rel' => 'license', 'escape' => false)
				);
			?>
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework'), 'border' => '0',  'class' => 'aligned')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php pr($this->Session->read()); ?>
</body>
</html>