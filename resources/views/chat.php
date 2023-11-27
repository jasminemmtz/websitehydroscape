<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHAT</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card">
            <h5 class="card-header">
                <span id="username"></span> |<a
                    href="('Sign/out');" style="color: white;"><button
                        class="btn btn-danger btn-sm">Sign Out</button></a>
            </h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-users">
                            <!-- List of users will be loaded here -->
                        </div>
                    </div>
                    <div class="col-8">
                        <div id="list-chats">
                            <!-- Chat messages will be loaded here -->
                        </div>
                        <div class="mt-3 text-end">
                            <form id="form-send" class="d-none">
                                <textarea class="form-control" id="chat" placeholder="Ketik Pesan..."
                                    required></textarea>
                                <button type="submit" class="btn btn-success mt-3">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="('assets/js/chat.js')"></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-aeujc/endpoint/getAllusers",
                type: "GET",
                data: {
                    penerima: $("#username").html(),
                },
                beforeSend: function () {
                    $("#list-users").html(
                        '<a href="#" class="list-group-item list-group-item-action">Loading...</a>'
                    );
                },
                success: function (res) {
                    var view = "";

                    res.map((data) => {
                        view +=
                            '<a href="#" class="list-group-item list-group-item-action user">' +
                            data.username +
                            "</a>";
                    });
                    $("#list-users").html(view);
                },
                error: function (err) {
                    $("#list-users").html(
                        '<a href="#" class="list-group-item list-group-item-action"> Fetch Error...</a>'
                    );
                    console.log(err);
                },
            });

            function currentDate() {
                var date = new Date();
                return date.toUTCString();
            }

            function load_chat() {
                $.ajax({
                    url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rmxmw/endpoint/getObrolanByPengirimPenerima",
                    type: "GET",
                    data: {
                        pengirim: $("#username").html(),
                        penerima: $("#list-users .active").html(),
                    },
                    beforeSend: function () {
                        $("#list-chats").html(
                            '<div class="card">' +
                            '<div class="card-body">' +
                            "Loading..." +
                            "</div>" +
                            "</div>"
                        );
                    },
                    success: function (res) {
                        var view = "";

                        res.map((data) => {
                            if (data.pengirim == $("#username").html()) {
                                color = "text-bg-success";
                                colorWaktu = "";
                            } else {
                                color = "";
                                colorWaktu = "text-muted";
                            }
                            view +=
                                '<div class="card mb-3 ' +
                                color +
                                '">' +
                                '<div class="card-body">' +
                                '<h5 class="card-title">' +
                                data.pengirim +
                                "</h5>" +
                                data.obrolan +
                                '<div class="text-end ' +
                                colorWaktu +
                                '">' +
                                data.waktu +
                                "</div>" +
                                "</div>" +
                                "</div>";
                        });
                        $("#list-chats").html(view);
                    },
                    error: function (err) {
                        console.log(err);
                        $("#list-chats").html(
                            '<div class="card">' +
                            '<div class="card-body">Fetch Error...' +
                            '<div class="text-end text-muted">' +
                            currentDate() +
                            "</div>" +
                            "</div>" +
                            "</div>"
                        );
                    },
                });
            }

            $("#list-users").on("click", ".user", function () {
                var username = $(this).html();
                $("#list-users .user").removeClass("active");
                $(this).addClass("active");

                load_chat();

                $("#form-send").removeClass("d-none");
            });

            $("#form-send").submit(function () {
                $.ajax({
                    url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rmxmw/endpoint/PostObrolan",
                    type: "POST",
                    data: {
                        pengirim: $("#username").html(),
                        penerima: $("#list-users .active").html(),
                        waktu: currentDate(),
                        obrolan: $("#chat").val(),
                    },
                    success: function (res) {
                        load_chat();
                    },
                    error: function (err) {
                        console.log(err);
                    },
                });
                $("#chat").val("");
                return false;
            });
        });
    </script>
</body>

</html>
