<?php

class CadastroController{

	public function login($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$model->connect();
		return $data;
	}

	public function inicio($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$data['template'] = 'inc/body';
		$data['page'] = 'pages/graficos';
		$model->connect();
		$data['graficos_clientes'] = $model->query('SELECT TABLE_NAME AS `Table`,ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024) AS `size` FROM information_schema.TABLES order by size desc;');
		return $data;
	}

	public function threads($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$data['template'] = 'inc/body';
		$data['page'] = 'pages/tabela_generica';
		$data['title'] = 'Threads';
		$data['description'] = 'Veja as Threads do Banco de dados';
		$model->connect();
		$data['dados_tabela'] = $model->query('SELECT * FROM performance_schema.threads;');
		return $data;
	}

	public function process($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$data['template'] = 'inc/body';
		$data['page'] = 'pages/tabela_generica';
		$data['title'] = 'Processos';
		$data['description'] = 'Veja os processos do Banco de dados';
		$model->connect();
		$data['dados_tabela'] = $model->query('SHOW FULL PROCESSLIST;');
		//print_r($data);
		return $data;
	}

	public function size($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$data['template'] = 'inc/body';
		$data['page'] = 'pages/tabela_generica';
		$data['title'] = 'Tamanho das tabelas';
		$data['description'] = 'Veja o tamanho das tabelas do Banco de dados';
		$model->connect();
		$data['dados_tabela'] = $model->query('SELECT TABLE_NAME AS `Table`,concat(ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024)," MB") AS `size` FROM information_schema.TABLES order by ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024) desc;');
		return $data;
	}

	public function variables($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$data['template'] = 'inc/body';
		$data['page'] = 'pages/tabela_generica';
		$data['title'] = 'Variables';
		$data['description'] = 'Veja as variaveis de ambiente do Banco de dados';
		$model->connect();
		$data['dados_tabela'] = $model->query('SHOW GLOBAL variables;');
		return $data;
	}

	public function process_history($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$data['template'] = 'inc/body';
		$data['page'] = 'pages/tabela_generica';
		$data['title'] = 'Historico de Processos';
		$data['description'] = 'Veja o historico de processos do Banco de dados';
		$model->connect();
		$data['dados_tabela'] = $model->query('SHOW FULL PROCESSLIST;');
		return $data;
	}

	public function process_kill($model,$request,$body){
		$data['data_HTML_rendered'] = true;
		$data['template'] = 'inc/body';
		$data['page'] = 'pages/tabela_generica2';
		$data['title'] = 'Pare processos lentos';
		$data['description'] = 'Pare processos do Banco de dados';
		$model->connect();
		$data['dados_tabela'] = $model->query('SHOW FULL PROCESSLIST;');
		return $data;
	}

}

?>
