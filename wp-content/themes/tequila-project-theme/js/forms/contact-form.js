$(document).ready(function () {
    $('#contactForm').on('submit', function () {
      $('.outputMessage').removeClass('text-danger');
      $('.outputMessage').text('Submitting...');

      var form = $(this);
      $.ajax({
        url: "https://www.dataxsolution.net/sendemails/contact-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
          if (result !== 'success') {
            if (!$('#name').val()) {
              $('.nameErr').text('This field is required');
              $('#name').removeClass('border-0');
              $('#name').addClass('border-bottom border-danger');
            } else {
              $('.nameErr').text('');
              $('#name').removeClass('border-danger');
              $('#name').addClass('border-bottom border-success');
            }

            if (!$('#email').val()) {
              $('.emailErr').text('This field is required');
              $('#email').removeClass('border-0');
              $('#email').addClass('border-bottom border-danger');
            } else {
              $('.emailErr').text('');
              $('#email').removeClass('border-danger');
              $('#email').addClass('border-bottom border-success');
            }

            if (!$('#services').val()) {
              $('.servicesErr').text('This field is required');
              $('#services').removeClass('border-0');
              $('#services').addClass('border-bottom border-danger');
            } else {
              $('.servicesErr').text('');
              $('#services').removeClass('border-danger');
              $('#services').addClass('border-bottom border-success');
            }

            if (!$('#subject').val()) {
              $('.subjectErr').text('This field is required');
              $('#subject').removeClass('border-0');
              $('#subject').addClass('border-bottom border-danger');
            } else {
              $('.subjectErr').text('');
              $('#subject').removeClass('border-danger');
              $('#subject').addClass('border-bottom border-success');
            }

            if (!$('#message').val()) {
              $('.messageErr').text('This field is required');
              $('#message').removeClass('border-0');
              $('#message').addClass('border-bottom border-danger');
            } else {
              $('.messageErr').text('');
              $('#message').removeClass('border-danger');
              $('#message').addClass('border-bottom border-success');
            }

            $('.outputMessage').addClass('text-danger');
            $('.outputMessage').text('One or more fields are required!');
          } else {
            $('.nameErr').text('');
            $('#name').val('');
            $('#name').removeClass('border-danger border-success');

            $('.emailErr').text('');
            $('#email').val('');
            $('#email').removeClass('border-danger border-success');

            $('.servicesErr').text('');
            $('#services').val(0);
            $('#services').removeClass('border-danger border-success');

            $('.subjectErr').text('');
            $('#subject').val('');
            $('#subject').removeClass('border-danger border-success');

            $('.messageErr').text('');
            $('#message').val('');
            $('#message').removeClass('border-danger border-success');

            $('.outputMessage').addClass('text-success');
            $('.outputMessage').text('Form has been submitted successfully. We will be back shortly!');
          }
        }
      });

      return false;
    });
});