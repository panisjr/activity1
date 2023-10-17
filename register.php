<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container-fluid wrapper">
        <div class="container">
            <div class="col d-flex align-items-center justify-content-center vh-100">
                <form class="form-control row input-box">
                    <h3 class="text-center p-4">Register Account</h3>
                    <div class="row input-field">
                        <label for="username">Name</label>
                        <input type="text" id="username" class="input" autocomplete="off">
                    </div>
                    <div class="row input-field">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="input" autocomplete="off">
                    </div>
                    <div class="row input-field">
                        <label for="password">Password</label>
                        <input type="text" id="password" class="input" autocomplete="off">
                    </div>
                    <button class="btn btn-light" id="register">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Check if local storage is available
        if (typeof(Storage) !== "undefined") {
            // Local storage is available

            // Event listener for the "Store Data" button
            document.getElementById("register").addEventListener("click", function() {
                // Get the data from the input fields
                var username = document.getElementById("username").value;
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;

                // Create an object to hold the data
                var userData = {
                    username: username,
                    email: email,
                    password: password
                };
                if (username.trim() !== "" && email.trim() !== "" && password.trim() !== "") {
                    // Store the data object in local storage
                    localStorage.setItem("Registered Account", JSON.stringify(userData));

                    // Clear the input fields
                    alert("Registered Account Successfully!");
                } else {
                    alert("Make sure to fill out all the registration form.");
                }
            });

        } else {
            // Local storage is not available
            alert("Local storage is not supported in this browser.");
        }
    </script>
</body>

</html>