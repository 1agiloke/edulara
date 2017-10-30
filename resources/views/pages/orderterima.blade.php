<!-- views/login.ejs -->
<!doctype html>
<html>

<head>
    <% include ../partials/header.ejs %>
        <style>
            body {
                padding-top: 80px;
            }

            ul#order {
                padding: 0;
                padding-left: 13px;
                font-size: 16px;
            }
        </style>
</head>

<body>
    <div id="navbar-full">
        <div id="navbar">
            <% include ../partials/nav.ejs %>
        </div>
    </div>
    <div class="container" style="padding-top:30px;">


        <div class="col-md-12">
            <% if (message.length > 0) { %>
                <div class="alert alert-danger">
                    <%- message %>
                </div>
                <% } %>

                    <ul id="order">
                        <li>Order Number : <b><%= orderid; %></b></li>
                        <li>Order Date : <b><%= orderdate.split('-').reverse().join('-'); %></b></li>
                    </ul>
                    <p>
                        Our Bank Account:
                        <br> Maybank 5127 8106 0342
                        <br> Atas Nama:
                        <br>
                        <b>Educationeer Charity Association</b>
                        <br> Jika butuh klarifikasi atau instruksi email kami di <a href="mailto:educationeer@support.com" class="textHijau">educationeer@support.com</a>
                    </p>
                    <h3>Order Details</h3>
                    <table class="table">
                        <thead>
                            <tr>

                                <th>Produk</th>

                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <% var a=0;var subtotal=0;%>
                                <% for(k in cartData) {%>
                                    <tr>

                                        <td>
                                            <%= k %> x
                                                <%= cartData[k].count %>
                                        </td>

                                        <td>IDR
                                            <%= cartData[k].productPrice*cartData[k].count %>
                                        </td>
                                    </tr>
                                    <% subtotal+=cartData[k].productPrice*cartData[k].count;
                                }%>
                        </tbody>
                        <tfooter>
                            <tr>
                                <th>
                                    SubTotal
                                </th>
                                <th>
                                    IDR
                                    <%= subtotal %>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Shipping
                                </th>
                                <th>
                                    <% var diskon = 0;%>IDR
                                        <%= diskon%>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Total
                                </th>
                                <th>
                                    IDR
                                    <%= subtotal+diskon%>
                                </th>
                            </tr>
                        </tfooter>
                    </table>
        </div>


    </div>
    <% include ../partials/footer.ejs %>
</body>
<% include ../partials/script.ejs %>


</html>
