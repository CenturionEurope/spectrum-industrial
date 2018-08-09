// Load Permissions for push notifications

Notification.requestPermission(function(status) {
    console.log('Notification permission status:', status);
});

