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
            <div class="col-lg-12 col-sm-12">

                <div class="card hovercard">
                    <div class="cardheader">

                    </div>
                    <div class="avatar">
                        <img alt="" src="/img/<%= item.foto %>">
                    </div>
                    <div class="info">
                        <div class="title">
                            Halo saya
                            <%= item.nama%>
                        </div>

                        <div class="desc">
                            Saya anak
                            <% if(item.jk==0){ %>
                                Laki-laki
                                <%}else{%>
                                    Perempuan
                                    <%}%>
                                        <%= umur%> tahun.Saya lahir
                                            <%= item.tgl_lahir%>.Saya tinggal di
                                                <%= item.lokasi%>
                        </div>
                        <p class="col-md-4 col-md-offset-4">
                        <a href="/daftarsponsor/<%= item.id%>" class="form-control btn btn-success hijauBorder" role="button">SPONSOR ME</a> </p>

                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well give">
                        <h3><span class="fa fa-gift textHijau"></span> My Story</h3>
                        <%- item.story.substr(0,200)%>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well give">
                        <h3><span class="fa fa-gift textHijau"></span> Lokasi</h3>
                        <%- item.lokasi%>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well give">
                        <h3><span class="fa fa-gift textHijau"></span> About Me</h3>
                        <div class="text-center">
                            <img src="/img/hobby.jpg" alt="">
                            <p>Saya sangat suka
                                <%- item.hobby%>
                            </p>

                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well give">
                        <h3><span class="fa fa-gift textHijau"></span>My Hobby</h3>
                        <div class="text-center">
                            <img src="/img/hobby.jpg" alt="">
                            <p>Saya sangat suka
                                <%- item.hobby%>
                            </p>

                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well give">
                        <h3><span class="fa fa-gift textHijau"></span>My Photo</h3>
                        <div class="text-center">
                            <img src="/img/<%= item.foto %>" alt="" style="width:100%;">


                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well give">
                        <h3><span class="fa fa-gift textHijau"></span>My birthday</h3>
                        <div class="text-center">
                            <img src="/img/tahun.jpg" alt="" style="width:100%;">
                            <p>My birthhy is
                                <b class="textHijau"><%- ubah(item.tgl_lahir)%></b>
                            </p>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
    <% include ../partials/footer.ejs %>
        <% include ../partials/script.ejs %>
</body>

</html>
