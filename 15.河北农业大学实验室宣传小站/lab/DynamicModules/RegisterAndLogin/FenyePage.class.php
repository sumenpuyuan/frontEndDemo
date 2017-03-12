<?php

	class FenyePage{
	
		var $pageNow=1;
		var $pageCount;
		var $pageSize=6;
		var $rowCount;
		var $navigator;
		var $res="";
		var $goUrl;
		var $condition="";
	/**
	 * @return unknown
	 */
	public function getNavigator() {
		return $this->navigator;
	}
	
	/**
	 * @return unknown
	 */
	public function getPageCount() {
		return $this->pageCount;
	}
	
	/**
	 * @return unknown
	 */
	public function getPageNow() {
		return $this->pageNow;
	}
	
	/**
	 * @return unknown
	 */
	public function getPageSize() {
		return $this->pageSize;
	}
	
	/**
	 * @return unknown
	 */
	public function getRowCount() {
		return $this->rowCount;
	}
	
	/**
	 * @param unknown_type $navigator
	 */
	public function setNavigator($navigator) {
		$this->navigator = $navigator;
	}
	
	/**
	 * @param unknown_type $pageCount
	 */
	public function setPageCount($pageCount) {
		$this->pageCount = $pageCount;
	}
	
	/**
	 * @param unknown_type $pageNow
	 */
	public function setPageNow($pageNow) {
		$this->pageNow = $pageNow;
	}
	
	/**
	 * @param unknown_type $pageSize
	 */
	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
	}
	
	/**
	 * @param unknown_type $rowCount
	 */
	public function setRowCount($rowCount) {
		$this->rowCount = $rowCount;
	}
	
		
	}
?>