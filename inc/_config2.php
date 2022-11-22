<?php 

class DBConnection{
    protected $server = "Localhost";
    protected $user = "root";
    protected $password = "";
    protected $db = "users";
// thats all

    public function __construct()
    {
        // return  new mysqli($this->server, $this->user, $this->password, $this->db);
        echo "Hello";
        $sql = mysqli_connect("Localhost", "root", "", "users");
        return $sql;
    }
}

// are u here?
// yes
// av u done any work in php using phpmyadm
// no this my first work on phpadmin AHDFKLASDFHKLAHDFLKAHSDFLK okay
// something is wrong, the sql connection is on line 14 not 12.
//oh so sorry
