// name:Mansour Ahmed Aldhahri
// ID:2036538
// SECTION: CS1


// name:Musab Hassan Alsobhi
// ID:2035566
// SECTION: CS1


document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        let isValid = true;

        // Validate First Name
        if (!validateNotEmpty('firstName')) {
            isValid = false;
        }

        // Validate Last Name
        if (!validateNotEmpty('lastName')) {
            isValid = false;
        }

        // Validate Email
        if (!validateEmail('email')) {
            isValid = false;
        }

        // Validate Phone
        if (!validatePhone('phone')) {
            isValid = false;
        }

        return isValid;
    }

    function validateNotEmpty(fieldId) {
        const field = document.getElementById(fieldId);
        if (field.value.trim() === '') {
            alert(fieldId + ' cannot be empty');
            return false;
        }
        return true;
    }

    function validateEmail(fieldId) {
        const field = document.getElementById(fieldId);
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!regex.test(field.value.trim())) {
            alert('Invalid email address');
            return false;
        }
        return true;
    }

    function validatePhone(fieldId) {
        const field = document.getElementById(fieldId);
        const regex = /^[0-9]{10}$/;
        if (!regex.test(field.value.trim())) {
            alert('Invalid phone number, must be 10 digits');
            return false;
        }
        return true;
    }
});
