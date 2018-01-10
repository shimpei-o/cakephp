<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
	<?php echo $title_for_layout; ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<?php //echo $this->Html->css('bootstrap.min'); ?>

<!--
<style>
body {
	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
}
</style>
-->

<?php //echo $this->Html->css('bootstrap-responsive.min'); ?>

<?php
//echo $this->fetch('meta');
//echo $this->fetch('css');
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hey! Get Up Soon.</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">トップ<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">初めての方へ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">料金プラン</a>
      </li>
	  <li>
		<a class="nav-link" href="#">Q&A</a>
	  </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="相手をキーワードで探す" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
    </form>
  </div>
</nav>

	<?php echo $this->Html->image('main_sec.jpg', array('alt' => 'CakePHP')); ?>

	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
