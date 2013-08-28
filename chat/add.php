<?php
require_once("DB.php");

$db =& DB::Connect( 'mysql://root@localhost/chat', array() );
if (PEAR::isError($db)) { die($db->getMessage()); }

$sth = $db->prepare( 'INSERT INTO messages VALUES ( null, ?, ? )' );
$db->execute( $sth, array( $_SESSION['user'], $_POST['message'] ) );
?>