<form>
	<legend>Old i3 Contacts</legend>
</form>
<br />
<div class="row">
	<div id="OldContacts" class="span6">
		<?php
			foreach($i3_contacts["contacts"] as $contact) {
				echo 
					"<p>".$contact["ContactType"]."</p>" . 
					"<p>".$contact["ContactDate"]." by ".$contact["UserName"]."</p><br />"; 
			}
		?>
	</div>
	<div id="OldContactNotes" class="span6" style="text-align: left;">
		<div class="row">
		<div class="span1" >
		</div>
		<div class="span5" >
			<?php 
				$paragraphs = explode("\n", $i3_contacts["notes"]); 
				
				foreach($paragraphs as $paragraph) {
					echo "<p>" . $paragraph . "</p>"; 
				}
			?>
		</div>
	</div>
</div>