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
	<div class=" p-1 w-1/2">

		<div class="">
		  <a class="button" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow">
				<?php
				$filetype = $dlm_download->get_version()->get_filetype();
				$filesize = $dlm_download->get_version()->get_filesize_formatted();
				$fileversion = $dlm_download->get_version()->get_version_number();
				$filedate = $dlm_download->get_version()->get_date()->format( 'F j, Y');
				$filetitle = $dlm_download->get_title();

				switch ($filetype) {
					case 'pdf':
						echo '<i class="far fa-file-pdf"></i>';
						break;
					case 'doc':
						echo '<i class="far fa-file-word"></i>';
						break;
					case 'docx':
						echo '<i class="far fa-file-word"></i>';
						break;
			    default:
						echo '<i class="far fa-file-alt"></i>';
						break;
				}

				echo " " . $filetitle ; ?>
			</a>
		</div>
		<div class="text-sm">
	      <?php

	      echo ('<span class="uppercase">' . $filetype . "</span> &#x25cf; " . $filesize . " &#x25cf; " . $fileversion . " &#x25cf; " . $filedate );

	      ?>
		</div>

	</div>
</p>
