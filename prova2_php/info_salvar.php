<?php

class Saving_occurrence
{
    public $nome;
    public $rg_cpf;
    public $telefone;
    public $escola_publica;
    public $confirmation_counter;

    public function __construct(array $post_information)
    {
        $this->confirmation_counter = 0;
        if(isset($post_information['nome']))
        {
            $this->nome = $post_information['nome'];
            $this->confirmation_counter += 1;
        }
        if(isset($post_information['rg_cpf']))
        {
            $this->rg_cpf = $post_information['rg_cpf'];
            $this->confirmation_counter += 1;
        }
        if(isset($post_information['telefone']))
        {
            $this->telefone = $post_information['telefone'];
            $this->confirmation_counter += 1;
        } 
        if(isset($post_information['escola_publica']))
        {
            $this->escola_publica = $post_information['escola_publica'];
            $this->confirmation_counter += 1;
        }
    }
}
?>
