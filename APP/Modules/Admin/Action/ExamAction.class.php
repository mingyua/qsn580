<?php
class ExamAction extends CommonAction {
	function index() {
		import('Class.Page',APP_PATH);
		$count=M('exam')->count();
		$page=new Page($count,10);
		$limit=$page->firstRow.','.$page->listRows;
		$this->exam=M('exam')->limit($limit)->select();
		$this->page=$page->show();
		$this->display();
	}
	function exam() {
			$exam=M('exam')->order('id asc')->select();
			foreach($exam as $v){
				$answers=explode('###',$v['answer']);
				$arr[] = array(
				'question' => $v['id'] . '、' . $v['question'],
				'answers' => $answers
				);
			}
	
	$this->json = json_encode($arr);	
	$this->display();
	}
	function ajax() {
	
		$data = $_REQUEST['an'];

		$answers = explode('|',$data);
		$an_len = count($answers)-1; //题目数

		$exam=M('exam')->order('id asc')->field('correct')->select();
		$i = 0;
		$score = 0; //初始得分
		$q_right = 0; //答对的题数
		foreach($exam as $v){
			if($answers[$i]==$v['correct']){
					$arr['res'][] = 1;
					$q_right += 1;
				}else{
					$arr['res'][] = 0;
				}
				$i++;	
		}
		$arr['score'] = round(($q_right/$an_len)*100); //总得分
		echo json_encode($arr);
	}
	
	function add() {
		if(IS_POST){
			$exam=M('exam');
			if($exam->add($_POST)){
				$this->success('添加成功',U(GROUP_NAME.'/exam/index'));
				}else{
					$this->error('添加失败');
					}			
			
		}else{
			$this->time=time();
			$this->id=I('id',0, 'intval');
			$id=$_GET['id'];
			$exam = M("exam"); // 实例化User对象
			$this->exam=$exam->where("id=$id")->find();
			
			$this->display ();
			
		}
	}
	
	
}