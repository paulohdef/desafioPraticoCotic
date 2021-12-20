<?php
require_once ("../backend_php/classes/SQLDriver.php");


class Personagem {
    public $nome;
    public $idade;
    public $interprete;
    public $alinhamento;
    public $biografia;

    //Nome da tabela correspondente a esta classe no banco de dados.
    private static $table_name = "personagens";

    /**
     * Esta função insere um novo objeto da classe Personagem no banco de dados.
     * 
     * @param Personagem $personagem Entidade a ser inserida no banco de dados.
     */
    public static function inserir(Personagem $personagem) {
        $inserir = SQLDriver::insertPersonagem($personagem->nome, $personagem->idade,$personagem->interprete, $personagem->alinhamento, $personagem->biografia);

        return $inserir;
    }

    /**
     * Esta função retorna todas as entidades Personagem presentes na tabela 'personagens'.
     * 
     * @param Personagem[] Array com todos os personagens do banco.
     */
    public static function obterTodos() {

        $personagens = SQLDriver::SelectAllEntities("personagens");
        return $personagens;
        
    }
}
?>