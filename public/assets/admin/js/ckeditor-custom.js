ClassicEditor
    .create(document.querySelector('#editor'), {
        language: {
            ui: 'en',
            content: 'ar'
        }
    })
    .catch(error => {
        console.error(error);
    });
