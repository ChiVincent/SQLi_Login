<?php


try {
    if(!isset($_POST['username']) || !isset($_POST['password']))
        throw new Exception('請輸入帳號與密碼');

    $u = str_replace('\'', '\\\'', $_POST['username']);
    $p = md5($_POST['password']);
    echo "<pre>SQL: SELECT * FROM users WHERE username='$u'</pre>";

    $dbh = new PDO('mysql:dbname=TDOHVulnerabilityVM;host=127.0.0.1;charset=utf8mb4', 'tdoh', 'HrjIsAFatCracker');
    $sth = $dbh->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
    $result = $sth->fetchObject();

    if(!$result)
        throw new Exception('無此帳號或密碼');

    if(!session_id())
        session_start();

    $_SESSION['auth'] = $result->username;
    header('Location: home.php');



} catch( PDOException $e ) {
    header('Location: index.php?msg=資料庫連線錯誤');
} catch( Exception $e ) {
    echo $e->getMessage();
}