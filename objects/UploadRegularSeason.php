<?php
class UploadRegularSeason extends UploadMatch {
	
	function __construct($uploadId, $header, $standingId, $matchId, $scoreboardId, $type, $name) {
		parent::__construct($uploadId, $header, $standingId, $matchId, $scoreboardId, $type, $name);
	}
	
	public function __set($name, $value) {
		$this->$name = $value;
	}
	public function __get($name) {
		return $this->$name;
	}
}
?>