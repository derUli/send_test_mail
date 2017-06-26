<form id="myForm"
	action="<?php Template::escape( ModuleHelper::buildAdminURL("send_test_mail", "sClass=SendTestMail&sMethod=send"));?>"
	method="post">
	<p>
		<strong><?php translate("receiver");?></strong><br /> <input
			type="email" name="to" value="" required>
	</p>
	<p>
		<strong><?php translate("headers");?></strong><br /> <textarea
			rows="15" name="headers"></textarea>
	</p>
	<p>
		<input type="submit" name="" value="<?php translate("send");?>">
	</p>

  <?php csrf_token_html();?>
</form>