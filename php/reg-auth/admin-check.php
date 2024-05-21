<?php
if (isset($_SESSION['user-role'])) {
        if(!($_SESSION['user-role'] == 'admin')){
            unset($_SESSION['auth']);
            unset($_SESSION['user-name']);
            unset($_SESSION['user-role']);
            $_SESSION['forse-auth'] = true;
            header('Location: /index.php?reg=1');
            exit();
        };
        
}
else{
    $_SESSION['forse-auth'] = true;
    header('Location: /index.php?reg=1');
    exit();
}