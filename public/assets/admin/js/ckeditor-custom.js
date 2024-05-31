ClassicEditor
    .create(document.querySelector('.ckeditor'), {
        language: {
            ui: 'fa',
            content: 'fa'
        },
        toolbar: {
            items: [
                'undo', 'redo',
                '|', 'heading',
                '|', 'bold', 'italic',
                '|', 'link', 'insertTable', 'mediaEmbed', 'blockQuote',
                '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
            ]
        }
    })
    .catch(error => {
        console.error(error);
    });

