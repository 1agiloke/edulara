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
            <h2>MERCHANDISE</h2>


            <% for(var i=0; i<items.length; i++) {%>

                <div class="row itemEvent">
                    <div class="col-md-6"><img style="width:100%;" src="/img/<%= items[i].imgmerkan.split(',')[0] %>"></div>
                    <div class="col-md-6">
                        <h3><%= items[i].namamerkan %></h3>
                        <br>
                        <span><div class="col-md-2">Harga</div><b class="textHijau">: <%= items[i].hargamerkan %></b></span>
                        <br>
                        <br>
                        <div class="col-md-12">
                            <%- items[i].ketmerkan.substring(0,300) %>
                            <p><a href="/merchandiseitem/<%= items[i].idmerkan %>" class="btn btn-flat btn-default putihHijau" role="button">Read More</a> </p>
                        </div>
                    </div>
                </div>
            <% } %>

        </div>
    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
</body>

</html>
