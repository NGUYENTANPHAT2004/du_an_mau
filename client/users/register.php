<div class="register">
    <div class="form-container">
        <h2 class="form-title">Đăng ký tài khoản</h2>
        <form id="registration-form" method="post" action="index.php?act=register">
            <input type="email" name="email" id="register-email" placeholder="Email">
            <input type="text" name="name" id="register-username" placeholder="Tên đăng nhập">

            <div class="password-container">
                <input type="password" name="password" id="register-password" placeholder="Mật khẩu">
                <i class="fas fa-eye password-icon" id="password-toggle-password"></i>
            </div>

            <div class="password-container">
                <input type="password" id="confirm-password" placeholder="Nhập lại mật khẩu">
                <i class="fas fa-eye password-icon" id="password-toggle-confirm"></i>
            </div>

            <input type="date" name="birthday" id="date-of-birth" placeholder="Ngày sinh">
            <input type="text" name="location" id="location" placeholder="Địa chỉ">
            <input id="register-button" type="submit" value="Đăng kí">
        </form>

        <div class="social-buttons">
            <button class="social-button google">
                <i class="fab fa-google"></i>
            </button>
        </div>

        <p class="register-text">Bạn đã có tài khoản ? <a href="index.php?act=login">Đăng nhập</a></p>
        <p id="message" style="color: red;"></p>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var passwordTogglePassword = document.getElementById("password-toggle-password");
    var passwordToggleConfirm = document.getElementById("password-toggle-confirm");
    var passwordInputPassword = document.getElementById("register-password");
    var passwordInputConfirm = document.getElementById("confirm-password");

    // Toggle password visibility for the password field
    passwordTogglePassword.addEventListener("click", function () {
        togglePasswordVisibility(passwordInputPassword);
    });

    // Toggle password visibility for the confirm password field
    passwordToggleConfirm.addEventListener("click", function () {
        togglePasswordVisibility(passwordInputConfirm);
    });

    function togglePasswordVisibility(passwordInput) {
        var type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
    }

    var registrationForm = document.getElementById("registration-form");
    registrationForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting by default

        // Perform validation
        var email = document.getElementById("register-email").value;
        var username = document.getElementById("register-username").value;
        var password = passwordInputPassword.value;
        var confirmPassword = passwordInputConfirm.value;
        var dateOfBirth = document.getElementById("date-of-birth").value;
        var location = document.getElementById("location").value;

        var messageElement = document.getElementById("message");
        messageElement.innerHTML = ""; // Clear previous error messages

        if (!email || !username || !password || !confirmPassword || !dateOfBirth || !location) {
            messageElement.innerHTML = "Vui lòng điền đầy đủ thông tin.";
        } else if (password !== confirmPassword) {
            messageElement.innerHTML = "Mật khẩu và xác nhận mật khẩu không khớp.";
        } else {
            // The form is valid, you can submit it or perform additional actions
            registrationForm.submit();
        }
    });
});
</script>
