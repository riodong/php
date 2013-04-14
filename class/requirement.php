<?php

class requirement{
	var $rid;
	var $rname;
	var $rdes;
    var $responsibel;
	/**
	 * @return the $rid
	 */
	public function getRid() {
		return $this->rid;
	}
	/**
	 * @return the $rname
	 */
	public function getRname() {
		return $this->rname;
	}
	/**
	 * @return the $rdes
	 */
	public function getRdes() {
		return $this->rdes;
	}

	/**
	 * @return the $responsibel
	 */
	public function getResponsibel() {
		return $this->responsibel;
	}

	/**
	 * @param field_type $rid
	 */
	public function setRid($rid) {
		$this->rid = $rid;
	}
	/**
	 * @param field_type $rname
	 */
	public function setRname($rname) {
		$this->rname = $rname;
	}
	/**
	 * @param field_type $rdes
	 */
	public function setRdes($rdes) {
		$this->rdes = $rdes;
	}
	/**
	 * @param field_type $responsibel
	 */
	public function setResponsibel($responsibel) {
		$this->responsibel = $responsibel;
	}    
}


?>