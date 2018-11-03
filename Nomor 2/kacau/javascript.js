	var validateUsername = function(elementValue) {
    var usernamePattern = /[a-z]{5}_[0-9]{2}/;
    return usernamePattern.test(elementValue);
}



$('#username').keyup(function() {

    var value = $(this).val();
    var valid = validateUsername(value);

    if (!valid) {


        $(this).css('color', 'red');

    } else {


        $(this).css('color', '#000');

    }
});