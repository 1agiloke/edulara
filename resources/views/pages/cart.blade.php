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
    <div class="main" style="padding-top:80px;">
        <div class="row">
            <div class="container">
                <% if (message.length > 0) { %>
                    <div class="alert alert-danger">
                        <%= message %>
                    </div>
                    <% } %>
                        <h2>KERANJANG BELANJA</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Banyak</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <% var a=0;var subtotal=0;%>
                                    <% for(k in cartData) {%>
                                        <tr>
                                            <td>
                                                <%= ++a;  %>
                                            </td>
                                            <td>
                                                <%= k %>
                                            </td>
                                            <td>
                                                <%= cartData[k].productPrice %>
                                            </td>
                                            <td>
                                                <%= cartData[k].count %>
                                            </td>
                                            <td>IDR
                                                <%= cartData[k].productPrice*cartData[k].count %>
                                            </td>
                                        </tr>
                                        <% subtotal+=cartData[k].productPrice*cartData[k].count;
                                }%>
                            </tbody>
                        </table>
                        <h3>Total Keranjang</h3>
                        <div class="row">
                            <div class="col-md-2">
                                SubTotal
                            </div>
                            <div class="col-md-2">
                                <span class="textHijau">IDR <%= subtotal %></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Diskon
                            </div>
                            <div class="col-md-2">
                                <span class="textHijau"><% var diskon = 0;%>IDR <%= diskon%></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                Total
                            </div>
                            <div class="col-md-2">
                                <span class="textHijau">IDR <%= subtotal-diskon %></span>
                            </div>
                        </div>
                        <div class="row" style="padding:20px 0;">
                            <div class="col-md-6">
                                <a href="/checkout" class="btn  btn-default btn-fill">Proses Pembayaran</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/kosongcart" class="btn  btn-default btn-fill ">Kosongkan Keranjang</a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
</body>

</html>
