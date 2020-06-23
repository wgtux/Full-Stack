<?php
//CONCEITO DE HERANÇA
class Post{
    private int $id;
    private int $like;

    public function setId($i){
        $this->id = $i;
    }

    public function getId(){
        return $this->id;
    }

    public function setLikes($li){
        $this->like = $li;    
    }

    public function getLikes(){
        return $this->like;
    }
}

class Foto extends Post{
    private $url;

    //method construtor, criando id
    function __construct($id) {
        $this->setId($id);
    }

    public function setUrl($u){
        $this->url = $u;
    }

    public function getUrl(){
        return $this->url;
    }
}

class Texto extends Post {
    private $publicacao;

    public function setPub($texto){
        $this->publicacao = $texto;
    }

    public function getPub(){
        return $this->publicacao; 
    }
}

$foto = new Foto(20);
$foto->setLikes(50);
$foto->setUrl('fotoabc');

$texto = new Texto();
$texto->setPub('Meu primeiro post');

echo "Foto #".$foto->getId()." - url: ".$foto->getUrl()." - Likes: ".$foto->getLikes()." - Post: ".$texto->getPub();
?>