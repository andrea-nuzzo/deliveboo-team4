
// Validazione Password (Register)
window.onload = function () {
    var txtPassword = document.getElementById("password");
    var txtConfirmPassword = document.getElementById("password-confirm");
    txtPassword.onchange = ConfirmPassword;
    txtConfirmPassword.onkeyup = ConfirmPassword;

    function ConfirmPassword() {
        txtConfirmPassword.setCustomValidity("");
        if (txtPassword.value != txtConfirmPassword.value) {
            txtConfirmPassword.setCustomValidity("Le Password non corrispondono");
        }
    }
}


// Validazione Check Boxes (Register)
const form = document.querySelector('#sectionForm');
const checkboxes = form.querySelectorAll('input[type=checkbox]');
const checkboxLength = checkboxes.length;
const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

function init() {
    if (firstCheckbox) {
        for (let i = 0; i < checkboxLength; i++) {
            checkboxes[i].addEventListener('change', checkValidity);
        }
        checkValidity();
    }
}

function isChecked() {
    for (let i = 0; i < checkboxLength; i++) {
        if (checkboxes[i].checked) return true;
    }
    return false;
}

function checkValidity() {
    const errorMessage = !isChecked() ? 'Seleziona almeno una tipologia' : '';
    firstCheckbox.setCustomValidity(errorMessage);
}

init();

