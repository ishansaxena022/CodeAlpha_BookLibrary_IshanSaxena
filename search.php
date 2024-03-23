<?php

if(isset($_GET['term'])) {
    $searchTerm = urlencode($_GET['term']);
    $url = "https://www.googleapis.com/books/v1/volumes?q=$searchTerm";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    $books = [];

    if(isset($data['items'])) {
        foreach ($data['items'] as $item) {
            $book = [
                'title' => $item['volumeInfo']['title'],
                'authors' => isset($item['volumeInfo']['authors']) ? $item['volumeInfo']['authors'] : ['Unknown'],
                'image' => isset($item['volumeInfo']['imageLinks']['thumbnail']) ? $item['volumeInfo']['imageLinks']['thumbnail'] : '',
                'genres' => isset($item['volumeInfo']['categories']) ? $item['volumeInfo']['categories'] : ['Unknown']
            ];

            $books[] = $book;
        }
    }

    echo json_encode($books);
}
?>
