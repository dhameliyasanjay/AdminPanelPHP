var Login = function() {
    var login_function = function() {
        $("#login-form").validate({
            rules: {
                username: "required",
                password: "required",
            },
            messages: {
                username: "Please specify your name",
                password: "We need your password to contact you",
            }
        });
    }

    var register = function() {
        $("#register-form").validate({
            rules: {
                username: "required",
                email: "required",
                address: "required",
                city: "required",
                password: "required",

            },
            messages: {
                username: "Please specify your name",
                email: "Please Enter your Email",
                address: "Please Enter your Address",
                city: "Please enter your city",
                password: "We need your password to contact you",
            }
        });
    }

    var product_category = function() {
        $("#product_category").validate({
            rules: {
                product_category: "required",
            },
            messages: {
                product_category: "Please your product category name",
            }
        });
    }

    return {
        init: function() {
            login_function();
        },
        register: function() {
            register();
        },
        product_category: function() {
            product_category();
        }
    }
}();