<?php
  session_start();
    mysql_connect( "localhost", "root", "" );
    mysql_select_db( "database_sistem" ) or die ( "<script>alert('Database tidak di temukan');</script>" );
?>