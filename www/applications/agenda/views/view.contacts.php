<div id="agenda">
	<?php
		foreach($contacts as $contact) {
		?>
			<p>
				<span class="bold"><?php print __("Name"); ?>:</span> 
				<?php print $contact["Name"]; ?>
			</p>
	
			<p>
				<span class="bold"><?php print __("Email"); ?>:</span> 
				<?php print $contact["Email"]; ?>
			</p>

			<p>
				<span class="bold italic underline"><?php print __("Phone"); ?>:</span> 
				<?php print $contact["Name"]; ?>
			</p>	
		<?php
		}
	?>
</div>