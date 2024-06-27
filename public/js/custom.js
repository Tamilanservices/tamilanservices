(() => {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()

  $(document).on("click",".signup-form",function() {
    $('.login').addClass('d-none');
    $('.signup').removeClass('d-none');
    $('#login_popup .modal-title').text('Register');
  });

  $(document).on("click",".login-form",function() {
    $('.login').removeClass('d-none');
    $('.signup').addClass('d-none');
    $('#login_popup .modal-title').text('Login');
  });