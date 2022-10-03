<?php
  session_start();
  ?>

  <form method="POST" >
     <input type="text" name="username" placeholder="username"> <br> <br>
     <input type="password" name="password_kamu" placeholder="password"> <br> <br>

     <input type="submit" name="masuk" value="login">

</form>
<?php
    if(isset($_POST['masuk'])) {

        $username = $_POST['username'];
        $password_kamu = $_POST['password_kamu'];
        
        if($username == 'Nina'){
        if($password_kamu == 'XIIRPL2'){
            $_SESSION['user'] = $username;
              header ('location: beranda.php');
                }else{  
                    echo "
                    <script>
                     alert(' PASSWORD SALAH ...!! ');
                     </script>
                     ";
                    }

                }else{
                    echo "
                    <script>
                    alert(' USERNAME TIDAK TERDAFTAR..!!');
                    </script>
                    ";
                }
                if($username == 'khafi'){
                    if($password_kamu == 'XIIRPL2'){
                        $_SESSION['user'] = $username;
                          header ('location: beranda.php');
                            }else{  
                                echo "
                                <script>
                                 alert(' PASSWORD SALAH ...!! ');
                                 </script>
                                 ";
                                }
            
                            }else{
                                echo "
                                <script>
                                alert(' USERNAME TIDAK TERDAFTAR..!!');
                                </script>
                                ";
                            } 
                            if($username == 'haikal'){
                                if($password_kamu == 'XIIRPL2'){
                                    $_SESSION['user'] = $username;
                                      header ('location: beranda.php');
                                        }else{  
                                            echo "
                                            <script>
                                             alert(' PASSWORD SALAH ...!! ');
                                             </script>
                                             ";
                                            }
                        
                                        }else{
                                            echo "
                                            <script>
                                            alert(' USERNAME TIDAK TERDAFTAR..!!');
                                            </script>
                                            ";
                                        }           
            }
            
            ?>