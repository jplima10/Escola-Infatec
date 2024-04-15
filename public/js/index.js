    const createAccountLink = document.getElementById('create-account-link');
    const loginForm = document.getElementById('login-form');
    const createAccountForm = document.getElementById('create-account-form');
    const forgotPasswordLink = document.getElementById('forgot-password-link');
    const forgotPasswordForm = document.getElementById('forgot-password-form');
    const returnToLoginLink = document.getElementById('return-to-login-link');
    const loginLink = document.getElementById('login-link');

    createAccountLink.addEventListener('click', function(event) {
        event.preventDefault();
        loginForm.classList.add('hidden');
        createAccountForm.classList.remove('hidden');
    });

    forgotPasswordLink.addEventListener('click', function(event) {
        event.preventDefault();
        loginForm.classList.add('hidden');
        forgotPasswordForm.classList.remove('hidden');
    });

    returnToLoginLink.addEventListener('click', function(event) {
        event.preventDefault();
        loginForm.classList.remove('hidden');
        forgotPasswordForm.classList.add('hidden');
    });

    loginLink.addEventListener('click', function(event) {
        event.preventDefault();
        loginForm.classList.remove('hidden');
        createAccountForm.classList.add('hidden');
    });


function confirmDelete() {
    if (confirm('Tem certeza que deseja excluir este registro?')) {
        document.getElementById('delete-form').submit();
    }
}

function toggleOptions() {
    var options = document.getElementById("options");
    if (options.style.display === "block") {
        options.style.display = "none"; // Se as opções estão visíveis, oculta
    } else {
        options.style.display = "block"; // Se as opções estão ocultas, exibe
    }
}