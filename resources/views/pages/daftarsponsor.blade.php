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

    <div class="container">
        <% if (message.length > 0) { %>
            <div class="alert alert-danger">
                <%- message %>
            </div>
            <% } %>
                <h2 class="text-center">Daftar Sponsor</h2>


                <form action="/daftarsponsor/<%= id %>" method="post">

                    <div class="col-md-6">
                        <h3>INFOMASI PRIBADI</h3>
                        <hr>
                        <div class="form-group">
                            <label>Nama Lengkap*</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="3" class="form-control"></textarea>
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


                                <label>HP*</label>
                                <input type="text" name="hp" class="form-control">


                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>INFOMASI Sponsor</h3>
                        <hr>
                        <p>Silahkan isi informasi besaran sponsor di bawah.</p>
                        <p>
                            <b>
                                Minimal nilai sponsor Rp.300.000
                            </b>
                        </p>
                        <p>
                            <i>Isi hanya dengan angka,tanpa tanda titik atau koma.<br>Contoh:IDR 300.000 ditulis 300000</i>
                        </p>
                        <div class="form-group">

                            <label for="">Besarang Sponsor IDR*</label>
                            <input type="text" name="besar" class="form-control" placeholder="per bulan">
                            <small class="text-muted">Minimal 300000</small>
                        </div>
                        <div class="form-group">

                            <label for="">Periode Sponsor*</label>
                            <select class="selectpicker form-control" title="Pilih periode" name="bulan">
                                <% for(var i=1;i<=12;i++){%>
                                    <option value="<%= i%>">
                                        <%= i%> Bulan</option>
                                    <%}%>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <button type="submit" class=" btn btn-default btn-fill " style="color:white">Sponsor sekarang</button>
                    </div>
                </form>

    </div>
    <% include ../partials/footer.ejs %>
</body>
<% include ../partials/script.ejs %>


</html>
