function zapisatsa() {
    window.location.href = 'https://www.gospeak.az/purchase';
}
function zapisatsa1() {
    window.location.href = 'https://www.gospeak.az/#tariffs';
}
function about_course() {
    window.location.href = 'https://www.gospeak.az/about-course#tariffs';
}


async function askjs(e) {
    e.preventDefault();

    let response = await fetch('/assets/ask.php', {
        method: 'POST',
        body: new FormData(form)
    });
    document.querySelector('.modal1').classList.add('active');
    document.querySelector('.js-overlay-modal').classList.add('active');
};

{
    form.onsubmit = askjs;
}
