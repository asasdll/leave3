<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{  'leave' }}</title>
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('/') }}/img/imgback/icon1.jpg" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets2/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets2/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>

                <ul class="nav">
                  <li class="nav-item ">
                      <a class="nav-link" href="home">
                          <i class="nc-icon nc-circle-09"></i>
                          <p>NewCompany</p>
                      </a>
                  </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="home">
                            <i class="nc-icon nc-badge"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="table">
                            <i class="nc-icon nc-notes"></i>
                            <p>Time List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="pos">
                            <i class="nc-icon nc-grid-45"></i>
                            <p>ตำเเหน่ง</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="usersprofile">
                            <i class="nc-icon nc-single-02"></i>
                            <p>พนักงาน</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="leave">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>การขออนุมัติลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="record">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>ประวัติการลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="mac">
                            <i class="nc-icon nc-circle"></i>
                            <p>Mac Address</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="status">
                            <i class="nc-icon nc-refresh-02"></i>
                            <p>เปลี่ยนสถานะ</p>
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link active" href="#">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Company </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-badge"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-refresh-02"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{'logout'}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="alert alert-warning">ระบบการลา ยังไม่สามารถใช้งานได้ หากยังไม่ได้เพิ่มตำเเหน่งงาน เเละ เพิ่มพนักงานในตำเเหน่ง</h4>
                                    <h4 class="card-title">Profile</h4>
                                </div>
                                <div class="card-body">
                                    @foreach($hrbumble as $ticket)
                                    <form >
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Company (Code)</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$ticket->newcode}}">
                                                </div>
                                            </div>
                                            <div class="col-md-7 px-1">
                                                <div class="form-group">
                                                    <label>ชื่อบริษัท</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Username" value="{{$ticket->companyname}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>ชื่อ</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Company" value="{{$ticket->firstnamebem}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>นามสกุล</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Last Name" value="{{$ticket->lastnamebem}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>เบอร์ติดต่อ</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Tel"  name="tel"   value="{{$ticket->tel}}"  required autocomplete="tel" autofocus>
                                                    @error('tel')
                                                        <span class="invalid-feedback" role="alert">
                                                          <font color="red">{{"กรุณากรอก ตัวเลข เท่านั้น"}}</font>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>เบอร์บริษัท</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="tel2" name="tel2"  value="{{$ticket->tel2}}" autocomplete="tel2" autofocus>
                                                    @error('tel2')
                                                        <span class="invalid-feedback" role="alert">
                                                            <font color="red">{{"กรุณากรอก ตัวเลข เท่านั้น"}}</font>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md- pr-1">
                                          <div class="form-group">
                                            <label for="inputPassword4">ที่อยู่</label>
                                            <input id="name" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{$ticket->address}}" required autocomplete="address" autofocus>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message}}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                          <div class="row">
                                              <div class="col-md-6 pr-1">
                                                  <div class="form-group">
                                                      <label>จังหวัด</label>
                                                      <input type="text" class="form-control  @error('city') is-invalid @enderror" placeholder="City"  name="city" value="{{$ticket->city}}" required autocomplete="city" autofocus>
                                                      @error('city')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message}}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-6 pl-1">
                                                  <div class="form-group">
                                                      <label>รหัสไปรษณีย์</label>
                                                      <input type="text" class="form-control  @error('address') is-invalid @enderror" placeholder="ZIP Code" name="postalcode" value="{{$ticket->postalcode}}" required autocomplete="postalcode" autofocus>
                                                      @error('postalcode')
                                                          <span class="invalid-feedback" role="alert">
                                                                <font color="red">{{'ตรวจสอบ รหัสไปรษณีย์ อีกครั้ง'}}</frot>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="{{action('NewcompaniesController@edit',$ticket->id)}}" class="btn btn-info btn-fill pull-right" role="button" aria-pressed="true">Edit Profile</a>
                                        <div class="clearfix"></div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="img/imgback/large_8.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                           @foreach($hrbumble as $ticket)
                                            <img class="avatar border-gray" src="img/profile/{{$ticket->image}}" alt="...">

                                            <h5 class="title">{{$ticket->companyname}}</h5>
                                        </a>
                                        <p class="description">
                                                 <font color="primary"> {{$ticket->newcode}}</font>
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                      {{$ticket->firstname}}   {{$ticket->lastname}}
                                        <br>Tel- {{$ticket->tel}}
                                        <br>Tel- {{$ticket->tel2}}
                                        <br> {{$ticket->address}}
                                        <br> {{$ticket->city}}  {{$ticket->postalcode}}
                                    </p>
                                    @endforeach
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    
 <!---  -->
</body>
<!--   Core JS Files   -->
<script src="assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="ssets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets2/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets2/js/demo.js"></script>

</html>
