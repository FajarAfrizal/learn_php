<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iyakh</title>
</head>

<body>
    <?php
    function br()
    {
        echo "<br>";
    }
    function hr()
    {
        echo "<hr>";
    }
    class Book // class gemink
    {
        var $title; // var gemink
        public $author; // bisa pake public, private, atau protected
        public $pages; // puclic kayak let javascrpt bebas di ubah dalem / luar class, kalo private, gak bisa diakses dari luar class kayak const javascrpt

        function __construct($aTitle, $aAuthor, $aPages) //ini constructor coyyyy
        {
            // echo "A new book has been created<br>";
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }

        function longgesPages() //object function
        {
            if ($this->pages > 300) {
                return "Long book";
            } else {
                return "Short book";
            }
        }
    }

    //==========buat book ubject==========
    $book1 = new Book("Harry Potter", "J.K. Rowling", 400);
    // $book1->title = "Harry Potter";
    // $book1->author = "JK Rowling";
    // $book1->pages = 400;
    $book1->title = "Jokowi Adventure";
    $book1->author = "Asep Kenalpot";
    $book1->pages = 69;
    $book2 = new Book("Lord of the Rings", "J.R.R. Tolkien", 700);
    // $book2->title = "Lord Of the Rings";
    // $book2->author = "Tolkien";
    // $book2->pages = 700;
    echo $book1->title;
    br();
    echo $book1->longgesPages();
    hr();
    echo $book2->title;
    br();
    echo $book2->longgesPages();
    ?>
</body>

</html>