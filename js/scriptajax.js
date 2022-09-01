$('document').ready(function () {
    var userName_state = false;

    $('#userName').on('blur', function () {
        var userName = $('#userName').val();
        if (userName == '') {
            userName_state == false;
            return;
        }
        $.ajax({
            url: "ajax_checkusername.php",
            type: "post",
            data: {
                'username_check': 1,
                'userName': userName
            },
            success: function (response) {
                if (response == 'taken') {

                    document.getElementById("text-notify").innerHTML = "*** ไม่สามารถใช้งาน UserName นี้ได้ ***";
                    document.getElementById("text-notify").style.color = '#e20000';
                    document.getElementById("btn").disabled = true;

                } else if (response == 'not_taken') {
                    document.getElementById("text-notify").innerHTML = "*** สามารถใช้งาน UserName นี้ได้ ***";
                    document.getElementById("text-notify").style.color = '#19b80a';
                    document.getElementById("btn").disabled = false;
                }
            }
        })
    });
})
