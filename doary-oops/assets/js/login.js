$(document).ready(() => {
    const showSignup = document.getElementById('showSignup');
    const showLogin = document.getElementById('showLogin');

    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');

    if(showSignup !== null && loginForm !== null && signupForm !== null){
        showSignup.addEventListener('click', function(e) {
            e.preventDefault();
            loginForm.classList.remove('active');
            signupForm.classList.add('active');
        });
    }

    if(showLogin !== null && loginForm !== null && signupForm !== null){
        showLogin.addEventListener('click', function(e) {
            e.preventDefault();
            signupForm.classList.remove('active');
            loginForm.classList.add('active');
        });
    }
    

    $("#signup").click(() => {
        $('#nameWarning, #signupEmailWarning, #signupPasswordWarning, #repeatPasswordWarning').hide();
        const email = $('#signupEmail').val();
        const password = $('#signupPassword').val();
        const name = $('#name').val();
        const repeatPassword = $('#repeatPassword').val();
        if(name == '' || (name !== undefined && name.length < 3)){
            $('#nameWarning').show();
            return
        }
        if(email == '' || !Validator.isValidateEmail(email)){
            $('#signupEmailWarning').show();
            return
        }
        if(password == '' || password.length < 3){
            $('#signupPasswordWarning').show();
            return
        }

        if(repeatPassword !== password){
            $('#repeatPasswordWarning').show();
            return
        }
        var data = {name, email, password, repeatPassword}
        ajaxPost(API_SIGN_UP, data, function(resp){
            console.log(resp);
        })
    });

    $("#login").click(() => {
        $('#loginEmailWarning').hide();
        $('#loginPasswordWarning').hide();
        const email = $('#loginEmail').val();
        const password = $('#loginPassword').val();
        if(email == '' || !Validator.isValidateEmail(email)){
            $('#loginEmailWarning').show();
            return
        }
        if(password == '' || password.length < 3){
            $('#loginPasswordWarning').show();
            return
        }
        console.log(email, password);
    });
})


