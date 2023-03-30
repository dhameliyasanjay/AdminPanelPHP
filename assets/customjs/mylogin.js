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
                name: "required",
                is_active: "required",
            },
            messages: {
                name: "Please your product category name",
                is_active: "Please selected",
            }
        });
    }

    var unit = function() {
        $("#unit").validate({
            rules: {
                unit: "required",
                is_active: "required",
                is_de: "required",

            },
            messages: {
                unit: "Please specify unit name ",
                is_active: "Please selected",
                is_de: "Please selected",
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
        },
        unit: function() {
            unit();
        },
    }
}();