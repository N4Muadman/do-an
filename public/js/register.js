
window.onload = function(){
    document.getElementById("register").addEventListener("submit", function(event) {
        event.preventDefault(); // Ngăn chặn việc gửi form mặc định

        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        var messageElement = document.getElementById("message");

        if (password === confirmPassword) {
            // Gọi phương thức submit() của form khi mật khẩu được xác nhận đúng
            document.getElementById("register").submit();
        } else {
            messageElement.innerHTML = "Mật khẩu không khớp. Vui lòng nhập lại.";
        }


    });
}
