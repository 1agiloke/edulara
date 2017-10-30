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
                            <div class="col-md-4">

                                <div class="form-group">
                                    <select class="selectpicker form-control" title="Lokasi">
                                        <% for(var i=0;i<lokasi.length;i++){%>
                                            <option value="<%= lokasi[i].lokasi%>"><%= lokasi[i].lokasi%></option>  
                                            <%}%>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <select class="selectpicker form-control" title="Jenis Kelamin">
                                        <option value="0">Laki-laki</option>
                                            <option value="1">Perempuan</option>
                                    </select>

                                </div>
                            </div>
                          
                            <div class="col-md-4">
                                <button href="#" class="form-control btn btn-flat btn-default hijau">Cari</button>
                            </div>
                        </div>
                        <p class="text-center">
                            Kami akan menemukan beberapa anak yang sesuai dengan kriteria anda
                        </p>


                    </div>

                </div>



            </div>
            <!-- End row -->

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
                                    <div class="desc"><%= cekUmur[i]%> tahun</div>
                                    <div class="desc"><%= dSponsor[i].lokasi%></div>
                                    <p><a href="/daftarsponsor/<%= dSponsor[i].id%>" class="form-control btn btn-success hijauBorder" role="button">SPONSOR ME</a> </p>
                                <p><a href="/sponsor/<%= dSponsor[i].id%>" class="form-control btn btn-primary" role="button">My Profile</a> </p>
                                </div>

                            </div>

                        </div>
                        <%}%>


                            <p><a href="/sponsor" class="form-control btn btn-primary" role="button">LOAD MORE</a> </p>


                </div>
            </div>

        </div>
        <div class="row pad">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Apa yang kamu dapatkan?</h3>
                <span>
                        Paket berisi surat mengenai informasi Anak &#x2022 Foto tahunan anak &#x2022 Reguler email update <br>
                        Dengan pengalaman digital kami,anda akan mendapatkan kemampuan untuk memantau perkembangan kemajuan anak melalui email
                    </span>
                <p>
                    <img src="/img/sponsor-a-child-what-you-receive-desktop.jpg">
                </p>
            </div>
        </div>
        <div class="row sponsorChild" style="padding:60px 0;">
            <div class="container text-center">
                <h3>Sponsor anak memiliki pertanyaan?</h3>
                <span>Pelajari lebih lanjut bagaimana sponsor bekerja dengan FAQ kami.</span>
            </div>
        </div>
        <div class="row pad">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>Sponsori seorang anak - FAQ</h3>
                    <p>Ini hanya beberapa pertanyaan tentang menjadi sponsor seorang anak.Untuk lebih lanjut kunjungi halaman <a href="#">tentang menjadi sponsor anak</a>.</p>
                    <ol class="text-left">
                        <li>
                            <h3>Lorem Ipsum dolor dolar ? </h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </li>
                        <li>
                            <h3>Lorem Ipsum dolor dolar ? </h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </li>
                        <li>
                            <h3>Lorem Ipsum dolor dolar ? </h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </li>
                        <li>
                            <h3>Lorem Ipsum dolor dolar ? </h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </li>
                        <li>
                            <h3>Lorem Ipsum dolor dolar ? </h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
</body>

</html>
