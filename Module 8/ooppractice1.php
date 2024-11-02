<?php
class Book{
    public $title;
    public $author;
    public $price;
    public $quantity;

    public function __construct($title, $author, $price, $quantity){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

class BookStore{
    public $books = [];
    public function addBook($book){
        $this->books[] = $book;
    }

    public function displayInventory(){
        foreach($this->books as $book){
            echo "Title: $book->title. \n";
            echo "Author: $book->author. \n";
            echo "Price: $book->price. \n";
            echo "Quantity: $book->quantity. \n";
        }
    }
}


$bookstore = new BookStore();
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99, 5);
$book2 = new Book("1984", "George Orwell", 8.99, 3);

$bookstore->displayInventory();