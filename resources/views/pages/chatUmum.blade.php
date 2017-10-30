<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IO Chat</title>
       <% include ../partials/header.ejs %>
        <% include ../partials/script.ejs %>
    <script type="text/javascript" src="/socket.io/socket.io.js"></script>
    <style type="text/css">
        body {
            margin-top: 30px;
        }

        #messageArea {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
     <p>
      <a href="/" class="btn btn-flat hijau"><span class="fa fa-mail-reply"></span> Back to Home</a>

     </p>
        <div id="userFormArea" class="row">
            <div class="col-md-12">
                <form id="userForm">
                    <div class="form-group">
                        <label>Your Username</label>
                        <input id="username" class="form-control" value="<%= user.username %>">
                        <br>
                        <input type="submit" value="Login Chat" class="btn btn-flat btn-default hijau">
                    </div>
                </form>
            </div>
        </div>

        <div id="messageArea" class="row">
            <div class="col-md-4">
                <div class="well give">
                    <h3>Online Users</h3>
                    <ul id="users" class="list-group">

                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="chat" id="chat">

                </div>
                <form id="messageForm">
                    <div class="form-group">
                        <label>Enter Message</label>
                        <textarea id="message" class="form-control"></textarea>
                        <br>
                        <input type="submit" value="Send Message" class="btn btn-flat btn-default hijau">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            var socket = io.connect();
            var $messageForm = $('#messageForm');
            var $message = $('#message');
            var $chat = $('#chat');
            var $messageArea = $('#messageArea');
            var $userFormArea = $('#userFormArea');
            var $userForm = $('#userForm');
            var $users = $('#users');
            var $username = $('#username');

            $messageForm.submit(function (e) {
                e.preventDefault();
                // console.log("Submitted");
                socket.emit('send message', $message.val());
                $message.val('');

            });

            socket.on('new message', function (data) {
                $chat.append('<div class="well"><strong>' + data.user + '</strong> : ' + data.msg + '</div>');
            });

            $userForm.submit(function (e) {
                e.preventDefault();
                socket.emit('new user', $username.val(), function (data) {
                    if (data) {
                        $userFormArea.hide();
                        $messageArea.show();
                    }
                });
                $username.val('');

            });

            socket.on('get users', function (data) {
                var html = '';
                for (i = 0; i < data.length; i++) {
                    html += '<li class="list-group-item">' + data[i] + '</li>';
                }
                $users.html(html);
            });

        });
    </script>
</body>

</html>
