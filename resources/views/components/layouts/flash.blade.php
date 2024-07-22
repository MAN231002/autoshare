
    @if(session()->has('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-bottom-right",
                    "onclick": null,
                    "showDuration": "1000",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["{{ session('alert-type') ?? 'success' }}"]("{{ session('success') }}");
                // toastr[success]("Gnome & Growl type non-blocking notifications", "Toastr Notifications")
            });
        </script>
    @endif