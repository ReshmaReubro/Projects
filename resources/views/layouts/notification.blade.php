<script>

    @if($errors->any())
    {
        toastr.error("Oops! Something went wrong");

        

    }
    @endif
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            scrollTo('contact-me');
            break;
    }
  @endif

  function scrollTo(hash) {
    location.hash = "#" + hash;
}
</script>