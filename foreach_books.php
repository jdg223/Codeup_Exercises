<?php 

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $book => $value) {
 if($value['published'] > 1950){
 echo PHP_EOL."The book is ".$book.PHP_EOL
 ."The author is ".$value['author'].PHP_EOL
 ."There are ".$value['pages']." pages".PHP_EOL
 ."It was publised in ".$value['published'].PHP_EOL;       
    }

} 

 ?>
