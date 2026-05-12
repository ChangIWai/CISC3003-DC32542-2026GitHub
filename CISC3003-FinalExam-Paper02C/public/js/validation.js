const validation = new JustValidate("#signup");

validation
    .addField("#name", [{ rule: "required" }])
    .addField("#email", [
        { rule: "required" },
        { rule: "email" },
        {

            validator: (value) => {
                return fetch("php/check-email.php?email=" + encodeURIComponent(value))
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(json) {
                        return json.available; 
                    });
            },
            errorMessage: "Email is already taken"
        }
    ])
    .addField("#password", [
        { rule: "required" },
        { rule: "minLength", value: 8 }
    ])
    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });