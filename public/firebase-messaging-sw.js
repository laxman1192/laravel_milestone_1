// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');

importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: 'AIzaSyCCRlbKg8RymLXLLR5yK-0-w_BHbIYcD9A',
    authDomain: 'laravel-shop-a49f2.firebaseapp.com',
    databaseURL: 'https://laravel-shop-a49f2-default-rtdb.firebaseio.com/',
    projectId: 'laravel-shop-a49f2',
    storageBucket: 'laravel-shop-a49f2.appspot.com',
    messagingSenderId: '1013177282951',
    appId: '1:1013177282951:web:db8ff3be8595f40a286322',
    // measurementId: 'G-measurement-id',
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message received.", payload);
    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});
