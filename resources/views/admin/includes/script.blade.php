<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/kaiadmin.min.js')}}"></script>
<script src="{{asset('assets/js/kaiadmin.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollbar.min.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/no-origin/tinymce/6.8.5-39/tinymce.min.js"></script>

<script>
  tinymce.init({
    selector: '#myTextarea',
    plugins: 'image link media table code lists',
    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | image link media table | code',
    menubar: 'file edit insert view format table tools help',
    branding: false,

    /* 👇 Enable image upload from local */
    images_upload_url: '/upload', // ✅ Laravel ya PHP ka route yahaan hona chahiye
    automatic_uploads: true,
    images_upload_handler: function (blobInfo, success, failure) {
      const formData = new FormData();
      formData.append('file', blobInfo.blob());

      fetch('/upload', { // ✅ Is URL par Laravel me upload handle hoga
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
      })
      .then(res => res.json())
      .then(data => success(data.location)) // 👈 Laravel return kare image URL
      .catch(() => failure('Image upload failed'));
    }
  });
</script>