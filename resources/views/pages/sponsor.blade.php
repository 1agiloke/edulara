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

            <div class="row">
                <div class="col-md-12 sixPath pad">
                    <h3 class="text-center">
                        Jadilah Sponsor untuk seorang anak.
                    </h3>
                    <div class="col-md-8 col-md-offset-2">
                        <h5 class="text-center pad">
                            Dengan menjadi sponsor anak merupakan <b>jalan pribadi</b>  untuk menunjukan kepada Cinta Tuhan kepada anak yang membutuhkan.Dengan Rp.500.000 satu bulan,kamu sudah menolong <b>seorang anak</b> untuk tetap mendapatkan pendidikan yang layak.
                        </h5>
                        <div class="row pad">
                            <form method="post" action="/sponsor">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <select class="selectpicker form-control" title="Lokasi" name="lokasi">
                                            <% for(var i=0;i<lokasi.length;i++){%>
                                            <option value="<%= lokasi[i].lokasi%>"><%= lokasi[i].lokasi%></option>  
                                            <%}%>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <select class="selectpicker form-control" title="Jenis Kelamin" name="jk">
                                            <option value="0">Laki-laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>

                                    </div>
                                </div>
                           
                                <div class="col-md-4">
                                    <button type="submit" class="form-control btn btn-flat btn-default hijau">Cari</button>
                                </div>
                            </form>
                        </div>
                        <p class="text-center">
                            Kami akan menemukan beberapa anak yang sesuai dengan kriteria anda
                        </p>


                    </div>

                </div>



            </div>

        <div class="row sponsorChild">
            <div class="container">
                <div class="col-md-12">

                    <!--
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="Speak-Out-1.jpg" style="height: 200px; width: 100%; display: block;" alt="">
                            <div class="caption text-center">
                                <h3>NAMA ANAK</h3>
                                <p>Gender | Umur | Lokasi </p>
                                <p><a href="#" class="form-control btn btn-success hijauBorder" role="button">SPONSOR ME</a> </p>
                                <p><a href="#" class="form-control btn btn-primary" role="button">My Profile</a> </p>
                            </div>
                        </div>
                    </div>
-->
                    <% for(var i=0;i<dSponsor.length;i++){%>
                        <div class="col-lg-4 col-sm-6">

                            <div class="card hovercard">
                                <div class="cardheader">

                                </div>
                                <div class="avatar">
                                    <img alt="" src="/img/<%= dSponsor[i].foto %>">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <%= dSponsor[i].nama%>
                                    </div>
                                    <div class="desc">
                                        <% if(dSponsor[i].jk==0){ %>
                                            Laki-laki
                                            <%}else{%>
                                                Perempuan
                                                <%}%>
                                    </div>
                                    <div class="desc">
                                        <%= cekUmur[i]%> tahun</div>
                                    <div class="desc">
                                        <%= dSponsor[i].lokasi%>
                                    </div>
                                    <p><a href="#" class="form-control btn btn-success hijauBorder" role="button">SPONSOR ME</a> </p>
                                    <p><a href="/sponsor/<%= dSponsor[i].id%>" class="form-control btn btn-primary" role="button">My Profile</a> </p>
                                </div>

                            </div>

                        </div>
                        <%}%>


                            <p><a href="/sponsor" class="form-control btn btn-primary" role="button">LOAD MORE</a> </p>


                </div>
            </div>

        </div>


    </div>
    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
</body>

</html>
