window.Echo.channel('testing-channel')
.listen('Testing', e => {
    console.log('Received:', e);
});