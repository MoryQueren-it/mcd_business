<?php
    session_start();

    if(!isset($_SESSION['numero'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's | Mot de passe oublié</title>
    <link rel="shortcut icon" href="../img/1759996755535.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
         <!-- Background Elements  -->
        <div class="glow-orb glow-orb-1"></div>
        <div class="glow-orb glow-orb-2"></div>
        <div class="glow-orb glow-orb-3"></div>

         <!-- Logo  -->
        <div class="logo">
            <div><img class="logo-m" src="../img/1759996755535.png" alt=""></div>
        </div>

         <!-- Registration Form  -->
        <div class="form-container active" id="registerForm">

            <h1 class="form-title">Modifiez votre mot de passe</h1>
        

            <form class="auth-form" onsubmit="handleRegister(event)" action="./pages/home.php" method="GET">

                <div class="input-group">
                    <label for="reg-phone">Numéro de téléphone </label>
                    <input type="tel" 
                           id="reg-phone" 
                           value="numero" 
                           name="numero"
                           placeholder="03X XX XXX XX" 
                           required>
                </div>

                <div class="input-group">
                    <label for="reg-password">Nouveau mot de passe</label>
                    <input type="password" 
                           id="reg-password" 
                           name="password"
                           placeholder="••••••••" required>
                </div>
                 <div class="input-group">
                    <label for="reg-password">Confirmez le mot de passe</label>
                    <input type="password" 
                           id="reg-password" 
                           name="password"
                           placeholder="••••••••" required>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" 
                           id="terms" 
                           value="check"
                           name="check"
                           required>
                    <label for="terms">Se souvenir</label>
                </div>

                

                <button type="submit" class="btn-primary">
                    <span>Confirmer</span>
                    <div class="btn-glow"></div>
                </button>
            </form>

        </div>

    <!-- <script src="./scripts/tailwind.js"></script> -->
</body>
</html>

<?php
    } else {
        header("Location: ./pages/home.php"); 
        exit;
    }
?>