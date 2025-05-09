

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Initialize Echo with Pusher
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '65e78f6836204dacd503',
    cluster: 'eu',
    forceTLS: true,
    encrypted: true,
    authEndpoint: '/broadcasting/auth',
    auth: {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content,
        },
    },
    disableStats: true
});

// Debugging
window.Echo.connector.pusher.connection.bind('connected', () => {
    console.log('Pusher connected successfully!');
});

