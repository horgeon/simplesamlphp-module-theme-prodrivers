<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_changepw}' );

$this->includeAtTemplateBase( 'includes/header.php' ); ?>

<?php if( isset( $this->data[ 'error' ] ) ) { ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<p><?php echo $this->data[ 'error' ]; ?></p>
		</div>
	</div>
<?php } ?>

<?php if( isset( $this->data[ 'userMessage' ] ) ) { ?>
	<div class="col-md-12">
		<div class="alert alert-success" role="alert">
			<p><?php echo $this->t( $this->data[ 'userMessage' ] ); ?></p>
		</div>
	</div>
<?php } ?>

<div class="col-md-12">
	<div class="col-lg-10 col-lg-offset-2">
		<p><?php echo $this->t( 'cpw_para1', array( '%UID%' => $this->data[ 'uid' ] ) ); ?></p>
	</div>

	<?php echo $this->data[ 'formHtml' ]; ?>
</div>

<div class="col-md-12">
	<ul class="nav nav-pills nav-stacked">
		<li><a href="reviewUser.php"><?php echo $this->t( 'link_review' ); ?></a></li>
		<li><a href="index.php"><?php echo $this->t( 'return' ); ?></a></li>
		<li><a href="changePassword.php?logout=true"><?php echo $this->t( '{status:logout}' ); ?></a></li>
	</ul>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.php' ); ?>
