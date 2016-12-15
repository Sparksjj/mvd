<div class="alert {{session('type')}} text-center" id="flash_note">
      {{session('flash_note')}}
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
  setTimeout(function() {  
    $('#flash_note').fadeOut(300);
  }, 6000);
})
</script>