function logintest(){
    const id = document.getElementById("login_id").value;
    const pass = document.getElementById("pass").value;
    const LoginerrorMessage = document.getElementById("error-message");

    LoginerrorMessage.innerHTML = "";

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "check_user_account.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        if (xhr.status === 200) {
            if (xhr.responseText === "false") {
                LoginerrorMessage.innerHTML = "IDまたはパスワードが違います";
            } else if (xhr.responseText === "true") {
                document.getElementById("login").submit();
            }
        }
    };
    xhr.send("user_id=" + encodeURIComponent(id) + "&user_pass=" + encodeURIComponent(pass));

    return false;
}