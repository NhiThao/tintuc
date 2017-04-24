<?php  require_once ('../giaodien/head.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        li{

        }
    </style>
</head>
<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <div class="menu1">
                <div class="p">
                    <p>Trang cá nhân</p>
                </div>
                <ul id="menu-left">
                    <li class="li"><a href="#userinfo" aria-controls="userinfo" role="tab" data-toggle="tab">Cập nhật thông tin cá nhân</a> <span class="glyphicon glyphicon-chevron-right hidden"></span></li>
                    <li class="li"><a href="#changepassword" aria-controls="changepassword" role="tab" data-toggle="tab">Đổi mật khẩu</a>  <span class="glyphicon glyphicon-chevron-right hidden"></span></li>
                    <li class="li"><a href="#">Thời khóa biểu</a>  <span class="glyphicon glyphicon-chevron-right hidden"></span></li>
                    <li class="li"><a href="#">Lịch thi</a>  <span class="glyphicon glyphicon-chevron-right hidden"></span></li>
                    <li class="li"><a href="#">Xem điểm</a>  <span class="glyphicon glyphicon-chevron-right hidden"></span></li>
                    <li></li>
                </ul>
            </div>
            <div class="menu2">
                <div class="p">
                    <p>Thông tin chung</p>
                </div>
                <ul>
                    <li>Mẫu giấy miễn-giảm học phí</li>
                    <li>Mẫu giấy miễn-giảm học phí</li>
                    <li>Mẫu giấy miễn-giảm học phí</li>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-sm-9 content">

            <div class="col-sm-8">
                <div class="row">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="userinfo">
                            <!-- user info -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Personal information</h4>
                                </div>
                                <!--form ca nhan-->
                                <div class="panel-body">
                                    <!--name-->
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputfirstname" class="col-md-4 control-label">
                                                First Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputfirstname" placeholder="Enter First Name..." />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputlastname" class="col-md-4 control-label">
                                                Last Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputlastname" placeholder="Enter Last Name..." />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputscreenname" class="col-md-4 control-label">
                                                Screen Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputscreenname" placeholder="Enter Screen Name..." />
                                            </div>
                                        </div>
                                        <!--end name-->
                                        <!--dob-->
                                        <div class="form-group">
                                            <label for="inputdateofbirth" class="col-md-4 control-label"> Date of Birth</label>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <select class="form-control" name="">
                                                            <option value="">January</option>
                                                            <option value="">February</option>
                                                            <option value="">March</option>
                                                            <option value="">April</option>
                                                            <option selected value="">May</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select name="" class="form-control">
                                                            <option value="">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                            <option value="">4</option>
                                                            <option selected value="">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select name="" class="form-control">
                                                            <option value="">1980</option>
                                                            <option value="">1981</option>
                                                            <option value="">1982</option>
                                                            <option value="">1983</option>
                                                            <option value="">1984</option>
                                                            <option selected value="">1985</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end dob-->
                                        <!--gioi tinh-->
                                        <div class="form-group">
                                            <label for="inputgender" class="col-md-4">
                                                Gender
                                            </label>
                                            <div class="col-md-8 ">
                                                <label style="margin-right: 10px">
                                                    <input type="radio" name="gender"> Male
                                                </label>
                                                <label>
                                                    <input type="radio" name="gender"> Female
                                                </label>
                                            </div>
                                        </div>
                                        <!--end gioi tinh-->
                                        <!--country-->
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-4">
                                                Country</label>
                                            <div class="col-md-8">
                                                <select name="" class="form-control">
                                                    <option value="">Viet Nam</option>
                                                    <option value="">Canada</option>
                                                    <option value="">United Kingdom</option>
                                                    <option selected value="">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end country-->
                                        <!--phone and email-->
                                        <div class="form-group">
                                            <label for="inputemail" class="col-md-4">
                                                E-mail</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputemail" placeholder="Enter E-mail......"></input>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputphone" class="col-md-4">
                                                Phone</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputphone" placeholder="Enter Phone......"></input>
                                            </div>
                                        </div>
                                        <!--end phone and email-->
                                        <!--Password and Confirm Password-->
                                        <div class="form-group">
                                            <label for="inputpassword" class="col-md-4">
                                                Password</label>
                                            <div class="col-md-8">
                                                <input type="password" name="" class="form-control" value="" placeholder="Enter password......">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputconfirmpassword" class="col-md-4">
                                                Confirm Password</label>
                                            <div class="col-md-8">
                                                <input type="password" name="" class="form-control" value="" placeholder="Re-enter password......">
                                            </div>
                                        </div>
                                        <!--end Password and Confirm Password-->
                                        <!--check box-->
                                        <div class=”form-group”>
                                            <div>
                                                <div class="checkbox">
                                                    <label style="padding-top: initial;">
                                                        <input type="checkbox"> I agree to the Terms of Use</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end check box-->
                                        <!--button-->
                                        <!--end button-->
                                    </form>
                                </div>
                                <!-- end body-->
                                <div class="panel-footer" style="height: 50px">
                                    <div class="form-group">
                                        <div class="button">
                                            <input type="submit" name="submit" value="cancel" class="btn btn-default">
                                            <input type="submit" name="submit" value="submit" class="btn btn-default">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end user info -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="changepassword">
                            <!-- change password -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Change password</h4>
                                </div>
                                <div class="panel-body">
                                    <!--name-->
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputfirstname" class="col-md-4 control-label">Current Pass</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputfirstname" placeholder="Enter your pass..." />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputlastname" class="col-md-4 control-label">New Pass</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputlastname" placeholder="New Pass..." />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputscreenname" class="col-md-4 control-label">Retype New Pass</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputscreenname" placeholder="Retype New Pass..." />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-footer" style="height: 50px">
                                    <div class="form-group">
                                        <div class="button">
                                            <input type="submit" name="submit" value="cancel" class="btn btn-default">
                                            <input type="submit" name="submit" value="submit" class="btn btn-default">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end change password -->
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
</div>
</body>

</html>