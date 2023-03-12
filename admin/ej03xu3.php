<?php 
session_start();  //很重要，可以用的變數存在session裡
// echo "<a href='fh38h94_logout.php'>登出</a>";
// if($_SESSION['username'] != null)
// {

// }
// else
// {
//         echo '您無權限觀看此頁面!';
//         echo '<meta http-equiv=REFRESH CONTENT=2;url=ji3ul42bj4_login.php>';
// }

include('../config/tYe87TDinf_db_cn.php');  //這是引入剛剛寫完，用來連線的.php

?>
<?php 
    //抓取nav資料
	$query = "SELECT * FROM nav"; //搜尋 *(全部欄位) ，從 表staff
	//mysqli_query << PHP 有很多種...指令(?) ，這是其中一個，我現在還都是學到甚麼用什麼，沒辦法自己看手冊，然後實驗+學習使用。 
	$query_run = mysqli_query($link,$query); //$con <<此變數來自引入的 db_cn.php

    //抓取banner資料
    $banner = "SELECT * FROM banner";
    $banner_run = mysqli_query($link,$banner);

    //抓取news資料
    $news = "Select * From news Where number = '1'";
    $news_run = mysqli_query($link,$news);

    $news2 = "Select * From news Where number = '2'";
    $news2_run = mysqli_query($link,$news2);

    $news3 = "Select * From news Where number = '3'";
    $news3_run = mysqli_query($link,$news3);

    //抓取about資料
    $about = "SELECT * FROM about";
    $about_run = mysqli_query($link,$about);

    //抓取platform資料
    $platform1 = "Select * From platform Where number = '1'";
    $platform_run1 = mysqli_query($link,$platform1);

    $platform2 = "Select * From platform Where number = '2'";
    $platform_run2 = mysqli_query($link,$platform2);

    $platform3 = "Select * From platform Where number = '3'";
    $platform_run3 = mysqli_query($link,$platform3);

    $platform4 = "Select * From platform Where number = '4'";
    $platform_run4 = mysqli_query($link,$platform4);
    
    $platform5 = "Select * From platform Where number = '5'";
    $platform_run5 = mysqli_query($link,$platform5);

    //抓取footer資料
    $footer = "SELECT * FROM footer";
    $footer_run = mysqli_query($link,$footer);

?>

<?php 
    if($_SESSION['username'] != null)
        {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>Document</title>

    <style>
        /* * {
            outline: 1px solid black;
        } */

        .nav-pills .nav-link.active {
            background-color: #02DF82;
            border-radius: inherit;
        }

        .nav-link {
            color: aliceblue;
            font-size: 14px;
        }
        /* The sidebar menu */
        .sidebar {
        height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0;
        left: 0;
        background-color: #408080; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
        }

        /* The sidebar links */
        .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: black;
        display: block;
        transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidebar a:hover {
        color: #f1f1f1;
        }

        /* Position and style the close button (top right corner) */
        .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        }

        /* The button used to open the sidebar */
        .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
        }

        .openbtn:hover {
        background-color: #444;
        }

        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        #main {
        transition: margin-left .5s; /* If you want a transition effect */
        /* padding: 20px; */
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
        .sidebar {padding-top: 15px;}
        .sidebar a {font-size: 18px;}
        }

        .openbtn{
            display: none;
        }
        @media (max-width: 575.99px) {
            .openbtn{
            display: block;
        }
        .col-2{
            display: none;
        }
    }
    </style>

</head>

<body>

    <!-- Image and text -->
    <nav class="navbar navbar-light " style="background-color: #004767;">
        <a class="navbar-brand " href="#">
            <img src="../img/logo1.png" width="100px" height="75px" class="" alt="">
            <span class="text-white ml-3">後臺管理</span>
        </a>
        <form class="form-inline my-2 my-lg-0" action="fh38h94_logout.php">
            <span style="margin-right: 20px" class="text-white ml-3">你好&nbsp;&nbsp;<?php echo $_SESSION["username"] ?></span>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">登出</button>
        </form>

    </nav>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="nav flex-column nav-pills h-100" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                style="
        background-color: 		#408080;
        
        ">
                <button class="nav-link active pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-home-tab" data-toggle="pill"
                    data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true"><i class="bi bi-text-center mr-1"></i>導覽列文字修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-profile-tab" data-toggle="pill"
                    data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false"><i class="bi bi-stop-btn mr-1"></i>Banner文字修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-messages-tab" data-toggle="pill"
                    data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false"><i class="bi bi-newspaper mr-1"></i>新聞文字修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-settings-tab" data-toggle="pill"
                    data-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false"><i class="bi bi-file-person mr-1"></i>關於我們修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-platform-tab" data-toggle="pill"
                    data-target="#v-pills-platform" type="button" role="tab" aria-controls="v-pills-platform"
                    aria-selected="false"><i class="bi bi-globe mr-1"></i>平台內容修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-footer-tab" data-toggle="pill"
                    data-target="#v-pills-footer" type="button" role="tab" aria-controls="v-pills-footer"
                    aria-selected="false"><i class="bi bi-phone-vibrate mr-1"></i>聯絡我們修改</button>
            </div>
    </div>

    <div id="main" class="row mh-100" style="height: 1600px; width: 101%; background-color: #F0F0F0;">
    <button class="openbtn col-1"  onclick="openNav()"></button>
    



    <!-- <div class="row mh-100" style="height: 1600px; width: 101%; background-color: #F0F0F0;"> -->
        <div class="col-2">
            <div class="nav flex-column nav-pills h-100" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                style="
        background-color: 		#408080;
        
        ">
                <button class="nav-link active pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-home-tab" data-toggle="pill"
                    data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true"><i class="bi bi-text-center mr-1"></i>導覽列文字修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-profile-tab" data-toggle="pill"
                    data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false"><i class="bi bi-stop-btn mr-1"></i>Banner文字修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-messages-tab" data-toggle="pill"
                    data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false"><i class="bi bi-newspaper mr-1"></i>新聞文字修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-settings-tab" data-toggle="pill"
                    data-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false"><i class="bi bi-file-person mr-1"></i>關於我們修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-platform-tab" data-toggle="pill"
                    data-target="#v-pills-platform" type="button" role="tab" aria-controls="v-pills-platform"
                    aria-selected="false"><i class="bi bi-globe mr-1"></i>平台內容修改</button>
                <button class="nav-link pt-3 pb-3 pl-4  font-weight-bold border-bottom  text-left rounded-0" id="v-pills-footer-tab" data-toggle="pill"
                    data-target="#v-pills-footer" type="button" role="tab" aria-controls="v-pills-footer"
                    aria-selected="false"><i class="bi bi-phone-vibrate mr-1"></i>聯絡我們修改</button>
            </div>
        </div>
        <div class="col-10 p-5" >
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                <?php
			        if(mysqli_num_rows($query_run) > 0)
				        {
					        foreach($query_run as $row)
					            {
			    ?>
                                    <label class="font-weight-bold" for="basic-url">導覽列文字修改</label>
                                    <form method="POST" action="nav_fm4ep_fup.php">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">首頁文字為:</span>
                                        </div>
                                        <input name="field1" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['field1']; ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">關於我們文字為:</span>
                                        </div>
                                        <input name="field2" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['field2']; ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">新聞文字為:</span>
                                        </div>
                                        <input name="field3" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['field3']; ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">產品平台文字為:</span>
                                        </div>
                                        <input name="field4" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['field4']; ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">產品平台下拉文字為:</span>
                                        </div>
                                        <input name="field5" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['field5']; ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">產品平台下拉文字為:</span>
                                        </div>
                                        <input name="field6" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['field6']; ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">產品平台下拉文字為:</span>
                                        </div>
                                        <input name="field7" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['field7']; ?>">
                                    </div>
                                    <div class="mx-auto" style="width: 80px;">
                                        <button type="submit" class="btn btn-danger">更新</button>
                                    </div>
                                    </form>
                <?php
				                }
				        }
			    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <?php
                    if(mysqli_num_rows($banner_run) > 0)
                    {
                        foreach($banner_run as $ban)
                        {
			    ?>
                            <label class="font-weight-bold" for="basic-url">Banner文字修改</label>
                            <form method="POST" action="banner_fm4ep_fup.php">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">第一行文字為:</span>
                                </div>
                                <input name="banner_text" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $ban['text']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">第二行文字為:</span>
                                </div>
                                <input name="banner_text2" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $ban['text2']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                </div>
                                <input name="banner_button" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $ban['button']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">按鈕連結為:</span>
                                </div>
                                <input name="banner_link" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $ban['link']; ?>">
                            </div>
                            <div class="mx-auto" style="width: 80px;">
                                <button type="submit" class="btn btn-danger">更新</button>
                            </div>
                            </form>
                 <?php
				        }
				    }
			    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <?php
                    if(mysqli_num_rows($news_run) > 0)
                    {
                        foreach($news_run as $new)
                        {
			    ?>
                            <label class="font-weight-bold" for="basic-url">第一新聞欄位</label>
                            <form method="POST" action="news_fm4ep_fup.php">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                </div>
                                <input name="new_title" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new['title']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                </div>
                                <input name="new_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new['text']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">文章連結為:</span>
                                </div>
                                <input name="new_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new['link']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                </div>
                                <input name="new_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new['button']; ?>">
                            </div>
                            <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                            </div>
                            </form>
                <?php
				        }
				    }
			    ?>
                <?php
                    if(mysqli_num_rows($news2_run) > 0)
                    {
                        foreach($news2_run as $new2)
                        {
			    ?>
                            <label class="font-weight-bold" for="basic-url">第二新聞欄位</label>
                            <form method="POST" action="news2_fm4ep_fup.php">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                </div>
                                <input name="new2_title" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new2['title']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                </div>
                                <input name="new2_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new2['text']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">文章連結為:</span>
                                </div>
                                <input name="new2_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new2['link']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                </div>
                                <input name="new2_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new2['button']; ?>">
                            </div>
                            <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                            </div>
                            </form>
                <?php
				        }
				    }
			    ?>
                <?php
                    if(mysqli_num_rows($news3_run) > 0)
                    {
                        foreach($news3_run as $new3)
                        {
			    ?>
                            <label class="font-weight-bold" for="basic-url">第三新聞欄位</label>
                            <form method="POST" action="news3_fm4ep_fup.php">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                </div>
                                <input name="new3_title" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new3['title']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                </div>
                                <input name="new3_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new3['text']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">文章連結為:</span>
                                </div>
                                <input name="new3_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new3['link']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                </div>
                                <input name="new3_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $new3['button']; ?>">
                            </div>
                            <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                            </div>
                            </form>
                <?php
				        }
				    }
			    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <?php
                    if(mysqli_num_rows($about_run) > 0)
                        {
                            foreach($about_run as $abou)
                            {
                ?>
                                <label class="font-weight-bold" for="basic-url">關於我們修改</label>
                                <form method="POST" action="about_fm4ep_fup.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                    </div>
                                    <input name="about_title" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $abou['title']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                    </div>
                                    <input name="about_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $abou['text']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">尾句文字為:</span>
                                    </div>
                                    <input name="about_footer" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $abou['footer']; ?>">
                                </div>
                                <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                            </div>
                            </form>
                <?php
				            }
				        }
			    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-platform" role="tabpanel" aria-labelledby="v-pills-platform-tab">
                <?php
                    if(mysqli_num_rows($platform_run1) > 0)
                        {
                            foreach($platform_run1 as $plat1)
                            {
                ?>
                                <label class="font-weight-bold" for="basic-url">第一大欄位修改</label>
                                <form method="POST" action="products1_fm4ep_fup.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">欄位連結為:</span>
                                    </div>
                                    <input name="platform1_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat1['link']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                    </div>
                                    <input name="platform1_title" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat1['title']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                    </div>
                                    <input name="platform1_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat1['text']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                    </div>
                                    <input name="platform1_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat1['button']; ?>">
                                </div>
                                <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                                </div>
                                </form>
                <?php
				            }
				        }
			    ?>
                <?php
                    if(mysqli_num_rows($platform_run2) > 0)
                        {
                            foreach($platform_run2 as $plat2)
                            {
                ?>
                                <label class="font-weight-bold" for="basic-url">第一小欄位修改</label>
                                <form method="POST" action="products2_fm4ep_fup.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">欄位連結為:</span>
                                    </div>
                                    <input name="platform2_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat2['link']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                    </div>
                                    <input name="platform2_title" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat2['title']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                    </div>
                                    <input name="platform2_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat2['text']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                    </div>
                                    <input name="platform2_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat2['button']; ?>">
                                </div>
                                <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                                </div>
                                </form>
                <?php
				            }
				        }
			    ?>
                <?php
                    if(mysqli_num_rows($platform_run3) > 0)
                        {
                            foreach($platform_run3 as $plat3)
                            {
                ?>
                                <label class="font-weight-bold" for="basic-url">第二小欄位修改</label>
                                <form method="POST" action="products3_fm4ep_fup.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">欄位連結為:</span>
                                    </div>
                                    <input name="platform3_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat3['link']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                    </div>
                                    <input name="platform3_title" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat3['title']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                    </div>
                                    <input name="platform3_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat3['text']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                    </div>
                                    <input name="platform3_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat3['button']; ?>">
                                </div>
                                <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                                </div>
                                </form>
                <?php
				            }
				        }
			    ?>
                <?php
                    if(mysqli_num_rows($platform_run4) > 0)
                        {
                            foreach($platform_run4 as $plat4)
                            {
                ?>
                                <label class="font-weight-bold" for="basic-url">第三小欄位修改</label>
                                <form method="POST" action="products4_fm4ep_fup.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">欄位連結為:</span>
                                    </div>
                                    <input name="platform4_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat4['link']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                    </div>
                                    <input name="platform4_title" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat4['title']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                    </div>
                                    <input name="platform4_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat4['text']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                    </div>
                                    <input name="platform4_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat4['button']; ?>">
                                </div>
                                <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                                </div>
                                </form>
                <?php
				            }
				        }
			    ?>
                <?php
                    if(mysqli_num_rows($platform_run5) > 0)
                        {
                            foreach($platform_run5 as $plat5)
                            {
                ?>
                                <label class="font-weight-bold" for="basic-url">第四小欄位修改</label>
                                <form method="POST" action="products5_fm4ep_fup.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">欄位連結為:</span>
                                    </div>
                                    <input name="platform5_link" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat5['link']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">標題文字為:</span>
                                    </div>
                                    <input name="platform5_title" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat5['title']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">內容文字為:</span>
                                    </div>
                                    <input name="platform5_text" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat5['text']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">按鈕文字為:</span>
                                    </div>
                                    <input name="platform5_button" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $plat5['button']; ?>">
                                </div>
                                <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                                </div>
                                </form>
                <?php
				            }
				        }
			    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-footer" role="tabpanel" aria-labelledby="v-pills-footer-tab">
                <?php
                    if(mysqli_num_rows($footer_run) > 0)
                        {
                            foreach($footer_run as $foot)
                            {
                ?>
                                <label class="font-weight-bold" for="basic-url">聯絡我們修改</label>
                                <form method="POST" action="footer_fm4ep_fup.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">地址文字為:</span>
                                    </div>
                                    <input name="footer_address" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $foot['address']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">電話文字為:</span>
                                    </div>
                                    <input name="footer_tel" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $foot['tel']; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">mail文字為:</span>
                                    </div>
                                    <input name="footer_mail" type="text" size="880" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $foot['mail']; ?>">
                                </div>
                                <div class="mx-auto" style="width: 80px;">
                                    <button type="submit" class="btn btn-danger">更新</button>
                                </div>
                                </form>
                <?php
				            }
				        }
			    ?>
                </div>
            </div>
        </div>
    <!-- </div> -->

    </div>

    <script>
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
        }else{
                    echo '您無權限觀看此頁面!';
                    echo '<meta http-equiv=REFRESH CONTENT=2;url=ji3ul42bj4_login.php>';
        }
        ?>