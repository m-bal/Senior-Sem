function toggleLogin() {

    var loginField = document.getElementById("loginFields");
    var loginForm = document.getElementById("loginForm");

    if (loginField.style.display == "none") {
        TweenMax.to(loginForm, 1, {opacity:"1.0"});
        TweenMax.to(loginField, 1, {height:"150px", margin:"10px auto 10px auto", padding:"10px 0 10px 0", display:"block"});

    } else {
        TweenMax.to(loginForm, 1,{opacity:"0.0"});
        TweenMax.to(loginField, 1,{height:"0.0", margin:"0 auto 0 auto", padding:"0 0 0 0", display:"none"});

    }
}

function toggleSignUp() {

    var signUpField = document.getElementById("signUpFields");
    var signUpForm = document.getElementById("signUpForm");

    if (signUpField.style.display == "none") {
        TweenMax.to(signUpForm, 1, {opacity:"1.0"});
        TweenMax.to(signUpField, 1, {height:"150px", margin:"10px auto 10px auto", padding:"10px 0 10px 0", display:"block"});
    } else {
        TweenMax.to(signUpForm, 1, {opacity:"0.0"});
        TweenMax.to(signUpField, 1,{height:"0.0", margin:"0 auto 0 auto", padding:"0 0 0 0", display:"none"});
    }
}
