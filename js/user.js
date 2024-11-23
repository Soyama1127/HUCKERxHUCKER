"use strict";

// ユーザーログイン
function logintest() {
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

// ユーザー新規登録
function signuptest() {
    const id = document.getElementById("login_id").value;
    const password = document.getElementById("pass").value;
    const IDerrorMessage = document.getElementById("error-message-id");
    const PasserrorMessage = document.getElementById("error-message-pass");

    IDerrorMessage.innerHTML = "";
    PasserrorMessage.innerHTML = "";


    let error_count = 0; //エラー数の初期化

    // ログインIDのチェック
    const check_id = /^\d{7,}$/; //7桁以上10桁以内の数値
    if (!check_id.test(id)) {
        IDerrorMessage.innerHTML = "7桁以上の数字を入力してください";
        error_count++;
    }

    // パスワードのチェック
    const check_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/; //少なくとも1つの小文字、少なくとも1つの大文字、少なくとも1つの数字、8文字以上
    if (!check_pass.test(password)) {
        PasserrorMessage.innerHTML = "小文字、大文字のアルファベットと数字を含む8文字以上で入力してください";
        error_count++;
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
    xhr.send("user_id=" + encodeURIComponent(id));

    return false;
}

/*カルーセル*/
//itemを自動で切り替える間隔(ミリ秒で指定)
let intervalTime = 4000;


//////////////////////////////////////////////////////////////////////////////////
// ↓↓ 以降のコードは触らない ↓↓ //////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



//事前準備
let itemElements = document.getElementById('items-wrapper'); //以降の処理で使いまわすので事前に要素を取得しておく
let tabElements = document.getElementById('select-tabs');    //以降の処理で使いまわすので事前に要素を取得しておく
let itemNum = itemElements.childElementCount - 1;  //インデックスは0スタートなので、取得した要素数から1引く
let activeNum = 0;  //アクティブなitemの番号を格納
let intervalId = setInterval(changeToNextItem, intervalTime); //itemの自動切り替え



//■以降の処理で使いまわす関数

//select-tab,change-buttonが押された時に、自動切り替えのタイマーをリセットする
function resetInterval(){
    clearInterval(intervalId);
    intervalId = setInterval(changeToNextItem, intervalTime);
}

//itemの切り替えに伴うtabの切り替え処理
function changeActiveTab(fromActiveNum, toActiveNum){
    let fromTab = tabElements.children[fromActiveNum];
    fromTab.classList.remove('active');

    let toTab = tabElements.children[toActiveNum];
    toTab.classList.add('active');
}



// select-tabsでのitemの切り替え処理 ---------------------------
function changeToSelectItem(i){
    resetInterval();
    
    let fromActiveNum = activeNum;
    let toActiveNum = i;

    //アクティブなitemが選択されたら何もせず処理を終了する
    if(fromActiveNum == toActiveNum){return;}

    let fromItem = itemElements.children[fromActiveNum];
    fromItem.classList.remove('active');
    fromItem.classList.remove('fadeRightIn');
    fromItem.classList.remove('fadeLeftIn');
    let toItem = itemElements.children[toActiveNum];
    toItem.classList.remove('fadeLeftOut');
    toItem.classList.remove('fadeRightOut');
    if(activeNum < toActiveNum){
        //次のスライドへ移動する時
        fromItem.classList.add('fadeLeftOut')
        toItem.classList.add('fadeRightIn');
    }else{
        //前のスライドへ移動する時
        fromItem.classList.add('fadeRightOut')
        toItem.classList.add('fadeLeftIn');
    }

    changeActiveTab(fromActiveNum, toActiveNum)

    activeNum = toActiveNum;
}


// change-buttonでのitemの切り替え処理 ---------------------
function changeToPrevItem(){
    resetInterval();
    
    fromActiveNum = activeNum;

    fromItem = itemElements.children[activeNum];
    fromItem.classList.remove('active');
    fromItem.classList.remove('fadeRightIn');
    fromItem.classList.remove('fadeLeftIn');

    if(activeNum == 0){
        activeNum = itemNum;
    }else{
        --activeNum;
    }

    toActiveNum = activeNum;

    toItem = itemElements.children[activeNum];
    toItem.classList.remove('fadeLeftOut');
    toItem.classList.remove('fadeRightOut');

    fromItem.classList.add('fadeRightOut')
    toItem.classList.add('fadeLeftIn');
    toItem.classList.add('active');

    changeActiveTab(fromActiveNum, toActiveNum)
}
function changeToNextItem(){
    resetInterval();
    
    let fromActiveNum = activeNum;
    let toActiveNum;

    let fromItem = itemElements.children[activeNum];
    fromItem.classList.remove('active');
    fromItem.classList.remove('fadeRightIn');
    fromItem.classList.remove('fadeLeftIn');

    if(activeNum == itemNum){
        activeNum = 0;
    }else{
        ++activeNum;
    }
    
    toActiveNum = activeNum;

    let toItem = itemElements.children[activeNum];
    toItem.classList.remove('fadeLeftOut');
    toItem.classList.remove('fadeRightOut');

    fromItem.classList.add('fadeLeftOut')
    toItem.classList.add('fadeRightIn');
    toItem.classList.add('active');

    changeActiveTab(fromActiveNum, toActiveNum)
}

//ログアウトポップアップ
function confirmLogout() {
    return confirm('ログアウトしますか?');
}

//カートインポップアップ
function cartin() {
    return confirm('カートに追加しますか？')
}

let pageNumber = null;

function updateNumber(number) {
    localStorage.setItem('pageNumber', number);
}

function getPageNumber() {
    return localStorage.getItem('pageNumber');
}

function backPage() {
    const pageNumber = getPageNumber();

    if (parseInt(pageNumber) === 0) {
        window.location.href = 'home.php';
    } else if (parseInt(pageNumber) === 1) {
        window.location.href = 'buy_history.php';
    } else if (parseInt(pageNumber) === 2) {
        window.location.href = 'favorite.php';
    } else if (parseInt(pageNumber) === 3) {
        window.location.href = 'cart.php';
    } else if (parseInt(pageNumber) === 4) {
        window.location.href = 'game.php';
        localStorage.setItem('pageNumber', 0);
    } else if (parseInt(pageNumber) === 5) {
        window.location.href = 'cart.php';
        localStorage.setItem('pageNumber', 0);
    } else {
        alert('不正な値です');
    }
}

function confirmLogin() {
    const result = confirm("ログインしますか？");
    if (result) {
        window.location.href = "login.php";
    }
}

function validateForm() {
    // 姓、名、姓カナ、名カナが入力されているかチェック
    const lastName = document.getElementById("last_name").value;
    const firstName = document.getElementById("first_name").value;
    const lastNameKana = document.getElementById("last_namekana").value;
    const firstNameKana = document.getElementById("first_namekana").value;
    const postCode = document.getElementById("post_code").value;
    const state = document.getElementById("state").value;
    const city = document.getElementById("city").value;
    const houseNumber = document.getElementById("house_number").value;
    const lNameerrorMessage = document.getElementById("error-message-lname");
    const fNameerrorMessage = document.getElementById("error-message-fname");
    const lKanaerrorMessage = document.getElementById("error-message-lkana");
    const fKanaerrorMessage = document.getElementById("error-message-fkana");
    const posterrorMessage = document.getElementById("error-message-post");
    const stateerrorMessage = document.getElementById("error-message-state");
    const cityerrorMessage = document.getElementById("error-message-city");
    const houseNumerrorMessage = document.getElementById("error-message-houseNum");

    lNameerrorMessage.innerHTML = "";
    fNameerrorMessage.innerHTML = "";
    lKanaerrorMessage.innerHTML = "";
    fKanaerrorMessage.innerHTML = "";
    posterrorMessage.innerHTML = "";
    stateerrorMessage.innerHTML = "";
    cityerrorMessage.innerHTML = "";
    houseNumerrorMessage.innerHTML = "";

    let error_count = 0; //エラー数の初期化

    // 姓、名、姓カナ、名カナが空でないか
    if (lastName == "") {
        lNameerrorMessage.innerHTML = "姓は必須項目です";
        error_count++;
    }

    if (firstName == "") {
        fNameerrorMessage.innerHTML = "名は必須項目です";
        error_count++;
    }

    if (lastNameKana == "") {
        lKanaerrorMessage.innerHTML = "姓カナは必須項目です";
        error_count++;
    }

    if (firstNameKana == "") {
        fKanaerrorMessage.innerHTML = "名カナは必須項目です";
        error_count++;
    }

    // 郵便番号が正しい形式か (例: 123-4567)
    const postCodePattern = /^[0-9]{3}-[0-9]{4}$/;
    if (!postCode.match(postCodePattern)) {
        posterrorMessage.innerHTML = "郵便番号は正しい形式で入力してください。<br>例) 123-4567";
        error_count++;
    }

    // 都道府県が選択されているか
    if (state == "選択してください") {
        stateerrorMessage.innerHTML = "都道府県を選択してください。";
        error_count++;
    }

    // 市町村と番地が空でないか
    if (city == "") {
        cityerrorMessage.innerHTML = "市町村は必須項目です。";
        error_count++;
    }

    if (houseNumber == "") {
        houseNumerrorMessage.innerHTML = "番地は必須項目です";
        error_count++;
    }

    if (error_count > 0) {
        return false;
    }
    return true;
}

function confirmCartOut() {
    return confirm("カートから削除しますか？");
}

function kakunin(){
    return confirm("更新しますか？");
}