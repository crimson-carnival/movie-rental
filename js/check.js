function check() {
    $.ajax({
        url: "check.php",
        data: {
            name: document.getElementById("name").value,
            username: document.getElementById("username").value
        },
        type: 'post',
        success: function (output) {
            var a = document.getElementById("status");
            if (output == 'Already rented') {
                a.value = output;
                a.style.background = "#ec4141";
                a.style.color = "#fff";
                a.style.cursor = "default";
            } else if (output == 'Rent') {
                a.value = output;
                a.style.background = "#5fbb4e";
                a.style.color = "#fff";
                a.style.cursor = "pointer";
            } else {
                a.value = "Return";
                a.style.background = "#00f";
                a.style.color = "#fff";
                a.style.cursor = "pointer";
            }
        }
    });
}

function validate() {
    if (document.getElementById("status").value == "Rent" || document.getElementById("status").value == "Return") return true;
    else return false;
}
