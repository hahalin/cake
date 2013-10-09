<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> output -> enable_profiler(TRUE);
	}

	function index() {
		//echo 'app index';
		$this -> load -> helper('url');
		$this -> load -> view('category');
	}

	function add($id = 0) {
		$this -> output -> enable_profiler(false);
		$m = new rfq();
		if (isset($_POST['pid'])) {
			$id = $_POST['pid'];
		}
		$m -> where('item_id', $id);
		$m -> get();
		if (!$m -> id) {
			$m -> item_id = $id;
			$m -> save();
		} else {
			$o = new stdClass;
			$o -> success = false;
			$o -> msg = "exist";
			echo json_encode($o, 1);
			return;
		}
		$ee = "";
		foreach ($m->error->all as $e) {
			$ee .= $e . "<br/>";
			echo $e . "<br />";
		}
		$o = new stdClass;
		$o -> success = false;
		$o -> msg = $ee;
		echo json_encode($o, 1);
		return;
		
		$o->success=true;
		echo json_encode($o,1);

	}

	function slist() {
		$m = new rfq();
		$m -> get();
		$ary = array();
		foreach ($m as $item) {
			$ary[] = $m -> item_id;
		}
		echo '<pre>';
		print_r($ary);
		echo '</pre>';
	}

	function getcount() {
		$this -> output -> enable_profiler(false);
		$m = new rfq();
		echo $m -> count();
	}

}
