<?
#includes class Connection, its in the same Dir
include(‘connection.class.php’);

#create instance of conn
$minhaConexao = new Conexao();

#call open method for conn class
$minhaConexao->open();

#lets see if its working
$minhaConexao->statusCon();

#call close method 
$minhaConexao->close();

#lets check here if its really closed
$minhaConexao->statusCon();

//todo: test of conn
?>
