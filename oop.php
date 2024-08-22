
<?php
    class Book {
        private $title="";
        private $availableCopies=0;

        public function __construct($title, $availableCopies) {
            $this->title=$title;
            $this->availableCopies=$availableCopies;

        }

        public function getTitle(){
            return $this->title;
        }
    
        public function getAvailableCopies(){
            return $this->availableCopies;
        }

        public function borrowBook(){
            $this->availableCopies-=1;
        }

        public function returnBook(){
            $this->availableCopies+=1;
        }
    }


    class Member {
        private $name;

        public function __construct($name) {
            $this->name=$name;
        }

        public function getName(){
            return $this->name;
        }
    
        public function borrowBook($book){
            $book->borrowBook();
        }
    
        public function returnBook($book){
            $book->returnBook();        
        }
    }

    $Book1=new Book("The Great Gatsby", 5);
    $Book2=new Book("To Kill a Mockingbird", 3);

    $Member1= new Member("John Doe");
    $Member2= new Member("Jane Smith");

    $Member1->borrowBook($Book1);
    $Member2->borrowBook($Book2);
    
    echo "Available Copies of '".$Book1->getTitle()."': ".$Book1->getAvailableCopies().PHP_EOL;
    echo "Available Copies of '".$Book2->getTitle()."': ".$Book2->getAvailableCopies().PHP_EOL;
?>