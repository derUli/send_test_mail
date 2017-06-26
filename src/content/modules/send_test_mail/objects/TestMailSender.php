<?php
class TestMailSender {
	private $to = null;
	private $headers = null;
	public function __construct($to = null, $headers = null) {
		if (is_string ( $to )) {
			$this->to = $to;
		} else {
			$this->to = Settings::get ( "email" );
		}
		if (is_string ( $headers )) {
			$this->headers = $headers;
		} else {
			$this->headers = "From: " . Settings::get ( "email" ) . "\r\n" . "Content-Type: text/plain; charset=UTF-8";
		}
	}
	public function getTo() {
		return $this->to;
	}
	public function getHeader() {
		return $this->headers;
	}
	public function setTo($val) {
		$this->to = is_string ( $val ) ? $val : null;
	}
	public function setHeaders($val) {
		$this->headers = is_string ( $val ) ? $val : null;
	}
	public function send() {
		throw new NotImplementedException ( "send test mail not implemented yet" );
	}
}