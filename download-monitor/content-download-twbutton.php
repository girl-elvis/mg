<?php
/**
 * Download button
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/** @var DLM_Download $dlm_download */
?>
<p>
  <a class="aligncenter  button" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow">

		<?php printf( __( 'Download &ldquo;%s&rdquo;', 'download-monitor' ), $dlm_download->get_title() ); ?>

		<div class="text-sm">
      <?php echo $dlm_download->get_version()->get_filename(); ?> &ndash;  <?php echo $dlm_download->get_version()->get_filesize_formatted(); ?>

		</div>
	</a>
</p>
