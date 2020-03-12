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
    <link href="assets2/css/demo.css" rel="stylesheet"/>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets2/img/sidebar-2.jpg">
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
                    <li>
                        <li class="nav-item active">
                        <a class="nav-link" href="chief">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>New Users</p>
                        </a>
                    </li>
                    </li>
                  <li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="newcompany"> Users </a>
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
                                    <i class="nc-icon nc-notes"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ ('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ 'logout'}}" method="POST" style="display: none;">
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
                                    <h4 class="card-title">NEW Profile</h4>
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="{{'member'}}"  enctype="multipart/form-data">
                                      @csrf
                                        <div class="form">
                                          <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Company (Code)(กรุณาติดต่อ HR)</label>
                                                    <input type="text" class="form-control is-invalid @error('code') is-invalid @enderror" placeholder="Code"  name="code"   required autocomplete="code" autofocus>
                                                    @error('code')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message}}</strong>
                                                        </span>
                                                    @enderror
                                                    @if(\Session::has('successv'))
                                                    <font color="red">{{\Session::get('successv')}}</font>
                                                    @endif
                                                </div>
                                            </div>
                                              <div class="col-md-4 pr-1">
                                                  <div class="form-group">
                                                      <label>ชื่อ</label>
                                                      <input type="text" class="form-control is-invalid @error('firstnamebem') is-invalid @enderror" placeholder="firstname"  name="firstnamebem"   required autocomplete="firstnamebem" autofocus>
                                                      @error('firstnamebem')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message}}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-4 pl-1">
                                                  <div class="form-group">
                                                      <label>นามสกุล</label>
                                                      <input type="text" class="form-control is-invalid @error('lastnamebem') is-invalid @enderror" placeholder="LastName" name="lastnamebem" required autocomplete="lastnamebem" autofocus>
                                                      @error('lastname')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message}}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>ชื่อเล่น</label>
                                                    <input type="text" class="form-control" placeholder="nickname" name="nickname" >
                                                </div>
                                            </div>
                                              <div class="col-md-6 pr-1">
                                                  <div class="form-group">
                                                      <label>อายุ</label>
                                                      <input type="text" class="form-control" placeholder="age"  name="age"  >
                                                      @error('age')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message}}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>วว/ดด/ปป</label>
                                                    <div class="md-form">
                                                    <input class="form-control" type="date" value="วว-ดด-ปป" id="example-date-input">
                                                  </div>
                                                </div>
                                            </div>
                                              <div class="col-md-6 pr-1">
                                                  <div class="form-group">
                                                      <label>เบอร์ติดต่อ</label>
                                                      <input type="text" class="form-control is-invalid @error('tel') is-invalid @enderror" placeholder="Tel"  name="tel"   required autocomplete="tel" autofocus>
                                                      @error('tel')
                                                          <span class="invalid-feedback" role="alert">
                                                            <font color="red">{{"กรุณากรอก ตัวเลข เท่านั้น"}}</font>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-8 pr-1">
                                                  <div class="form-group">
                                                      <label>เบอร์ติดต่อฉุกเฉิน</label>
                                                      <input type="text" class="form-control is-invalid @error('tel2') is-invalid @enderror" placeholder="tel2"  name="tel2"   required autocomplete="tel2" autofocus>
                                                      @error('tel2')
                                                          <span class="invalid-feedback" role="alert">
                                                            <font color="red">{{"กรุณากรอก ตัวเลข เท่านั้น"}}</font>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-4 pl-1">
                                                  <div class="form-group">
                                                      <label>ชื่อเบอร์ติดต่อฉุกเฉิน</label>
                                                      <input type="text" class="form-control is-invalid @error('telname2') is-invalid @enderror " placeholder="telname2" name="telname2"  autocomplete="telname2" autofocus>
                                                      @error('telname2')
                                                          <span class="invalid-feedback" role="alert">
                                                              <font color="red">{{"กรุณากรอก ตัวเลข เท่านั้น"}}</font>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-8 pr-1">
                                                  <div class="form-group">
                                                      <label>เบอร์ติดต่อฉุกเฉิน 2</label>
                                                      <input type="text" class="form-control " placeholder="Tel3"  name="tel3" autocomplete="telname3" autofocus>
                                                  </div>
                                              </div>
                                              <div class="col-md-4 pl-1">
                                                  <div class="form-group">
                                                      <label>ชื่อเบอร์ติดต่อฉุกเฉิน 2</label>
                                                      <input type="text" class="form-control " placeholder="telname3" name="telname3"  autocomplete="telname3" autofocus>
                                                  </div>
                                              </div>
                                          </div>
                                        <div class="col-md- pr-1">
                                          <div class="form-group">
                                            <label for="inputPassword4">ที่อยู่</label>
                                            <input id="name" type="text" class="form-control is-invalid @error('address') is-invalid @enderror" name="address" placeholder="Address"   autocomplete="address" autofocus>
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
                                                      <input type="text" class="form-control" placeholder="City"  name="city"  autocomplete="city" autofocus>
                                                  </div>
                                              </div>
                                              <div class="col-md-3 pl-1">
                                                  <div class="form-group">
                                                      <label>รหัสไปรษณีย์</label>
                                                      <input type="text" class="form-control" placeholder="ZIP Code" name="postalcode" autocomplete="postalcode" autofocus>
                                                  </div>
                                              </div>
                                              <div class="col-md-3 pl-1">
                                                  <div class="form-group">
                                                      <label for="inputState">สถานะ</label>
                                                      <select id="inputState" class="form-control" name="status2">
                                                        <option selected>เลือก</option>
                                                        <option value="โสด">โสด</option>
                                                        <option value="เเต่งาน">เเต่งาน</option>
                                                        <option value="หย่าร้าง">หย่าร้าง</option>
                                                        <option value="เเยกกันอยู่">เเยกกันอยู่</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleFormControlFile1">Uplode image</label>
                                            <input type="file" class="form-control" id="image"  name="image">
                                          </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">create Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4  pl-1">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="img/imgback/large_4.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="img/profile/w644.jpg" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        Employee Time Management
                                        <br>online leave system,Time
                                        <br> leave,sick leave,Personal
                                    </p>
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
    <!--   -->
</body>
<!--   Core JS Files   -->
<script src="assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets2/js/plugins/bootstrap-switch.js"></script>
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
