<?php



class Db {

    // The database connection
    // Valid constant names
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PWD = '';
    const DBNAME = 'SeniorCare';

    protected static $connection;
    public $error = array("msg" => null);
    private $last_id = 0;

    /*
     * Call connect method, at the initialization for the class, so db connection made automatically
     * when we include this file
     */

    function __construct() {
        $this->connect();
        session_start();
    }

    /**
     * Connect to the database
     *
     * @return bool false on failure / mysqli MySQLi object instance on success
     */
    public function connect() {
        // Try and connect to the database
        if (!isset(self::$connection)) {
            self::$connection = new mysqli(self::HOST, self::USERNAME, self::PWD, self::DBNAME);
        }

        // If connection was not successful, handle the error
        if (self::$connection === false) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return $this->error();
        }
        return self::$connection;
    }

    //hash password
    public function makepwd($pwd) {
        return password_hash($pwd, PASSWORD_BCRYPT);
    }

    /**
     * Query the database
     *
     * @param $query The query string
     * @return mixed The result of the mysqli::query() function
     */
    public function query($query) {
        // Query the database
        $result = mysqli_query(self::$connection, $query);
        $this->last_id = self::$connection->insert_id;
        //mysqli_query($con, $sql);

        return $result;
    }

    /*
     * get teh number of rows retunred
     */

    public function numRows($result) {
        return mysqli_num_rows($result);
    }

    /*
     *   method to return teh last entred id ,get the user id
     */

    public function getUserID() {
        return $this->last_id;
    }

    /**
     * Fetch the last error from the database
     *
     * @return string Database error message
     */
    public function error() {
        return $connection->error;
    }




    /*
     *  redirect user to a page
     */

    public function redirect($location) {
        return header('location:' . $location);
    }

    /*
     * validate the user submitted data
     * server side
     */

    public function validate($uname, $pwd) {
        if (!isset($uname, $pwd)) {
            $error['msg'] = "Either Username or password is empty!";
            return false;
        } else if (strlen($uname) <= 4 || strlen($pwd) <= 4) {
            $error['msg'] = "Username and password must be greater than or equal 4 characters!";
            return false;
        }
        return true;
    }

    /*
     * set the msg for the appliaction
     */

    public function setMsg($msg) {
        $_SESSION['msg'] = $msg;
    }

    /*
     * method to return the total num of part
     */



}
