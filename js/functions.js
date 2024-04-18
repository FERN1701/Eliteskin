$(document).ready( function () {
    var user_info   = localStorage.getItem("user-info");
    if(user_info) {
        var user_decode = JSON.parse(user_info);
        $("body").attr({"data-user_id": user_decode['id']});
        $(".auth-has-user").css({'display':'inline-block'});
        $(".auth-non-user").css({'display':'none'});
    }
    else {
        $("body").attr({"data-user_id": "NO_USER"});
        $(".auth-has-user").css({'display':'none'});
        $(".auth-non-user").css({'display':'inline-block'});
    }   
});

function getUserID() {
    $(document).ready( async () => {
        var id = $("body").attr("data-user_id");
        console.log(id);
    });
}

function hasActive() {
    if ((localStorage.getItem("user-info") == null) || (localStorage.getItem("user-info") == 'null')) {
        console.log("OK:" + localStorage.getItem("user-info"))
        return 0;
    }
    else {
        return 1;
    }
}

function cancelBooking(id) {
    Swal.fire({
      title: "Confirmation",
      text: "Do you want to cancel this appointment?",
      showCancelButton: true,
      confirmButtonText: "Cancel Appointment",
    }).then((result) => {
      if (result.isConfirmed) {
        fetch("api/cancelAppointment.php?id=" + id).then( res => { return res.json(); }).then( async (response) => {
            Swal.fire("Cancelled", "Appointment cancelled successfully.", "success").then( async () => {
                window.location.reload();
            });
        });
      }
    });
}

function sendInquiry(name, mobile, address, email, message) {
    if(name == '') {
        Swal.fire("Required", "Please provide name", "warning");
    }
    else if(mobile == '') {
        Swal.fire("Required", "Please provide mobile", "warning");
    }
    else if(address == '') {
        Swal.fire("Required", "Please provide address", "warning");
    }
    else if(email == '') {
        Swal.fire("Required", "Please provide email", "warning");
    }
    else if(message == '') {
        Swal.fire("Required", "Please provide message", "warning");
    }
    else {
        fetch("api/sendInquiry.php?name="+ name +"&mobile="+ mobile +"&address="+ address +"&email="+ email +"&message="+ message).then( res => { return res.json(); }).then( async (sent) => {
            const mail = "api/emailInquiryNotification.php?name="+ name +"&mobile="+ mobile +"&address="+ address +"&email="+ email +"&message="+ message;
            console.log(mail);
            fetch(mail).then( async () => {
                if(sent['success']) {
                    Swal.fire("Sent", sent['message'], "success").then( async () => {

                    });
                }
                else {
                    Swal.fire("Fail to send", sent['message'], "warning").then( async () => {

                    });
                }
            });
        });
    } 
}