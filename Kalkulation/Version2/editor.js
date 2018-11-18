function ajaxRequest(str) {
    $.ajax({
        type: "POST",
        url: "server_editor.php",
        data: { line: str },
        success: function(msg) {
            document.getElementById("result").innerHTML = msg;
        }
    });
}