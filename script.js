function validate(){
    var result_text = document.getElementById("result");
    var num = document.getElementById("num").value;
    if (num.search(/^[0-9]+$/) == -1 || num.length != 10) {
        result_text.innerHTML = "invalid mobile number";
        return;
    }
    
    
}