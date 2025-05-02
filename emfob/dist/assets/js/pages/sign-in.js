// Password Toggle Functionality
document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordInput = document.getElementById('password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    const icon = this.querySelector('i');
    icon.classList.toggle('bi-eye');
    icon.classList.toggle('bi-eye-slash');
});

// Role Selection Button Functionality with Animation
const candidateBtn = document.getElementById('candidateBtn');
const employerBtn = document.getElementById('employerBtn');
const freelancerBtn = document.getElementById('freelancerBtn');
const consultancyBtn = document.getElementById('consultancyBtn');
const loginCard = document.getElementById('login-card');

function resetButtons() {
    candidateBtn.classList.remove('btn-primary');
    candidateBtn.classList.add('btn-outline-primary');
    employerBtn.classList.remove('btn-primary');
    employerBtn.classList.add('btn-outline-primary');
    freelancerBtn.classList.remove('btn-primary');
    freelancerBtn.classList.add('btn-outline-primary');
    consultancyBtn.classList.remove('btn-primary');
    consultancyBtn.classList.add('btn-outline-primary');

    candidateBtn.classList.remove('btn-active');
    candidateBtn.classList.add('btn-inactive');
    employerBtn.classList.remove('btn-active');
    employerBtn.classList.add('btn-inactive');
    freelancerBtn.classList.remove('btn-active');
    freelancerBtn.classList.add('btn-inactive');
    consultancyBtn.classList.remove('btn-active');
    consultancyBtn.classList.add('btn-inactive');

}

function activateButton(button) {
    // Animate the card
    loginCard.classList.remove('active');
    setTimeout(() => {
        loginCard.classList.add('active'); // Re-add active class for the fade-in effect

        // Change button states
        resetButtons();
        button.classList.remove('btn-outline-primary');
        button.classList.add('btn-primary');
        button.classList.remove('btn-inactive');
        button.classList.add('btn-active');
    }, 200);  // Timeout for animation delay (smooth transition)
}

candidateBtn.addEventListener('click', function () {
    activateButton(candidateBtn);
});

employerBtn.addEventListener('click', function () {
    activateButton(employerBtn);
});

freelancerBtn.addEventListener('click', function () {
    activateButton(freelancerBtn);
});

consultancyBtn.addEventListener('click', function () {
    activateButton(consultancyBtn);
});