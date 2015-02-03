<?

Class SimpleConnection
{
protected $host = “localhost”;
protected $user = “postgres”;
protected $pswd = “postgres”;
protected $dbname = “test”;
protected $con = null;

function __construct(){} //empty construct, we dont need it here

#method that starts the conn
function open(){
$this->con = @pg_connect(“host=$this->host user=$this->user
password=$this->pswd dbname=$this->dbname“);
return $this->con;
}

#method that closes the conn
function close(){
@pg_close($this->con);
}

#method that checks the conn, not user-friendly, just for our debbuging
function statusCon(){
if(!$this->con){
echo “<h3>Could not connect to Database [$this->dbname] in [$this->host].</h3>”;
exit;
}
else{
echo “<h3>Connection stablished for DB [$this->dbname] in [$this->host].</h3>”;
}
}
}

?>
