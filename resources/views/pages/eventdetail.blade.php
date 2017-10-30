<!-- views/login.ejs -->
<!doctype html>
<html>

<head>
    <% include ../partials/header.ejs %>
        <style>
            body {
                padding-top: 80px;
            }
        </style>
</head>

<body>
    <div id="navbar-full">
        <div id="navbar">
            <% include ../partials/nav.ejs %>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <h2>UPCOMING EVENT</h2>




            <div class="row itemEvent">
                <div class="col-md-6"><img style="width:100%;" src="/img/<%= items.imgevent %>"></div>
                <div class="col-md-6">
                    <h3><%= items.namaevent %></h3>
                    <br>
                    <span><div class="col-md-2">Tanggal</div><b>: <%= items.tglevent %></b></span>
                    <br>
                    <span><div class="col-md-2">Waktu</div><b>: <%= items.jambuka %>-<%= items.jamtutup %></b></span>
                    <br>
                    <span><div class="col-md-2">Tempat</div><b>: <%= items.venevent %></b></span>
                    <br>
                    <span><div class="col-md-2">Alamat</div><b>: <%= items.addevent %></b></span>
                    <br>
                    <br>
                    <div class="col-md-12">
                        <%- items.ketevent %>
                        <p><a href="/event" class="btn btn-flat btn-default putihHijau" role="button">Back To Event</a> </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
</body>

</html>
