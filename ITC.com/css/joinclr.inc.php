<?php
  
  if (isset($_POST["joinBtn"])){require 'ITCdbh.inc.php';
                                $USERNAME = $_POST['usrnm'];
                                $MAIL = $_POST['usrmail'];
                                $PASSWORD = $_POST['usrpwd'];
                                $PASSWORDRPT = $_POST['pwdrpt'];
                                if (empty $USERNAME || $MAIL || $PASSWORD || $PASSWORDRPT){header("Location=../ITCjoin.php?error=emptyfields&uid=".$USERNAME."&mail=".$MAIL);
                                	                                                       exit();
                                }
                                else if(!filter_var($MAIL, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/".$USERNAME)){header("Location=../ITCjoin.php?error=invalidmail&uid=".$USERNAME);
                                                                                                                                exit();
                                }
                                else if(!filter_var($MAIL, FILTER_VALIDATE_EMAIL)){header("Location=../ITCjoin.php?error=invalidmail&uid=".$USERNAME);
                                                                                   exit();
                                }
                                else if (!preg_match ("/^[a-zA-z0-9]*$/", $USERNAME)){header ("Location=../ITCjoin.php?error=invaliduid&mail=".$MAIL);
                                                                                      exit();
                                }
                                else if ($PASSWORD !== $PASSWORDRPT){header("Location=../ITCjoin.php?error=passwordmatch=".$USERNAME.$MAIL)
                                                                     exit();	
                                }




}
?>