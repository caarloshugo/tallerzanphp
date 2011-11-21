<form method="post" class="" action="#top">
	<fieldset>
		<legend><?php print $legend;?></legend>	
		
		<?php print isset($alert) ? $alert : NULL;?>
		
		<div class="forms">
			<p class="field">&raquo; Nombre<br />
				<input name="name" type="text" class="required" value="<?php print (isset($data)) ? $data["Name"] : NULL;?>" tabindex="1" />
			</p>
			
			<p class="field">&raquo; E-Mail<br />
				<input name="email" type="text" class="required" value="<?php print (isset($data)) ? $data["Email"] : NULL;?>" tabindex="2" />
			</p>
			
			<p class="field">&raquo; Twitter<br />
				<input name="twitter" type="text" value="<?php print (isset($data)) ? $data["Twitter"] : "@";?>" tabindex="3" />
			</p>

			<p class="field">&raquo; Code<br />
				<input name="code" type="text" class="required" value="<?php print (isset($data)) ? $data["Code"] : NULL;?>" tabindex="4" maxlength="4" />
			</p>
			
			<p>
				<?php if(isset($data)) { ?>
					<input type="submit" name="edit" value="<?php print __("Edit");?>" tabindex="5"/>
				<?php } else { ?>
					<input type="submit" name="save" value="<?php print __("Save");?>" tabindex="5"/>
				<?php } ?>
			</p>
		</div>			
	</fieldset>
</form>
