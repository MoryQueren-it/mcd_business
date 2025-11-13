        // Form switching functions
function switchToLogin(event) {
    event.preventDefault();
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');
    
    registerForm.classList.remove('active');
    setTimeout(() => {
        loginForm.classList.add('active');
    }, 100);
}

function switchToRegister(event) {
    event.preventDefault();
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');
    
    loginForm.classList.remove('active');
    setTimeout(() => {
        registerForm.classList.add('active');
    }, 100);
}

// Handle registration
function handleRegister(event) {
    // Show success message
    const registerForm = document.getElementById('registerForm');
    const successMessage = document.getElementById('successMessage');
    
    registerForm.classList.remove('active');
    setTimeout(() => {
        successMessage.classList.add('active');
    }, 300);
    
    // Reset form
    event.target.reset();
}

// Handle login
function handleLogin(event) {
    event.preventDefault();
    
    // Reset form
    event.target.reset();
}

// Reset forms
function resetForms() {
    const successMessage = document.getElementById('successMessage');
    const registerForm = document.getElementById('registerForm');
    
    successMessage.classList.remove('active');
    setTimeout(() => {
        registerForm.classList.add('active');
    }, 300);
}

// Add input animations
