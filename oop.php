<?php
class Book {
    // Private properties
    private $title;
    private $availableCopies;
    
    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
    
    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }
    
    // Method to get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
    
    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for '{$this->title}' to borrow.";
        }
    }
    
    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;
    
    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }
    
    // Method to borrow a book
    public function borrowBook($book) {
        $book->borrowBook();
    }
    
    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
    }
}

// Usage


$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


$member1->borrowBook($book1);
$member2->borrowBook($book2);


echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}".PHP_EOL;
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}";

?>
