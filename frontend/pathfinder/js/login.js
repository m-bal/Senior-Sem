function toggleLogin() {

    var loginField = document.getElementById("loginFields");
    var loginForm = document.getElementById("loginForm");
    var btext = document.getElementById("btext");

    if (loginField.style.display == "none") {
        TweenMax.to(loginForm, 1, {opacity:"1.0", height:"100%", padding:"5px 5px 5px 5px"});
        TweenMax.to(loginField, 1, {height:"30%", margin:"0% auto 0% auto", padding:"1% 0 0 0", display:"block", minHeight:"220px"});
        TweenMax.to(btext, 1, {margin:"0 0 0 1%"});

    } else {
        TweenMax.to(loginForm, 1,{opacity:"0.0", height:"0%", padding:"0 0 0 0"});
        TweenMax.to(loginField, 1,{height:"0%", margin:"0% auto -1% auto", padding:"0% 0 0 0", display:"none", minHeight:"0px"});
        TweenMax.to(btext, 1, {margin:"1% 0 0 1%"});

    }
}

function toggleSignUp() {

    var signUpField = document.getElementById("signUpFields");
    var signUpForm = document.getElementById("signUpForm");

    if (signUpField.style.display == "none") {
        TweenMax.to(signUpForm, 1, {opacity:"1.0", height:"100%"});
        TweenMax.to(signUpField, 1, {height:"35%", margin:"0 auto 0 auto", padding:"1% 0 0 0", display:"block", minHeight:"300px"});
    } else {
        TweenMax.to(signUpForm, 1, {opacity:"0.0", height:"0%"});
        TweenMax.to(signUpField, 1,{height:"0%", margin:"0% auto 0% auto", padding:"0 0 0 0", display:"none", minHeight:"0px"});
    }
}
