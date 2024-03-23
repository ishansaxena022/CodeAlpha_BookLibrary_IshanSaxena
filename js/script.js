function searchBooks() {
    const searchTerm = document.getElementById('searchInput').value;
    fetch(`search.php?term=${searchTerm}`)
        .then(response => response.json())
        .then(data => displayBooks(data))
        .catch(error => console.log('Error fetching books:', error));
}

function displayBooks(books) {
    const bookList = document.getElementById('bookList');
    bookList.innerHTML = '';

    if (books && books.length > 0) {
        books.forEach(book => {
            const bookDiv = document.createElement('div');
            bookDiv.classList.add('book', 'border', 'p-3', 'mb-3');

            const image = document.createElement('img');
            image.src = book.image;
            image.alt = book.title;
            image.classList.add('mr-3', 'mb-3', 'float-left');

            const title = document.createElement('p');
            title.textContent = `Title: ${book.title}`;

            const author = document.createElement('p');
            author.textContent = `Author(s): ${book.authors.join(', ')}`;

            const genre = document.createElement('p');
            genre.textContent = `Genre(s): ${book.genres.join(', ')}`;

            const borrowBtn = document.createElement('button');
            borrowBtn.textContent = 'Borrow';
            borrowBtn.classList.add('btn', 'btn-success', 'float-right');
            borrowBtn.onclick = function() {
                addToHistory(book);
            };

            bookDiv.appendChild(image);
            bookDiv.appendChild(title);
            bookDiv.appendChild(author);
            bookDiv.appendChild(genre);
            bookDiv.appendChild(borrowBtn);

            bookList.appendChild(bookDiv);
        });
    } else {
        const noResult = document.createElement('p');
        noResult.textContent = 'No books found.';
        bookList.appendChild(noResult);
    }
}

function addToHistory(book) {
    const borrowedBooks = JSON.parse(localStorage.getItem('borrowedBooks')) || [];
    borrowedBooks.push(book);
    localStorage.setItem('borrowedBooks', JSON.stringify(borrowedBooks));
    alert('Book added to borrowing history!');
}
