window.Echo.channel('testing-channel')
.listen('Testing', e => {
    console.log('Received:', e);
});






document.addEventListener('click', async function (e) {
    const chatHead = e.target.closest('.user_contact');
    if (!chatHead) return;
    e.preventDefault();

    const res = await fetch('/chat/getChatWindow');
    const html = await res.text();

    const container = document.getElementById('chat-messagebox-container');
    if (!container) {
        console.error('container not found');
        return;
    }

    container.innerHTML = html;
    // console.log(html);
});