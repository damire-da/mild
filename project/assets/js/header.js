document.addEventListener("DOMContentLoaded", function() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/views/header.html", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("header-placeholder").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});