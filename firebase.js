
// function phoneAuth() {
//     //get the number
//     var phone_number = document.getElementById('phone').value;
//     // alert(number);
//     //it takes two parameter first one is number and second one is recaptcha
//     firebase.auth().signInWithPhoneNumber(phone_number, window.recaptchaVerifier).then(function(confirmationResult) {
//         //s is in lowercase
//         window.confirmationResult = confirmationResult;
//         coderesult = confirmationResult;
//         console.log(coderesult);
//         alert("Message sent");
//     }).catch(function(error) {
//         alert(error.message);
//     });
// }

// function codeverify() {
//     var code = document.getElementById('verificationCode').value;


//     coderesult.confirm(code).then(function(result) {
//         alert("Successfully registered");
//         var user = result.user;
//         console.log(user);
//     }).catch(function(error) {
//         alert(error.message);
//     });
// }