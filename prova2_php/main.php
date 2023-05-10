<?php
	require_once('info_salvar.php');
	require_once('info_conexao.php');
	require_once('conexao_classes.php');

	$occurrence_saved = new Saving_occurrence($_POST);
	if($occurrence_saved->confirmation_counter = 5)
	{
		$database_connection = new Database_Connection($servername, $username, $password, $dbname);
		$database_connection->inserting_occurrence
		(
			$occurrence_saved->nome,
			$occurrence_saved->telefone,
			$occurrence_saved->rg_cpf,
			$occurrence_saved->escola_publica
		);
	}
