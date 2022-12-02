$(document).ready(function () {
  $(".team_delete_btn").click(function (e) {
    var id = $(this).val();

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "POST",
          url: "form-action.php",
          data: {
            team_delete_id: id,
            team_delete_btn: true,
          },
          success: function (response) {
            if (response == 200) {
              swal("Success!", "Profile Deleted Successfully!", "success");
              $("#row_id_" + id).remove();
            } else if (response == 500) {
              swal("Error!", "Something went wrong!", "error");
            }
          },
        });
      }
    });
  });
});

$(document).ready(function () {
  $(".portfolio_delete_btn").click(function (e) {
    var id = $(this).val();

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "POST",
          url: "form-action.php",
          data: {
            portfolio_delete_id: id,
            portfolio_delete_btn: true,
          },
          success: function (response) {
            if (response == 200) {
              swal("Success!", "Portfolio Deleted Successfully!", "success");
              $("#row_id_" + id).remove();
            } else if (response == 500) {
              swal("Error!", "Something went wrong!", "error");
            }
          },
        });
      }
    });
  });
});

$(document).ready(function () {
  $(".careers_delete_btn").click(function (e) {
    var id = $(this).val();

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "POST",
          url: "form-action.php",
          data: {
            careers_delete_id: id,
            careers_delete_btn: true,
          },
          success: function (response) {
            if (response == 200) {
              swal("Success!", "Vaccancy Deleted Successfully!", "success");
              $("#row_id_" + id).remove();
            } else if (response == 500) {
              swal("Error!", "Something went wrong!", "error");
            }
          },
        });
      }
    });
  });
});

$(document).ready(function () {
  $(".enq_delete_btn").click(function (e) {
    var id = $(this).val();

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "POST",
          url: "form-action.php",
          data: {
            delete_id: id,
            enq_delete_btn: true,
          },
          success: function (response) {
            if (response == 200) {
              swal("Success!", "Enquiry Deleted Successfully!", "success");
              $("#row_id_" + id).remove();
            } else if (response == 500) {
              swal("Error!", "Something went wrong!", "error");
            }
          },
        });
      }
    });
  });
});

$(document).ready(function () {
  $(".service_delete_btn").click(function (e) {
    var id = $(this).val();

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "POST",
          url: "form-action.php",
          data: {
            service_delete_id: id,
            service_delete_btn: true,
          },
          success: function (response) {
            if (response == 200) {
              swal("Success!", "Service Deleted Successfully!", "success");
              $("#row_id_" + id).remove();
            } else if (response == 500) {
              swal("Error!", "Something went wrong!", "error");
            }
          },
        });
      }
    });
  });
});
;
