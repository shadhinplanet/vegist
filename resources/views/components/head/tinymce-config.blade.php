{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}

<script src="{{ asset('backend/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    $(document).ready(function() {
        var useDarkMode = window.matchMedia('(prefers-color-scheme: oxide)').matches;
        tinymce.init({
            selector: 'textarea#tinyeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists link image',
            toolbar: 'undo redo | blocks | bold italic | link image alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            contextmenu: 'link image imagetools table',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            toolbar_mode: 'sliding',
            automatic_uploads: true,

            images_reuse_filename: true,
            image_advtab: false,
            height: 400,
            image_caption: true,
            branding: false,
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
        });
    });
</script>
