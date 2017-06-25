<?php
class SendTestMail extends Controllers {
	private $moduleName = "send_test_mail";
	public function getSettingsLinkText() {
		return get_translation ( "send_test_mail" );
	}
	public function getSettingsHeadline() {
		return get_translation ( "send_test_mail" );
	}
	public function settings() {
		return Template::executeDefaultOrOwnTemplate ( $this->moduleName, "form.php" );
	}
}