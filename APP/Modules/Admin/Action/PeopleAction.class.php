<?php
class PeopleAction extends Action {
	function index() {
		import('Class.Page',APP_PATH);
		$count=M('slide')->count();
		$page=new Page($count,5);
		$limit=$page->firstRow.','.$page->listRows;
		$this->slide=M('slide')->limit($limit)->select();
		$this->page=$page->show();
		$this->display();
	}
}