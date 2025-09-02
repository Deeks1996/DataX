$(document).ready(function () {
    $('#enrolmentFormSubmit0').on('submit', function () {
        $('.outputMessage0').removeClass('text-danger');
        $('.outputMessage0').addClass('mb-4');
        $('.outputMessage0').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name0').val()) {
                    $('.nameErr0').text('This field is required');
                    $('#name0').removeClass('border-0');
                    $('#name0').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr0').text('');
                    $('#name0').removeClass('border-danger');
                    $('#name0').addClass('border-bottom border-success');
                }

                if (!$('#email0').val()) {
                    $('.emailErr0').text('This field is required');
                    $('#email0').removeClass('border-0');
                    $('#email0').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr0').text('');
                    $('#email0').removeClass('border-danger');
                    $('#email0').addClass('border-bottom border-success');
                }

                if (!$('#company0').val()) {
                    $('.companyErr0').text('This field is required');
                    $('#company0').removeClass('border-0');
                    $('#company0').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr0').text('');
                    $('#company0').removeClass('border-danger');
                    $('#company0').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle0').val()) {
                    $('.jobTitleErr0').text('This field is required');
                    $('#jobTitle0').removeClass('border-0');
                    $('#jobTitle0').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr0').text('');
                    $('#jobTitle0').removeClass('border-danger');
                    $('#jobTitle0').addClass('border-bottom border-success');
                }

                if (!$('#mobile0').val()) {
                    $('.mobileErr0').text('This field is required');
                    $('#mobile0').removeClass('border-0');
                    $('#mobile0').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr0').text('');
                    $('#mobile0').removeClass('border-danger');
                    $('#mobile0').addClass('border-bottom border-success');
                }

                if (!$('#country0').val()) {
                    $('.countryErr0').text('This field is required');
                    $('#country0').removeClass('border-0');
                    $('#country0').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr0').text('');
                    $('#country0').removeClass('border-danger');
                    $('#country0').addClass('border-bottom border-success');
                }

                $('.outputMessage0').addClass('text-danger mb-4');
                $('.outputMessage0').text('One or more fields are required!');
            } else {
                $('.nameErr0').text('');
                $('#name0').val('');
                $('#name0').removeClass('border-danger border-success');

                $('.emailErr0').text('');
                $('#email0').val('');
                $('#email0').removeClass('border-danger border-success');

                $('.companyErr0').text('');
                $('#company0').val('');
                $('#company0').removeClass('border-danger border-success');

                $('.jobTitleErr0').text('');
                $('#jobTitle0').val('');
                $('#jobTitle0').removeClass('border-danger border-success');

                $('.mobileErr0').text('');
                $('#mobile0').val('');
                $('#mobile0').removeClass('border-danger border-success');

                $('.countryErr0').text('');
                $('#country0').val(0);
                $('#country0').removeClass('border-danger border-success');

                $('.outputMessage0').addClass('text-success mb-4');
                $('.outputMessage0').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit1').on('submit', function () {
        $('.outputMessage1').removeClass('text-danger');
        $('.outputMessage1').addClass('mb-4');
        $('.outputMessage1').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name1').val()) {
                    $('.nameErr1').text('This field is required');
                    $('#name1').removeClass('border-0');
                    $('#name1').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr1').text('');
                    $('#name1').removeClass('border-danger');
                    $('#name1').addClass('border-bottom border-success');
                }

                if (!$('#email1').val()) {
                    $('.emailErr1').text('This field is required');
                    $('#email1').removeClass('border-0');
                    $('#email1').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr1').text('');
                    $('#email1').removeClass('border-danger');
                    $('#email1').addClass('border-bottom border-success');
                }

                if (!$('#company1').val()) {
                    $('.companyErr1').text('This field is required');
                    $('#company1').removeClass('border-0');
                    $('#company1').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr1').text('');
                    $('#company1').removeClass('border-danger');
                    $('#company1').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle1').val()) {
                    $('.jobTitleErr1').text('This field is required');
                    $('#jobTitle1').removeClass('border-0');
                    $('#jobTitle1').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr1').text('');
                    $('#jobTitle1').removeClass('border-danger');
                    $('#jobTitle1').addClass('border-bottom border-success');
                }

                if (!$('#mobile1').val()) {
                    $('.mobileErr1').text('This field is required');
                    $('#mobile1').removeClass('border-0');
                    $('#mobile1').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr1').text('');
                    $('#mobile1').removeClass('border-danger');
                    $('#mobile1').addClass('border-bottom border-success');
                }

                if (!$('#country1').val()) {
                    $('.countryErr1').text('This field is required');
                    $('#country1').removeClass('border-0');
                    $('#country1').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr1').text('');
                    $('#country1').removeClass('border-danger');
                    $('#country1').addClass('border-bottom border-success');
                }

                $('.outputMessage1').addClass('text-danger mb-4');
                $('.outputMessage1').text('One or more fields are required!');
            } else {
                $('.nameErr1').text('');
                $('#name1').val('');
                $('#name1').removeClass('border-danger border-success');

                $('.emailErr1').text('');
                $('#email1').val('');
                $('#email1').removeClass('border-danger border-success');

                $('.companyErr1').text('');
                $('#company1').val('');
                $('#company1').removeClass('border-danger border-success');

                $('.jobTitleErr1').text('');
                $('#jobTitle1').val('');
                $('#jobTitle1').removeClass('border-danger border-success');

                $('.mobileErr1').text('');
                $('#mobile1').val('');
                $('#mobile1').removeClass('border-danger border-success');

                $('.countryErr1').text('');
                $('#country1').val(0);
                $('#country1').removeClass('border-danger border-success');

                $('.outputMessage1').addClass('text-success mb-4');
                $('.outputMessage1').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit2').on('submit', function () {
        $('.outputMessage2').removeClass('text-danger');
        $('.outputMessage2').addClass('mb-4');
        $('.outputMessage2').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name2').val()) {
                    $('.nameErr2').text('This field is required');
                    $('#name2').removeClass('border-0');
                    $('#name2').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr2').text('');
                    $('#name2').removeClass('border-danger');
                    $('#name2').addClass('border-bottom border-success');
                }

                if (!$('#email2').val()) {
                    $('.emailErr2').text('This field is required');
                    $('#email2').removeClass('border-0');
                    $('#email2').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr2').text('');
                    $('#email2').removeClass('border-danger');
                    $('#email2').addClass('border-bottom border-success');
                }

                if (!$('#company2').val()) {
                    $('.companyErr2').text('This field is required');
                    $('#company2').removeClass('border-0');
                    $('#company2').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr2').text('');
                    $('#company2').removeClass('border-danger');
                    $('#company2').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle2').val()) {
                    $('.jobTitleErr2').text('This field is required');
                    $('#jobTitle2').removeClass('border-0');
                    $('#jobTitle2').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr2').text('');
                    $('#jobTitle2').removeClass('border-danger');
                    $('#jobTitle2').addClass('border-bottom border-success');
                }

                if (!$('#mobile2').val()) {
                    $('.mobileErr2').text('This field is required');
                    $('#mobile2').removeClass('border-0');
                    $('#mobile2').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr2').text('');
                    $('#mobile2').removeClass('border-danger');
                    $('#mobile2').addClass('border-bottom border-success');
                }

                if (!$('#country2').val()) {
                    $('.countryErr2').text('This field is required');
                    $('#country2').removeClass('border-0');
                    $('#country2').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr2').text('');
                    $('#country2').removeClass('border-danger');
                    $('#country2').addClass('border-bottom border-success');
                }

                $('.outputMessage2').addClass('text-danger mb-4');
                $('.outputMessage2').text('One or more fields are required!');
            } else {
                $('.nameErr2').text('');
                $('#name2').val('');
                $('#name2').removeClass('border-danger border-success');

                $('.emailErr2').text('');
                $('#email2').val('');
                $('#email2').removeClass('border-danger border-success');

                $('.companyErr2').text('');
                $('#company2').val('');
                $('#company2').removeClass('border-danger border-success');

                $('.jobTitleErr2').text('');
                $('#jobTitle2').val('');
                $('#jobTitle2').removeClass('border-danger border-success');

                $('.mobileErr2').text('');
                $('#mobile2').val('');
                $('#mobile2').removeClass('border-danger border-success');

                $('.countryErr2').text('');
                $('#country2').val(0);
                $('#country2').removeClass('border-danger border-success');

                $('.outputMessage2').addClass('text-success mb-4');
                $('.outputMessage2').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit3').on('submit', function () {
        $('.outputMessage3').removeClass('text-danger');
        $('.outputMessage3').addClass('mb-4');
        $('.outputMessage3').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name3').val()) {
                    $('.nameErr3').text('This field is required');
                    $('#name3').removeClass('border-0');
                    $('#name3').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr3').text('');
                    $('#name3').removeClass('border-danger');
                    $('#name3').addClass('border-bottom border-success');
                }

                if (!$('#email3').val()) {
                    $('.emailErr3').text('This field is required');
                    $('#email3').removeClass('border-0');
                    $('#email3').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr3').text('');
                    $('#email3').removeClass('border-danger');
                    $('#email3').addClass('border-bottom border-success');
                }

                if (!$('#company3').val()) {
                    $('.companyErr3').text('This field is required');
                    $('#company3').removeClass('border-0');
                    $('#company3').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr3').text('');
                    $('#company3').removeClass('border-danger');
                    $('#company3').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle3').val()) {
                    $('.jobTitleErr3').text('This field is required');
                    $('#jobTitle3').removeClass('border-0');
                    $('#jobTitle3').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr3').text('');
                    $('#jobTitle3').removeClass('border-danger');
                    $('#jobTitle3').addClass('border-bottom border-success');
                }

                if (!$('#mobile3').val()) {
                    $('.mobileErr3').text('This field is required');
                    $('#mobile3').removeClass('border-0');
                    $('#mobile3').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr3').text('');
                    $('#mobile3').removeClass('border-danger');
                    $('#mobile3').addClass('border-bottom border-success');
                }

                if (!$('#country3').val()) {
                    $('.countryErr3').text('This field is required');
                    $('#country3').removeClass('border-0');
                    $('#country3').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr3').text('');
                    $('#country3').removeClass('border-danger');
                    $('#country3').addClass('border-bottom border-success');
                }

                $('.outputMessage3').addClass('text-danger mb-4');
                $('.outputMessage3').text('One or more fields are required!');
            } else {
                $('.nameErr3').text('');
                $('#name3').val('');
                $('#name3').removeClass('border-danger border-success');

                $('.emailErr3').text('');
                $('#email3').val('');
                $('#email3').removeClass('border-danger border-success');

                $('.companyErr3').text('');
                $('#company3').val('');
                $('#company3').removeClass('border-danger border-success');

                $('.jobTitleErr3').text('');
                $('#jobTitle3').val('');
                $('#jobTitle3').removeClass('border-danger border-success');

                $('.mobileErr3').text('');
                $('#mobile3').val('');
                $('#mobile3').removeClass('border-danger border-success');

                $('.countryErr3').text('');
                $('#country3').val(0);
                $('#country3').removeClass('border-danger border-success');

                $('.outputMessage3').addClass('text-success mb-4');
                $('.outputMessage3').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit4').on('submit', function () {
        $('.outputMessage4').removeClass('text-danger');
        $('.outputMessage4').addClass('mb-4');
        $('.outputMessage4').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name4').val()) {
                    $('.nameErr4').text('This field is required');
                    $('#name4').removeClass('border-0');
                    $('#name4').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr4').text('');
                    $('#name4').removeClass('border-danger');
                    $('#name4').addClass('border-bottom border-success');
                }

                if (!$('#email4').val()) {
                    $('.emailErr4').text('This field is required');
                    $('#email4').removeClass('border-0');
                    $('#email4').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr4').text('');
                    $('#email4').removeClass('border-danger');
                    $('#email4').addClass('border-bottom border-success');
                }

                if (!$('#company4').val()) {
                    $('.companyErr4').text('This field is required');
                    $('#company4').removeClass('border-0');
                    $('#company4').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr4').text('');
                    $('#company4').removeClass('border-danger');
                    $('#company4').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle4').val()) {
                    $('.jobTitleErr4').text('This field is required');
                    $('#jobTitle4').removeClass('border-0');
                    $('#jobTitle4').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr4').text('');
                    $('#jobTitle4').removeClass('border-danger');
                    $('#jobTitle4').addClass('border-bottom border-success');
                }

                if (!$('#mobile4').val()) {
                    $('.mobileErr4').text('This field is required');
                    $('#mobile4').removeClass('border-0');
                    $('#mobile4').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr4').text('');
                    $('#mobile4').removeClass('border-danger');
                    $('#mobile4').addClass('border-bottom border-success');
                }

                if (!$('#country4').val()) {
                    $('.countryErr4').text('This field is required');
                    $('#country4').removeClass('border-0');
                    $('#country4').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr4').text('');
                    $('#country4').removeClass('border-danger');
                    $('#country4').addClass('border-bottom border-success');
                }

                $('.outputMessage4').addClass('text-danger mb-4');
                $('.outputMessage4').text('One or more fields are required!');
            } else {
                $('.nameErr4').text('');
                $('#name4').val('');
                $('#name4').removeClass('border-danger border-success');

                $('.emailErr4').text('');
                $('#email4').val('');
                $('#email4').removeClass('border-danger border-success');

                $('.companyErr4').text('');
                $('#company4').val('');
                $('#company4').removeClass('border-danger border-success');

                $('.jobTitleErr4').text('');
                $('#jobTitle4').val('');
                $('#jobTitle4').removeClass('border-danger border-success');

                $('.mobileErr4').text('');
                $('#mobile4').val('');
                $('#mobile4').removeClass('border-danger border-success');

                $('.countryErr4').text('');
                $('#country4').val(0);
                $('#country4').removeClass('border-danger border-success');

                $('.outputMessage4').addClass('text-success mb-4');
                $('.outputMessage4').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit5').on('submit', function () {
        $('.outputMessage5').removeClass('text-danger');
        $('.outputMessage5').addClass('mb-4');
        $('.outputMessage5').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name5').val()) {
                    $('.nameErr5').text('This field is required');
                    $('#name5').removeClass('border-0');
                    $('#name5').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr5').text('');
                    $('#name5').removeClass('border-danger');
                    $('#name5').addClass('border-bottom border-success');
                }

                if (!$('#email5').val()) {
                    $('.emailErr5').text('This field is required');
                    $('#email5').removeClass('border-0');
                    $('#email5').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr5').text('');
                    $('#email5').removeClass('border-danger');
                    $('#email5').addClass('border-bottom border-success');
                }

                if (!$('#company5').val()) {
                    $('.companyErr5').text('This field is required');
                    $('#company5').removeClass('border-0');
                    $('#company5').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr5').text('');
                    $('#company5').removeClass('border-danger');
                    $('#company5').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle5').val()) {
                    $('.jobTitleErr5').text('This field is required');
                    $('#jobTitle5').removeClass('border-0');
                    $('#jobTitle5').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr5').text('');
                    $('#jobTitle5').removeClass('border-danger');
                    $('#jobTitle5').addClass('border-bottom border-success');
                }

                if (!$('#mobile5').val()) {
                    $('.mobileErr5').text('This field is required');
                    $('#mobile5').removeClass('border-0');
                    $('#mobile5').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr5').text('');
                    $('#mobile5').removeClass('border-danger');
                    $('#mobile5').addClass('border-bottom border-success');
                }

                if (!$('#country5').val()) {
                    $('.countryErr5').text('This field is required');
                    $('#country5').removeClass('border-0');
                    $('#country5').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr5').text('');
                    $('#country5').removeClass('border-danger');
                    $('#country5').addClass('border-bottom border-success');
                }

                $('.outputMessage5').addClass('text-danger mb-4');
                $('.outputMessage5').text('One or more fields are required!');
            } else {
                $('.nameErr5').text('');
                $('#name5').val('');
                $('#name5').removeClass('border-danger border-success');

                $('.emailErr5').text('');
                $('#email5').val('');
                $('#email5').removeClass('border-danger border-success');

                $('.companyErr5').text('');
                $('#company5').val('');
                $('#company5').removeClass('border-danger border-success');

                $('.jobTitleErr5').text('');
                $('#jobTitle5').val('');
                $('#jobTitle5').removeClass('border-danger border-success');

                $('.mobileErr5').text('');
                $('#mobile5').val('');
                $('#mobile5').removeClass('border-danger border-success');

                $('.countryErr5').text('');
                $('#country5').val(0);
                $('#country5').removeClass('border-danger border-success');

                $('.outputMessage5').addClass('text-success mb-4');
                $('.outputMessage5').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit6').on('submit', function () {
        $('.outputMessage6').removeClass('text-danger');
        $('.outputMessage6').addClass('mb-4');
        $('.outputMessage6').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name6').val()) {
                    $('.nameErr6').text('This field is required');
                    $('#name6').removeClass('border-0');
                    $('#name6').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr6').text('');
                    $('#name6').removeClass('border-danger');
                    $('#name6').addClass('border-bottom border-success');
                }

                if (!$('#email6').val()) {
                    $('.emailErr6').text('This field is required');
                    $('#email6').removeClass('border-0');
                    $('#email6').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr6').text('');
                    $('#email6').removeClass('border-danger');
                    $('#email6').addClass('border-bottom border-success');
                }

                if (!$('#company6').val()) {
                    $('.companyErr6').text('This field is required');
                    $('#company6').removeClass('border-0');
                    $('#company6').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr6').text('');
                    $('#company6').removeClass('border-danger');
                    $('#company6').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle6').val()) {
                    $('.jobTitleErr6').text('This field is required');
                    $('#jobTitle6').removeClass('border-0');
                    $('#jobTitle6').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr6').text('');
                    $('#jobTitle6').removeClass('border-danger');
                    $('#jobTitle6').addClass('border-bottom border-success');
                }

                if (!$('#mobile6').val()) {
                    $('.mobileErr6').text('This field is required');
                    $('#mobile6').removeClass('border-0');
                    $('#mobile6').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr6').text('');
                    $('#mobile6').removeClass('border-danger');
                    $('#mobile6').addClass('border-bottom border-success');
                }

                if (!$('#country6').val()) {
                    $('.countryErr6').text('This field is required');
                    $('#country6').removeClass('border-0');
                    $('#country6').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr6').text('');
                    $('#country6').removeClass('border-danger');
                    $('#country6').addClass('border-bottom border-success');
                }

                $('.outputMessage6').addClass('text-danger mb-4');
                $('.outputMessage6').text('One or more fields are required!');
            } else {
                $('.nameErr6').text('');
                $('#name6').val('');
                $('#name6').removeClass('border-danger border-success');

                $('.emailErr6').text('');
                $('#email6').val('');
                $('#email6').removeClass('border-danger border-success');

                $('.companyErr6').text('');
                $('#company6').val('');
                $('#company6').removeClass('border-danger border-success');

                $('.jobTitleErr6').text('');
                $('#jobTitle6').val('');
                $('#jobTitle6').removeClass('border-danger border-success');

                $('.mobileErr6').text('');
                $('#mobile6').val('');
                $('#mobile6').removeClass('border-danger border-success');

                $('.countryErr6').text('');
                $('#country6').val(0);
                $('#country6').removeClass('border-danger border-success');

                $('.outputMessage6').addClass('text-success mb-4');
                $('.outputMessage6').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit7').on('submit', function () {
        $('.outputMessage7').removeClass('text-danger');
        $('.outputMessage7').addClass('mb-4');
        $('.outputMessage7').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name7').val()) {
                    $('.nameErr7').text('This field is required');
                    $('#name7').removeClass('border-0');
                    $('#name7').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr7').text('');
                    $('#name7').removeClass('border-danger');
                    $('#name7').addClass('border-bottom border-success');
                }

                if (!$('#email7').val()) {
                    $('.emailErr7').text('This field is required');
                    $('#email7').removeClass('border-0');
                    $('#email7').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr7').text('');
                    $('#email7').removeClass('border-danger');
                    $('#email7').addClass('border-bottom border-success');
                }

                if (!$('#company7').val()) {
                    $('.companyErr7').text('This field is required');
                    $('#company7').removeClass('border-0');
                    $('#company7').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr7').text('');
                    $('#company7').removeClass('border-danger');
                    $('#company7').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle7').val()) {
                    $('.jobTitleErr7').text('This field is required');
                    $('#jobTitle7').removeClass('border-0');
                    $('#jobTitle7').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr7').text('');
                    $('#jobTitle7').removeClass('border-danger');
                    $('#jobTitle7').addClass('border-bottom border-success');
                }

                if (!$('#mobile7').val()) {
                    $('.mobileErr7').text('This field is required');
                    $('#mobile7').removeClass('border-0');
                    $('#mobile7').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr7').text('');
                    $('#mobile7').removeClass('border-danger');
                    $('#mobile7').addClass('border-bottom border-success');
                }

                if (!$('#country7').val()) {
                    $('.countryErr7').text('This field is required');
                    $('#country7').removeClass('border-0');
                    $('#country7').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr7').text('');
                    $('#country7').removeClass('border-danger');
                    $('#country7').addClass('border-bottom border-success');
                }

                $('.outputMessage7').addClass('text-danger mb-4');
                $('.outputMessage7').text('One or more fields are required!');
            } else {
                $('.nameErr7').text('');
                $('#name7').val('');
                $('#name7').removeClass('border-danger border-success');

                $('.emailErr7').text('');
                $('#email7').val('');
                $('#email7').removeClass('border-danger border-success');

                $('.companyErr7').text('');
                $('#company7').val('');
                $('#company7').removeClass('border-danger border-success');

                $('.jobTitleErr7').text('');
                $('#jobTitle7').val('');
                $('#jobTitle7').removeClass('border-danger border-success');

                $('.mobileErr7').text('');
                $('#mobile7').val('');
                $('#mobile7').removeClass('border-danger border-success');

                $('.countryErr7').text('');
                $('#country7').val(0);
                $('#country7').removeClass('border-danger border-success');

                $('.outputMessage7').addClass('text-success mb-4');
                $('.outputMessage7').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit8').on('submit', function () {
        $('.outputMessage8').removeClass('text-danger');
        $('.outputMessage8').addClass('mb-4');
        $('.outputMessage8').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name8').val()) {
                    $('.nameErr8').text('This field is required');
                    $('#name8').removeClass('border-0');
                    $('#name8').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr8').text('');
                    $('#name8').removeClass('border-danger');
                    $('#name8').addClass('border-bottom border-success');
                }

                if (!$('#email8').val()) {
                    $('.emailErr8').text('This field is required');
                    $('#email8').removeClass('border-0');
                    $('#email8').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr8').text('');
                    $('#email8').removeClass('border-danger');
                    $('#email8').addClass('border-bottom border-success');
                }

                if (!$('#company8').val()) {
                    $('.companyErr8').text('This field is required');
                    $('#company8').removeClass('border-0');
                    $('#company8').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr8').text('');
                    $('#company8').removeClass('border-danger');
                    $('#company8').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle8').val()) {
                    $('.jobTitleErr8').text('This field is required');
                    $('#jobTitle8').removeClass('border-0');
                    $('#jobTitle8').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr8').text('');
                    $('#jobTitle8').removeClass('border-danger');
                    $('#jobTitle8').addClass('border-bottom border-success');
                }

                if (!$('#mobile8').val()) {
                    $('.mobileErr8').text('This field is required');
                    $('#mobile8').removeClass('border-0');
                    $('#mobile8').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr8').text('');
                    $('#mobile8').removeClass('border-danger');
                    $('#mobile8').addClass('border-bottom border-success');
                }

                if (!$('#country8').val()) {
                    $('.countryErr8').text('This field is required');
                    $('#country8').removeClass('border-0');
                    $('#country8').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr8').text('');
                    $('#country8').removeClass('border-danger');
                    $('#country8').addClass('border-bottom border-success');
                }

                $('.outputMessage8').addClass('text-danger mb-4');
                $('.outputMessage8').text('One or more fields are required!');
            } else {
                $('.nameErr8').text('');
                $('#name8').val('');
                $('#name8').removeClass('border-danger border-success');

                $('.emailErr8').text('');
                $('#email8').val('');
                $('#email8').removeClass('border-danger border-success');

                $('.companyErr8').text('');
                $('#company8').val('');
                $('#company8').removeClass('border-danger border-success');

                $('.jobTitleErr8').text('');
                $('#jobTitle8').val('');
                $('#jobTitle8').removeClass('border-danger border-success');

                $('.mobileErr8').text('');
                $('#mobile8').val('');
                $('#mobile8').removeClass('border-danger border-success');

                $('.countryErr8').text('');
                $('#country8').val(0);
                $('#country8').removeClass('border-danger border-success');

                $('.outputMessage8').addClass('text-success mb-4');
                $('.outputMessage8').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });

    $('#enrolmentFormSubmit9').on('submit', function () {
        $('.outputMessage9').removeClass('text-danger');
        $('.outputMessage9').addClass('mb-4');
        $('.outputMessage9').text('Submitting...');

        var form = $(this);
        $.ajax({
        url: "https://www.dataxsolution.net/sendemails/enrolment-form-validation.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function (result) {
            if (result !== 'success') {
                if (!$('#name9').val()) {
                    $('.nameErr9').text('This field is required');
                    $('#name9').removeClass('border-0');
                    $('#name9').addClass('border-bottom border-danger');
                } else {
                    $('.nameErr9').text('');
                    $('#name9').removeClass('border-danger');
                    $('#name9').addClass('border-bottom border-success');
                }

                if (!$('#email9').val()) {
                    $('.emailErr9').text('This field is required');
                    $('#email9').removeClass('border-0');
                    $('#email9').addClass('border-bottom border-danger');
                } else {
                    $('.emailErr9').text('');
                    $('#email9').removeClass('border-danger');
                    $('#email9').addClass('border-bottom border-success');
                }

                if (!$('#company9').val()) {
                    $('.companyErr9').text('This field is required');
                    $('#company9').removeClass('border-0');
                    $('#company9').addClass('border-bottom border-danger');
                } else {
                    $('.companyErr9').text('');
                    $('#company9').removeClass('border-danger');
                    $('#company9').addClass('border-bottom border-success');
                }

                if (!$('#jobTitle9').val()) {
                    $('.jobTitleErr9').text('This field is required');
                    $('#jobTitle9').removeClass('border-0');
                    $('#jobTitle9').addClass('border-bottom border-danger');
                } else {
                    $('.jobTitleErr9').text('');
                    $('#jobTitle9').removeClass('border-danger');
                    $('#jobTitle9').addClass('border-bottom border-success');
                }

                if (!$('#mobile9').val()) {
                    $('.mobileErr9').text('This field is required');
                    $('#mobile9').removeClass('border-0');
                    $('#mobile9').addClass('border-bottom border-danger');
                } else {
                    $('.mobileErr9').text('');
                    $('#mobile9').removeClass('border-danger');
                    $('#mobile9').addClass('border-bottom border-success');
                }

                if (!$('#country9').val()) {
                    $('.countryErr9').text('This field is required');
                    $('#country9').removeClass('border-0');
                    $('#country9').addClass('border-bottom border-danger');
                } else {
                    $('.countryErr9').text('');
                    $('#country9').removeClass('border-danger');
                    $('#country9').addClass('border-bottom border-success');
                }

                $('.outputMessage9').addClass('text-danger mb-4');
                $('.outputMessage9').text('One or more fields are required!');
            } else {
                $('.nameErr9').text('');
                $('#name9').val('');
                $('#name9').removeClass('border-danger border-success');

                $('.emailErr9').text('');
                $('#email9').val('');
                $('#email9').removeClass('border-danger border-success');

                $('.companyErr9').text('');
                $('#company9').val('');
                $('#company9').removeClass('border-danger border-success');

                $('.jobTitleErr9').text('');
                $('#jobTitle9').val('');
                $('#jobTitle9').removeClass('border-danger border-success');

                $('.mobileErr9').text('');
                $('#mobile9').val('');
                $('#mobile9').removeClass('border-danger border-success');

                $('.countryErr9').text('');
                $('#country9').val(0);
                $('#country9').removeClass('border-danger border-success');

                $('.outputMessage9').addClass('text-success mb-4');
                $('.outputMessage9').text('Form has been submitted successfully. We will be back shortly!');
            }
        }
        });

        return false;
    });
});