function openForm() {
    document.getElementById("EmailForm").style.display = "block";
}

function closeForm() {
    document.getElementById("EmailForm").style.display = "none";
}

$(function () {
    $('.form-box').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'email.php',
            data: $('.form-box').serialize(),
            success: function () {
              alert("Your email was sent successfully!");
            }
        });
    });
});

