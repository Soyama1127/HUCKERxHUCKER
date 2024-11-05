"use strict";

// 管理者ログイン
function logintest() {
    const LoginerrorMessage = document.getElementById("error-message-log");
    const id = document.getElementById("manager_id").value;
    const pass = document.getElementById("manager_pass").value;

    LoginerrorMessage.innerHTML = "";

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "check_account.php", true);
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
    xhr.send("manager_id=" + encodeURIComponent(id) + "&manager_pass=" + encodeURIComponent(pass));

    return false;

}

// 管理者新規登録
function signuptest() {
    const id = document.getElementById("manager_id").value;
    const password = document.getElementById("manager_password").value;
    const IDerrorMessage = document.getElementById("error-message-id");
    const PasserrorMessage = document.getElementById("error-message-pass");

    IDerrorMessage.innerHTML = "";
    PasserrorMessage.innerHTML = "";


    let error_count = 0; //エラー数の初期化

    // ログインIDのチェック
    const check_id = /^\d{7,10}$/; //7桁以上10桁以内の数値
    if (!check_id.test(id)) {
        IDerrorMessage.innerHTML = "7桁以上10桁以内の数字で入力してください";
        error_count ++;
    }

    // パスワードのチェック
    const check_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/; //少なくとも1つの小文字、少なくとも1つの大文字、少なくとも1つの数字、8文字以上
    if (!check_pass.test(password)) {
        PasserrorMessage.innerHTML = "小文字、大文字、数字を含む8文字以上で入力してください";
        error_count ++;
    }

    if (error_count > 0) {
        return false;
    }

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "check_id.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        if (xhr.status === 200) {
            if (xhr.responseText === "exists") {
                IDerrorMessage.innerHTML = "このIDは使用されています";
            } else {
                document.getElementById("signup").submit();
            }
        }
    };
    xhr.send("manager_id=" + encodeURIComponent(id));

    return false;

}

$(document).ready(function() {
    $("#stockTable").tablesorter({
        header: {
            0: {
                sorter: 'digit'
            },
            1: {
                sorter: 'text'
            },
            2: {
                sorter: 'text'
            },
            3: {
                sorter: 'text'
            },
            4: {
                sorter: 'digit'
            }
        },
        sortList: [
            [0, 0]
        ],
        headerTemplate: '{content} <span class="sort-indicator">↑↓</span>',

    }); // tablesorter を適用
});