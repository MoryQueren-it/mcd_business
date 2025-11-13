<?php
    session_start();

    if(!isset($_SESSION['numero'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's | Inscription - Connexion</title>
    <link rel="shortcut icon" href="./img/1759996755535.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="container">
         <!-- Background Elements  -->
        <div class="glow-orb glow-orb-1"></div>
        <div class="glow-orb glow-orb-2"></div>
        <div class="glow-orb glow-orb-3"></div>

         <!-- Logo  -->
        <div class="logo">
            <div><img class="logo-m" src="./img/1759996755535.png" alt=""></div>
        </div>

         <!-- Registration Form  -->
        <div class="form-container active" id="registerForm">
            <div class="bonus-badge">
                <div class="bonus-icon">🎁</div>
                <div class="bonus-text">
                    <span class="bonus-title">Welcome Bonus!</span>
                    <span class="bonus-subtitle">Gagnez 3000 MGA de bonus!</span>
                </div>
            </div>

            <h1 class="form-title">Inscription</h1>
            <p class="form-subtitle">Créez votre compte et gagnez votre bonus!</p>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative max-w-md" role="alert">
                    <span class="block sm:inline"><?php echo htmlspecialchars($_GET['error']);?></span>
                    </div>
                <?php } ?>

            <form class="auth-form" onsubmit="handleRegister(event)" action="./pages/home.php" method="GET">

                <div class="input-group">
                    <label for="reg-phone">Numéro de téléphone </label>
                    <input type="tel" 
                           id="reg-phone" 
                           name="numero"
                           placeholder="03X XX XXX XX" 
                           required>
                </div>

                <div class="input-group">
                    <label for="reg-password">Mot de passe</label>
                    <input type="password" 
                           id="reg-password" 
                           name="password"
                           placeholder="••••••••" required>
                           
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" 
                           id="terms" 
                           name="check"
                           required>
                    <label for="terms">J'accepte de recevoir des promotions et mises à jour</label>
                </div>

                <button type="submit" class="btn-primary">
                    <span>Réclamez mon bonus</span>
                    <div class="btn-glow"></div>
                </button>
            </form>

            <div class="form-footer">
                <p>Vous avez déjà un compte? <a href="#" onclick="switchToLogin(event)">Se connecter</a></p>
            </div>
        </div>

         <!-- Login Form  -->
            <div class="form-container" id="loginForm">
            <h1 class="form-title">Welcome Back</h1>
            <p class="form-subtitle">Connectez-vous pour avoir accès à vos récompenses</p>

            <form class="auth-form" onsubmit="handleLogin(event)">
                <div class="input-group">
                    <label for="reg-phone">Numéro de téléphone </label>
                    <input type="tel" 
                           id="reg-phone"
                           name="numero"
                           placeholder="03X XX XXX XX" 
                           required>
                </div>

                <div class="input-group">
                    <label for="login-password">Mot de passe</label>
                    <input type="password" 
                           id="login-password" 
                           name="password"
                           placeholder="••••••••"
                           required>
                </div>

                <div class="form-options">

                    <a href="./pages/forgot_password.php" class="forgot-link">mot de passe oublié?</a>
                </div>

                <button type="submit" class="btn-primary">
                    <span>Se connecter</span>
                    <div class="btn-glow"></div>
                </button>

            <div class="form-footer">
                <p>Vous n'avez pas encore de compte? <a href="#" onclick="switchToRegister(event)">S'inscrire</a></p>
            </div>
        </div>
        </form>

         <!-- Success Message  -->
        <div class="success-message" id="successMessage">
            <div class="success-icon">✓</div>
            <h2>Welcome to McDonald's!</h2>
            <p>Your FREE Big Mac is waiting for you</p>
            <div class="promo-code">
                <span class="promo-label">Your Code:</span>
                <span class="promo-value" id="promoCode">WELCOME2024</span>
            </div>
            <button class="btn-secondary" onclick="resetForms()">Close</button>
        </div>
    </div>

<script>

const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Change the eye icon
            if (type === 'password') {
                this.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                `;
            } else {
                this.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                `;
            }
        });
</script>
    <!-- <script src="./scripts/tailwind.js"></script> -->
    <script src="./scripts/script.js"></script>
</body>
</html>

<?php
    } else {
        header("Location: ./pages/home.php"); 
        exit;
    }
?>