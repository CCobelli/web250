<?php

class Book {
    
    public $title;
    public $author;
    public $length;
    public $genre;
    private $publicationDate;
    protected $illustrated = false;
    public $educational = false;

    public function set_publicationDate($value) {
        $this->publicationDate = $value;
    }

    public function publicationDate() {
        $this->publicationDate;
    }
}

class GraphicNovel extends Book {
    var $illustrated = true;
}

class TextBook extends Book {
    var $educational = true;
    var $illustrated = true;
}

$book1 = new GraphicNovel;
$book1->title = 'Berserk Vol.1';
$book1->author = 'Kentaro Miura';
$book1->length = 224;
$book1->genre = 'Dark Fantasy';
$book1->set_publicationDate = 'November 26 1990';
echo $book1->title . "<br />";
echo "Author: " . $book1->author . "<br />";
echo "Pages: " . $book1->length . "<br />";
echo "Genre: " . $book1->genre . "<br />";
echo "Publication Date: " . $book1->publicationDate() . "<br />";
echo "Illustrated:" . $book1->illustrated . "<br />";
echo "Educational: " . $book1->educational . "<br />";

echo "<br />";

$book2 = new TextBook;
$book2->title = 'Learning C#';
$book2->author = 'Jesse Liberty';
$book2->length = 355;
$book2->genre = 'Tech';
$book2->set_publicationDate = 'September 2002';
echo $book2->title . "<br />";
echo "Author: " . $book2->author . "<br />";
echo "Pages: " . $book2->length . "<br />";
echo "Genre: " . $book2->genre . "<br />";
echo "Publication Date: " . $book2->publicationDate() . "<br />";
echo "Illustrated: " . $book2->illustrated . "<br />";
echo "Educational: " . $book2->educational;

?>