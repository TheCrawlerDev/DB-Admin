<?php

class AjaxController{

	public function login($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		//$data['page'] = 'login';
		return $data;
	}

	public function kill_process($model,$request,$body){
		$data['data_HTML_rendered'] = false;
		$model->connect();
		$data['process'] = $model->query('kill '.$_POST['process'].';');
		return $data;
	}

	public function kill_all_process($model,$request,$body){
		$data['data_HTML_rendered'] = false;
		$model->connect();
		$data['process'] = $model->query('SHOW FULL PROCESSLIST;');
		// print_r($data['process']);
		foreach($data['process'] as $process){
			$data['kill_process'][] = $model->query('kill '.$process['Id'].';');
		}
		print_r($data['kill_process']);
		return $data;
	}

}

?>
