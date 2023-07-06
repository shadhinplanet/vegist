@if (Session('success'))
<script>
    let timerInterval
    Swal.fire({
        title: 'Success',
        html: '{{ Session('success') }}',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
           
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    })
</script>
@endif