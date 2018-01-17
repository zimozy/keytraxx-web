// $(function () {
//     // Initialize popovers
//     $('[data-toggle="popover"]').popover(
//         {
//             template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
//             content: '',
//             trigger: 'focus',
//             placement: 'left'
//         }
//     )
// });




$(document).ready(function() {



    var loggedIn = firebase.auth().currentUser;

    if (loggedIn) {
        // $('#sign-out-button').removeClass('d-none');
        // $('#sign-in-button').addClass('d-none');
        // // User is signed in.
        // var displayName = user.displayName;
        // var email = user.email;
        // var emailVerified = user.emailVerified;
        // var photoURL = user.photoURL;
        // var uid = user.uid;
        // var phoneNumber = user.phoneNumber;
        // var providerData = user.providerData;
        // user.getIdToken().then(function(accessToken) {
        // document.getElementById('sign-in-status').textContent = 'Signed in';
        // document.getElementById('sign-in').textContent = 'Sign out';
        // document.getElementById('account-details').textContent = JSON.stringify({
        //     displayName: displayName,
        //     email: email,
        //     emailVerified: emailVerified,
        //     phoneNumber: phoneNumber,
        //     photoURL: photoURL,
        //     uid: uid,
        //     accessToken: accessToken,
        //     providerData: providerData
        // }, null, '  ');
        // });
    } else { // not logged in
        console.log('test');
        // $('#sign-out-button').addClass('d-none');
        // $('#sign-in-button').removeClass('d-none');
        // User is signed out.
        document.getElementById('sign-in-status').textContent = 'Signed out';
        document.getElementById('sign-in').textContent = 'Sign in';
        document.getElementById('account-details').textContent = 'null';
    }


    $('#sign-out-button').click(function() {
        firebase.auth().signOut().then(function() {
            console.log('Signed Out');
        }, function(error) {
            console.error('Sign Out Error', error);
        });
    })
    
});