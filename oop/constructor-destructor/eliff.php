<?php
class User {

    private $name = 'Eliff';
    private $address = 'Bogor ';

    public function showBio()
    {
        echo "Nama saya $this->name dan saya berasal dari $this->address";
    }

    //destructor
    public function __destruct()
    {
        echo 'ini dari destruktor ';
    }

    // constructor
    public function __construct()
    {
        echo 'ini dari konstruktor ';
    }
}

// membuat object $eliff
$eliff = new User();

// panggil method dari object $eliff'
echo $eliff->showBio();
?>