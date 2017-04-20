<?php  require_once ('../giaodien/head.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid">
    <!--documents-->
    <div class="row row-offcanvas row-offcanvas-left">

        <div  role="navigation" style="width: 200px;float: left;margin-left: 70px">
            <ul class="list-group panel" style="border: none">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b> Danh mục</b></li>
                <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                <li class="list-group-item"><a href="dangtin.php"><i class="glyphicon glyphicon-home"></i>  QL đăng tin </a></li>
                <li class="list-group-item" style="color: #23527c"><i class="glyphicon glyphicon-th-list"></i>  QL tài khoản
                    <ul class="menu-left" style="margin-left: 20px">
                        <li style="padding: 5px 20px 0px 10px">
                            <a href="newaccount.php">Tạo tài khoản mới</a>
                        </li>
                        <li style="padding: 5px 20px 0px 10px">
                            <a href="changepasss.php">Cấp lại mật khẩu</a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item" style="color: #23527c"><i class="glyphicon glyphicon-list-alt"></i>  QL Giáo viên
                    <ul class="menu-left" style="margin-left: 20px">
                        <li style="padding: 5px 20px 0px 10px">
                            <a href="dsgv.php">Danh sách giáo viên</a>
                        </li>
                        <li style="padding: 5px 20px 0px 10px">
                            <a href="teacher-information.php">Thông tin chi tiết</a>
                        </li>
                    </ul>
                </li>

                <li class="list-group-item" style="color: #23527c"><i class="glyphicon glyphicon-bell"></i>  QL Học sinh
                    <ul class="menu-left" style="margin-left: 20px">
                        <li style="padding: 5px 20px 0px 10px">
                            <a href="dshs.php">Danh sách học sinh</a>
                        </li>
                        <li style="padding: 5px 20px 0px 10px">
                            <a href="student-information.php" >Thông tin  chi tiết</a>
                        </li>
                    </ul>

                </li>
                <li class="list-group-item" style="color: #23527c"><i class="glyphicon glyphicon-indent-left"></i>  Calendar</a>

                    <div class="calendar">
                        <div class="years clearfix">
                            <div class="unit prev"><em></em></div>
                            <div class="monyear">MAY 2014</div>
                            <div class="unit next"><em></em></div>
                        </div>
                        <div class="days">
                            <div class="clearfix" style="font-size: 12px">
                                <div class="unit">SU</div>
                                <div class="unit">MO</div>
                                <div class="unit">TU</div>
                                <div class="unit">WE</div>
                                <div class="unit">TH</div>
                                <div class="unit">FR</div>
                                <div class="unit">SA</div>
                            </div>
                            <div class="clearfix" style="font-size: 11px">
                                <div class="unit older"><p>27</p></div>
                                <div class="unit older"><p>28</p></div>
                                <div class="unit older"><p>29</></div>
                                <div class="unit older"><p>30</p></div>
                                <div class="unit"><p>1</></div>
                                <div class="unit"><p>2</p></div>
                                <div class="unit"><p>3</p></div>
                                <div class="unit"><p>4</p></div>
                                <div class="unit"><p>5</p></div>
                                <div class="unit"><p>6</p></div>
                                <div class="unit"><p>7</p></div>
                                <div class="unit"><p>8</p></div>
                                <div class="unit"><p>9</p></div>
                                <div class="unit"><p>10</p></div>
                                <div class="unit"><p>11</p></div>
                                <div class="unit"><p>12</p></div>
                                <div class="unit"><p>13</p></div>
                                <div class="unit active"><p>14</p></div>
                                <div class="unit"><p>15</p></div>
                                <div class="unit"><p>16</p></div>
                                <div class="unit"><p>17</p></div>
                                <div class="unit"><p>18</p></div>
                                <div class="unit"><p>19</p></div>
                                <div class="unit"><p>20</p></div>
                                <div class="unit"><p>21</p></div>
                                <div class="unit"><p>22</p></div>
                                <div class="unit"><p>23</p></div>
                                <div class="unit"><p>24</p></div>
                                <div class="unit"><p>25</p></div>
                                <div class="unit"><p>26</p></div>
                                <div class="unit"><p>27</p></div>
                                <div class="unit"><p>28</p></div>
                                <div class="unit"><p>29</p></div>
                                <div class="unit"><p>30</p></div>
                                <div class="unit"><p>31</p></div>
                                <div class="unit older"><p>1</p></div>
                                <div class="unit older"><p>2</p></div>
                                <div class="unit older"><p>3</p></div>
                                <div class="unit older"><p>4</p></div>
                                <div class="unit older"><p>5</p></div>
                                <div class="unit older"><p>6</p></div>
                                <div class="unit older"><p>7</p></div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="list-group-item"><a href="calendars.php"><i class="glyphicon glyphicon-calendar"></i>  ....</a></li>

            </ul>
        </div>
        <div class="col-xs-12 col-sm-9 content" >
            <div class="main" style="width: 95%; height: 1000px; border: 1px solid #ddd; border-radius: 5px;background-color: white">
                <div class="title" style="background-color: white;height: 43px;border-radius: 5px;;">
                    <h3 style="padding: 11px 0 11px 20px; font-size: 17px ;border-bottom: 1px solid #ddd" class="panel-title">
                        <a href="javascript:void(0);" class="toggle-sidebar">
                            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Nội dung</h3>
                </div>
                <div class="panel-body">

                    <h2 style="font-family: Georgia, Palatino, Times New Roman ,Times; color:#8F1D21;text-align: center;font-weight: bold;
                        text-shadow: 2px 2px 10px #cc0000;;">
                        Chưa có
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>