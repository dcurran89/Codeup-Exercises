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

echo "\n\nOutput of \$books array\n";
foreach($books as $title => $titleInfo){
    echo "=============================\n";
    echo "{$title}\n";
    foreach ($titleInfo as $key => $value) {
        echo "{$key}: {$value}\n";
    }
}

echo "\n\nBooks published after 1950\n";
foreach($books as $title => $titleInfo){
    echo "-----------------------------\n";
    foreach ($titleInfo as $key => $value) {
        if($titleInfo['published'] >= 1950){
            echo "{$title}\n";
            echo "{$key}: {$value}\n";
        }
    }
}
?>