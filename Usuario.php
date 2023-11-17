<?php
class Usuario implements JsonSerializable{
    private $nome;
    private $idade;
    private $peso;
    private $altura;
    private $imc;
    private $notas;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = 1;
        $this->altura = 1;
        $this->notas = Array(6,7,8);
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getPeso(){
        return $this->peso;
    } 

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getAltura(){
        return $this->altura;
    }  
    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getImc(){
        $calculo = $this->peso/($this->altura*$this->altura);
        return round($calculo,2);
    }

    public function getNotas(){
        return $this->notas;
    }

    public function setNotas($notas){
        $this->notas = $notas;
    }
    public function mostra(){
        $resp = "";
        $resp .= "Nome :".$this->nome;
        $resp .= "<br>Idade :".$this->idade;
        $resp .= "<br>Peso :".$this->peso;
        $resp .= "<br>Altura :".$this->altura;
        return $resp;
    }

    public function mostra_array(){
        $resp = array(
            "Nome"=>$this->nome,
            "Idade"=>$this->idade,
            "Peso"=>$this->peso,
            "Altura"=>$this->altura
        );
        return $resp;
    }

    // public function jsonSerialize():mixed{
    //     $resp = array(
    //         "Nome"=>$this->nome,
    //         "Idade"=>$this->idade,
    //         "Peso"=>$this->peso,
    //         "Altura"=>$this->altura,
    //         "IMC" =>$this->imc,
    //         "Notas" =>$this->notas,
    //     );
    //     return $resp;
    // }

    public function jsonSerialize():mixed{
        return get_object_vars($this);
    }


}
