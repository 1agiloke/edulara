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
            <div class="row itemEvent">
                <div class="col-md-6">
                    <div class="col-md-12"><img style="width:100%;margin-bottom:10px;" src="/img/<%= items.imgmerkan.split(',')[0] %>"></div>
                    <div class="col-md-4">
                        <img style="width:100%;" src="/img/<%= items.imgmerkan.split(',')[0] %>">
                    </div>
                    <div class="col-md-4">
                        <img style="width:100%;" src="/img/<%= items.imgmerkan.split(',')[0] %>">
                    </div>
                    <div class="col-md-4">
                        <img style="width:100%;" src="/img/<%= items.imgmerkan.split(',')[0] %>">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3><%= items.namamerkan %></h3>
                    <br>
                    <span><div class="col-md-2">Harga</div><b class="textHijau">: <%= items.hargamerkan %></b></span>
                    <br>
                    <br>
                    <div class="col-md-12">
                        <%- items.ketmerkan %>
                            <div class="row">

                                <% var b=[items.idmerkan,items.namamerkan,items.hargamerkan]; %>
                                <form action="/tambahCart/<%= b %>" method="get">
                                <div class="col-md-2">
                                    <input type="number" name="jumlah" id="" class="form-control" value="1">

                                </div>
                                <div class="col-md-3">

                                    <button  class="btn btn-default btn-fill" role="button">Add to Cart</button>
                                </div>
                                </form>
                            </div>
                            <p style="margin-top:20px;"><a href="/merchandise" class="btn btn-flat btn-default putihHijau" role="button">Back To Merchandise</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
</body>

</html>
