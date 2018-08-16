// Load Permissions for push notifications

Notification.requestPermission(function(status) {
    console.log('Notification permission status:', status);
});

// Enable tooltips
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>