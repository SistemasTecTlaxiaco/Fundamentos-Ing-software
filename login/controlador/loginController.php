  

  <?php 

require_once '../modelo/Usuario.php';
    if(isset($_POST['iniciar'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        if(empty($username) || empty($password)){
           
            echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio</div>';
          
        }else{
            $user = new User;

            if($user->getUser($username,$password)){
                session_start();
                $_SESSION['usuario'] = $username;
                header('Location: ../vista/cliente.php');
            }else{
             echo '<div class="alert alert-danger">Usuario no existe</div>';
            }
        }
        

    }
?> 
