<?php if ( ! empty( $error ) ): ?>
<div id="message" class="error">
	<p><strong><?php _e( $error ); ?></strong></p>
</div>
<?php endif; ?>
<div id="memberful-wrap" class="wrap">
	<div id="memberful-registration">
		<div class="memberful-sign-up">
			<h1><?php _e( 'A Memberful account is required for setup', 'memberful' ); ?></h1>
			<p><?php _e( '<a href="http://memberful.com">Sign up for an account</a> and start selling digital products and subscriptions the easy way.', 'memberful' ); ?></p>
		</div>
		<div class="memberful-register-plugin">
			<h3><?php _e( 'Already have a Memberful account?', 'memberful' ); ?></h3>
			<form method="POST" action="<?php echo admin_url('admin.php?page=memberful_options&noheader=true') ?>">
				<fieldset>
					<textarea placeholder="<?php echo esc_attr( __( 'Paste your WordPress registration key here...', 'memberful' ) ); ?>" name="activation_code"></textarea>
					<button class="button action"><?php _e( 'Connect this site to your Memberful account', 'memberful' ); ?></button>
					<input type="hidden" name="action" value="register" />
					<?php wp_nonce_field( 'memberful_register' ); ?>
				</fieldset>
			</form>
		</div>
	</div>
</div>
