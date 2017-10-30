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
<% include ../partials/script.ejs %>
    <!--

-->

    <body>
        <div id="navbar-full">
            <div id="navbar">
                <% include ../partials/nav.ejs %>
            </div>
        </div>
        <div class="main">
            <div class="row">

                <div class="container">
                    <div class="col-md-6">
                        <h2>Checkout</h2>
                        <h3>Informasi Pembayaran</h3>
                        <form action="/checkout" method="post">
                        <div class="form-group">
                            <label>Nama Lengkap*</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening*</label>
                            <input type="text" class="form-control" name="rekening">
                             <small class="text-muted">Kami tidak akan membagikan nomor rekening anda ke siapapun.<br>Rekening digunakan untuk memastikan apakah anda sudah melakukan pembayaran</small>
                        </div>
                        <div class="form-group">
                            <label>No KTP*</label>
                            <input type="text" class="form-control" name="ktp">
                            <small class="text-muted">Untuk pencocokan saat pengiriman</small>
                        </div>
                        <div class="form-group">
                            <label>Kota/Kabupaten</label>
                            <select class="selectpicker form-control" title="pilih kota/kabupaten" id="kota" name="kota" data-live-search="true">
                                <% for(var i=0; i<items.length; i++) {%>

                                    <option data-tokens="<%= items[i].Nama%>" value="<%= items[i].IDKabupaten%>">
                                        <%= items[i].Nama%>
                                    </option>

                                    <%}%>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Alamat lengkap*</label>
                            <textarea name="alamat" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h3>Informasi Tambahan</h3>
                            <!--                            <label for="">Informasi tambahan</label>-->
                            <textarea name="tambahan" id="" cols="30" rows="10" class="form-control" placeholder="Misal Ukuran atau yang lainnya"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h2>YOUR ORDER</h2>
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
                                                <%= k %> x <%= cartData[k].count %>
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
                                        IDR <%= subtotal %>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Shipping
                                    </th>
                                    <th>
                                        <% var diskon = 0;%>IDR <%= diskon%>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Total
                                    </th>
                                    <th>
                                        IDR <%= subtotal+diskon%>
                                    </th>
                                </tr>
                            </tfooter>
                        </table>
                         <button type="submit"  class="btn  btn-default btn-fill" style="margin-bottom:20px;">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <% include ../partials/footer.ejs %>

    </body>

</html>
