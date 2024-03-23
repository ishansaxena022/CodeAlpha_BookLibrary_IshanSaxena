// borrowing_script.js

document.addEventListener('DOMContentLoaded', function() {
    let borrowedBooks = JSON.parse(localStorage.getItem('borrowedBooks')) || [];
    const bookList = document.getElementById('borrowedBooksList');

    // Sort borrowed books by the most recent addition
    borrowedBooks.sort((a, b) => new Date(b.borrowedDate) - new Date(a.borrowedDate));

    if (borrowedBooks.length > 0) {
        borrowedBooks.forEach((book, index) => {
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

            const deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Delete';
            deleteBtn.classList.add('btn', 'btn-danger', 'float-right');
            deleteBtn.onclick = function() {
                removeBook(index);
            };

            bookDiv.appendChild(image);
            bookDiv.appendChild(title);
            bookDiv.appendChild(author);
            bookDiv.appendChild(genre);
            bookDiv.appendChild(deleteBtn);

            bookList.appendChild(bookDiv);
        });
    } else {
        const noResult = document.createElement('p');
        noResult.textContent = 'No books borrowed yet.';
        bookList.appendChild(noResult);
    }

    function removeBook(index) {
        borrowedBooks.splice(index, 1);
        localStorage.setItem('borrowedBooks', JSON.stringify(borrowedBooks));
        location.reload(); // Refresh the page to reflect the changes
    }
});
