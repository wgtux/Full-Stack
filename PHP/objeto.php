<?php
/*
class Post{
    //propriedades tipadas
    private int $id;
    private int $likes = 0;
    public array $coments = [];
    private string $autor;

    //metodo construtor
    
    
    //method public
    public function aumentarLikes(){
        //this, se referencia a ele mesmo.
        $this->likes ++;
    }

    //Encapsulamento(GETS e SETERS)
    public function setAutor($nome){
        //verifica se o nome tem mais de 3 caracter
        if(strlen($nome) >=3 ){ 
            // coloca a  primeira letra em Maiscula
            $this->autor = ucfirt($nome); 
        }
    }

    public function getAutor(){
        //se tiver autor retorna o nome, caso contrario retorna visitante
        return $this->autor ?? 'Visitante';
    }
}

//estanciar objeto(criar)
$post1 = new Post();
$post2 = new Post();

//acessando a classe
$post1->setAutor('Pi')."<br>";
$post2->setAutor("Weslen Almeida")."<br>";


echo "Post 1 = ".$post1->likes." Likes"." - Autor = ".$post1->getAutor()."<br>";
echo "Post 2 = ".$post2->likes." Likes"." - Autor = ".$post2->getAutor()."<br>";
*/

//CONCEITO DE HERANÇA

class Post{
    private int $id;
    private int $like = 0;

    public function setId($i){
        $this->$id = $i;
    }

    public function getId(){
        return $this->$id;
    }

    public function setLikes($li){
        $this->$like = $li;    
    }

    public function getLikes(){
        return $this->$like;
    }
}

class Foto extends Post{
    private $url;

    //method construtor, criando id
    public function__construct($id){
        $this->setId($id);
    }

    public function setUrl($u){
        $this->$url = $u;
    }

    public function getUrl(){
        $this->$url;
    }
}

$foto = new Foto(10);
$foto->$setLike(20);
$foto->setUrl(fotoabc);

echo "Foto #".getId()." - "."url: ".getUrl()." - "."Likes: ".getLikes();
?>