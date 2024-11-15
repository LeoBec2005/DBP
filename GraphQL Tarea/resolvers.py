
def resolve_welcome(obj, info):
    return "Welcome to the Book Store!"

def resolve_bookInfo(obj, info, title):
    return f"The book '{title}' is available!"

books_db = {
    "1": {"id": "1", "title": "The Great Gatsby", "author": "F. Scott Fitzgerald", "year": 1925},
    "2": {"id": "2", "title": "To Kill a Mockingbird", "author": "Harper Lee", "year": 1960},
}

def resolve_getBook(obj, info, id):
    return books_db.get(id)
