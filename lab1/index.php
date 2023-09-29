<?php 
    class User{
        public $name;
    
        public function __construct(string $name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
    }

    class Article{
        private $title;
        private $text;
        private $autor;

        public function __construct(string $title, string $text, User $autor){
        $this->text = $text;
        $this->title = $title;
        $this->autor = $autor;
        }

        public function getAutor(): User{
            return $this->autor;
        }
    }

    $user = new User("Ivan");
    $article = new Article("title", "text", $user);
    //var_dump($article);
    echo $article->getAutor()->getName();
?>