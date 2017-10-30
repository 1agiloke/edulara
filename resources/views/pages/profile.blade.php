<!-- views/profile.ejs -->
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

        <div class="page-header">
            <p class="text-right" style="margin:0"><b>Butuh Bantuan?Email kami <a href="mailto:" class="textHijau">Educationeer@support.com</a></b></p>
            <h2>My Account</h2>
            <h4 style="margin:0">Hi, <%= user.username %>! <b>Terima Kasih sudah check in</b></h4>

        </div>

        <div class="row">

            <!-- LOCAL INFORMATION -->
            <div class="col-sm-6">
                <div class="well give">
                    <h3><span class="fa fa-gift textHijau"></span> My Giving</h3>
                   
                    <%if(barang.length){ %>
                     <p>Recent donasi barang</p>
                    <%for(var i=0;i<barang.length;i++){%>
                        <div class="well give">
                            <p><b>Barang <%= barang[i].kategori%></b> berupa <b><%= barang[i].namabar %></b> sebanyak <b><%= barang[i].satuan%></b>
                        
                        </p>
                            
                    </div>
                    <%}}%>
                
                    <%if(uang.length){ %>
                      
                     <p>Recent donasi uang</p>
                    <% for(var i=0;i<uang.length;i++){%>
                        <div class="well give">
                        <p><b>Donasi <%= uang[i].kategori%></b> Periode <b><%= uang[i].periode%></b> bulan Sebesar IDR <b><%= uang[i].b_donasi%></b></p> 
                    </div>
                    <%}}%>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="well give">
                    <div class="row">
                        <div class="col-md-10">
                            <h3><span class="fa fa-trophy textHijau"></span>
                My Point</h3>
                            <p>
                                Total point anda : <b><%= point %></b>
                            </p>

                        </div>
                        <div class="col-md-12 text-right">
                            <a href="/ranking" class="textHijau ">Lihat peringkat anda</a>
                        </div>

                    </div>
                </div>
                <div class="well give">
                    <div class="row">
                        <div class="col-md-10">
                            <h3><span class="fa fa-user textHijau"></span>
                My Profile</h3>
                            <% if(daftar1 !=''){%>
                            <p>
                                Anda Volunteer dalam bidang <b><%= daftar1 %></b>
                            </p>
                            <%}else{%>
                                <p>Anda belum bergabung sebagai volunteer <a href="/volunteer" class="textHijau">Daftar Sekarang</a></p>
                                
                            <%}%>
                        </div>
                        <div class="col-md-2 text-right"><span class="fa fa-pencil editan"></span></div>
                    </div>
                </div>
                <div class="well give">
                    <div class="row">
                        <div class="col-md-10">
                            <h3><span class="fa fa-lock textHijau"></span>
                Change Password</h3>
                        </div>
                        <div class="col-md-2 text-right"><span class="fa fa-pencil editan"></span></div>
                    </div>
                </div>
                <div class="well give">
                    <div class="row">
                        <div class="col-md-10">
                            <h3><span class="fa fa-comments textHijau"></span>
                    Communication Prefences
                    </h3>
                        </div>
                        <div class="col-md-2 text-right"><span class="fa fa-pencil editan" id="editcom"></span></div>
                        <div class="col-md-12">
                            <form action="">
                                <label class="checkbox ct-red" for="email" id="emaillabel">
                                    <input type="checkbox" value="" id="email" data-toggle="checkbox" disabled>Subscribe
                                </label>
                                <div id="tombolemail"></div>
                            </form>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
            <script>
                $("#editcom").click(function () {
                    $("#email").removeAttr('disabled');
                    $("#emaillabel").removeClass("disabled");
                    var tombol="<button type='submit' class='btn btn-flat btn-default hijau'>Simpan</button>"
                    $("#tombolemail").html(tombol);
                });
            </script>
</body>

</html>
