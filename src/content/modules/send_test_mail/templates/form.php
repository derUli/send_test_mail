<form id="mailTestForm"
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
		<button type="submit" class="btn btn-primary"><i class="fas fa-envelope"></i> <?php translate("send");?></button>
	</p>

  <?php csrf_token_html();?>
</form>
<script type="text/javascript">
$(function(){
        $('#mailTestForm').ajaxForm(function() { 
            bootbox.alert(Translation.MailSent); 
        });
});
</script>
<?php
$i18n = new JSTranslation ();
$i18n->addKey ( "mail_sent" );
$i18n->renderJS ();
?>