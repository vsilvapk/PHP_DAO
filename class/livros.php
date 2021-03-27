<?php

    class livros{


        private $id;
        private $nome;
        private $descricao;


 
        public function getId()
        {
                return $this->id;
        }
 
        public function setId($id)
        {
                $this->id = $id;

        }

         
        public function getNome()
        {
                return $this->nome;
        }

        
        public function setNome($nome)
        {
                $this->nome = $nome;
        }

        
        public function getDescricao()
        {
                return $this->descricao;
        }

        
        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

          }

        
    public function loadByid($id){

        $sql = new sql();

        $results = $sql->select("SELECT * FROM livros WHERE id = :ID",array(
       ":ID"=>$id ));

        if(count($results)>0){

            $row = $results[0];

            $this->setId($row['id']);
            $this->setNome($row['nome']);
            $this->setDescricao($row['descricao']);
            
        }

    }


    public function __toString(){

        return json_encode(array("id" =>$this->getId(),
                                 "nome"=>$this->getNome(),
                                 "descricao"=>$this->getDescricao()      
         ));


    }




























        }

?>