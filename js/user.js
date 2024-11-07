function kakunin(){
    const newpass = document.getElementById("newpass").value;
    const newpass1 = document.getElementById("newpass1").value;
    const error = document.getElementById("error-message");

    error.innerHTML = "";

    if(newpass === newpass1) {
        error.innerHTML="正しい";
    }else {
        error.innerHTML="間違い";
    }
}