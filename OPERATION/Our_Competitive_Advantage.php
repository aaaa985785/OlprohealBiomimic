<?php
include('../config/tYe87TDinf_db_cn.php'); //這是引入剛剛寫完，用來連線的.php
//抓取footer資料
$footer = "SELECT * FROM footer";
$footer_run = mysqli_query($link, $footer);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />

    <title>歐承健股份有限公司-ourCompetitive</title>
</head>

<body>
    <!-- The overlay -->
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content">
            <a href="../index.php">
                HOME
            </a>
            <button class="dropdown-btn">ABOUTS US
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../ABOUT_US/Our_History&Milestones.php">Our History & Milestones</a>
                <a href="../ABOUT_US/Our_Essence.php">Our Essence</a>
                <a href="../ABOUT_US/Our_Team.php">Our Teams</a>
            </div>
            <button class="dropdown-btn">OPERATION
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="Our_Projection.php">Our Projection</a>
                <a href="Our_Competitive_Advantage.php">Our Competitive Advantage</a>
                <a href="Our_Strategy&Directions.php">Our Strategy & Directions</a>
            </div>
            <button class="dropdown-btn">PRODUCTS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../PRODUCTS/Orthopedic_Medical_devices.php">Orthopedic Medical devices</a>
                <a href="../PRODUCTS/Aesthetic_Medicine&Cell_Therapy.php">Aesthetic medicine & Cell Therapy</a>
            </div>
            <button class="dropdown-btn">NEWS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../NEWS/Events.php">Events</a>
                <a href="../NEWS/Awards.php">Awards</a>
                <a href="../NEWS/Partners&Collaborations.php">Partners & Collaborations</a>
            </div>
            <a href="">CONTACT US</a>



        </div>

    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
    <!-- <span onclick="openNav()">open</span> -->


    <div class="wrap">
        <div class="header">
            <h1><a href="../index.php">Logo</a></h1>
            <a onclick="openNav()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path
                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                </svg></a>
        </div>
        <div class="meun" id="main">

            <ul>
                <li><a href="../index.php">
                        HOME
                    </a></li>
                <div class="dropdown">
                    <li style="cursor: pointer;">
                        <a style="width: 150px;">ABOUTS US</a>
                        <div class="dropdown-content">
                            <a style="width: 160px;" href="../ABOUT_US/Our_History&Milestones.php">Our History &
                                Milestones</a>
                            <a style="width: 160px;" href="../ABOUT_US/Our_Essence.php">Our Essence</a>
                            <a style="width: 160px;" href="../ABOUT_US/Our_Team.php">Our Teams</a>
                    </li>
                </div>
                <!-- <li><a href="OPERATION.Our_Competitive_Advantagehp echo $row['field2']; ?></a></li> -->
                <!-- <li><a href=""><?php echo $row['field3']; ?></a></li> -->
                <div class="dropdown">
                    <li style="cursor: pointer;">
                        <a style="width: 150px;">OPERATION</a>
                        <div class="dropdown-content">
                            <a style="width: 160px;" href="Our_Projection.php">Our Projection</a>
                            <a style="width: 160px;" href="Our_Competitive_Advantage.php">Our Competitive Advantage</a>
                            <a style="width: 160px;" href="Our_Strategy&Directions.php">Our Strategy & Directions</a>
                    </li>
                </div>
                <div class="dropdown">
                    <li style="cursor: pointer;">
                        <a style="width: 150px;">PRODUCTS</a>
                        <div class="dropdown-content">
                            <a style="width: 160px;" href="../PRODUCTS/Orthopedic_Medical_devices.php">Orthopedic
                                Medical
                                devices</a>
                            <a style="width: 160px;" href="../PRODUCTS/Aesthetic_Medicine&Cell_Therapy.php">Aesthetic
                                medicine &
                                Cell Therapy</a>
                    </li>
                </div>
                <div class="dropdown">
                    <li style="cursor: pointer;">
                        <a style="width: 150px;">NEWS</a>
                        <div class="dropdown-content">
                            <!-- <a style="width: 160px;" href="Business_Plan.html"><?php echo $row['field5']; ?></a>
                                    <a style="width: 160px;" href="business_opportunity.html"><?php echo $row['field6']; ?></a>
                                    <a style="width: 160px;" href="core_strength.html"><?php echo $row['field7']; ?></a> -->
                            <a style="width: 160px;" href="../NEWS/Events.php">Events</a>
                            <a style="width: 160px;" href="../NEWS/Awards.php">Awards</a>
                            <a style="width: 160px;" href="../NEWS/Partners&Collaborations.php">Partners &
                                Collaborations</a>
                    </li>
                </div>
                <li><a href="">CONTACT US</a></li>
            </ul>


        </div>

        <div class="business">
            <img src="./Our_Competitive_Advantage/0001.jpg" alt="">
            <img src="./Our_Competitive_Advantage/0002.jpg" alt="">
            <img src="./Our_Competitive_Advantage/0003.jpg" alt="">
            <!-- <img src="OPERATION/Our_Competitive_Advantage/0004.jpg" alt="">
            <img src="OPERATION/Our_Competitive_Advantage/0005.jpg" alt=""> -->


        </div>

        <div class="footer">
            <div class="footerCont">

                <?php
                if (mysqli_num_rows($footer_run) > 0) {
                    foreach ($footer_run as $foot) {
                        ?>

                        <div class="footerLog"><img src="../img/logo1.png" alt=""></div>
                        <div class="information">
                            <p><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-geo-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                </svg>
                                <?php echo $foot['address']; ?>
                            </p>
                            <p><svg style="margin-right: 6px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <?php echo $foot['tel']; ?>
                            </p>
                            <p><svg style="margin-right: 7px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                                <?php echo $foot['mail']; ?>
                            </p>
                        </div>
                        <?php
                    }
                }
                ?>


            </div>
        </div>
        <div class="reserved">
            <div class="down">© 2021 mimicolproheal Co.,Ltd. All rights reserved</div>
        </div>

    </div>
</body>
<script>
    /* Open when someone clicks on the span element */
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }



    // 取得導覽列元素
    const nav = document.querySelector('#main');
    // 取得導覽列元素頂端位置
    const topOfNav = nav.offsetTop;

    function fixNav() {
        // 如果觀景窗頂部位置值大於導覽列頂部就沾黏，反之取消沾黏
        if (window.scrollY >= topOfNav) {
            document.body.style.paddingTop = nav.offsetHeight + 'px';
            document.body.classList.add('fixed-nav');
        } else {
            document.body.style.paddingTop = 0;
            document.body.classList.remove('fixed-nav');
        }
    }

    // 監聽滾動事件
    window.addEventListener('scroll', fixNav);

    //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

</html>