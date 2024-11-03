"use strict";

// 管理者ログイン
function logintest() {
    const id = document.getElementById("manager_id").value;
    const pass = document.getElementById("manager_pass").value;
    const LoginerrorMessage = document.getElementById("error-message-log");

    LoginerrorMessage.innerHTML = "";



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

    return true;

}