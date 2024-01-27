<?php
// include('./Assets/_Partial Components/Header.php');

// $totalReading = $mtd->getTotalReading();
// $totalGrammer = $mtd->getTotalGrammer();
// $totalListening = $mtd->getTotalListening();
// $totalVocabulary = $mtd->getTotalVocabulary();
// $totalNews = $mtd->getTotalNews();
// $totalResearch = $mtd->getTotalResearch();
// $totalUsers = $mtd->getTotalUser();
// $totalStudent = $mtd->getTotalStudent();

?>
<!DOCTYPE html>
<html>
<head>
    <title>CHANGE Admin Panel</title>
  
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href = "../Assets/img/icons/Google_News_64.png" rel="icon" type="image/png" >
    <link href = "https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel=" stylesheet">
    <!-- <link href = "./Assets/CSS/Change_Admin_Panel.css" rel = "Stylesheet" type = "text/css"/> -->
    <link href = "boxicons.min.css" rel="stylesheet" >
    <link href = "boxicons.css" rel="stylesheet" >

   
    <link href = "Assets/CSS/accordion.css" rel="stylesheet" >
    <link href = "boxicons.min.css" rel="stylesheet" >
  
</head>
<body >
    
    <aside>
        <div class = "logo">
            <span class="menu-icon">
                <i class="bx bx-menu"></i>
                <i class="bx bx-x"></i>
            </span>
            <a href="#"><img src="maxion.png" alt="">CODINGCTEATE</a>
        </div>
        <ul class="side-menu">
            <li class="nav-item">
                <a href="#">
                    <i class="bx bxs-dashboard"></i>
                    <span> Dashboard </span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li> <a href="#"> Dashboard_1 </a> </li>
                    <li> <a href="#"> Dashboard_2 </a> </li>
                    <li> <a href="#"> Dashboard_3 </a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bxs-inbox"></i>
                    <span> Inbox </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-cube"></i>
                    <span> Widgets </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-folder-open"></i>
                    <span> Files </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-copy"></i>
                    <span class=""> Icons </span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li> <a href="#"> Fontawsome </a> </li>
                    <li> <a href="#"> Boxicons </a> </li>
                    <li> <a href="#"> IonIcons </a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-lock-alt"></i>
                    <span> Authentication </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bxs-analuse"></i>
                    <span> Analysis </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span> User Pages </span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li> <a href="#"> Administrator </a> </li>
                    <li> <a href="#"> Developer </a> </li>
                    <li> <a href="#"> Customer  </a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bxs-magnte"></i>
                    <span> UI Elements </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-line-char"></i>
                    <span> Charts </span>
                </a>
            </li>
        </ul>
        <ul class="log">
            <li class="nav-item">
                <a href="#">
                    <i class="bx log-out"></i>
                    <span> Log out </span>
                </a>
            </li>
        </ul>
    </aside>
    <section>
        <h1> Components </h1>
        <h2> Sidebar in Javascript </h2>
        <p> Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.
 </p>
    </section>

<script type="text/javascript">
    
$(".nav-item > a").click(function(event){
      event.preventDefault();
  })
      $(document).ready(function(){

      $(".nav-item > a").on("click", function(){
        if($(this).hasClass("active")){
          $(this).removeClass("active");
          $(this).siblings('.sub-menu').slideUp(500);
          $(".nav-item > a .fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-left");
        }
        else{
          $(".nav-item > a .fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-left");
          $(this).find(".fa-angle-left").removeClass("fa-angle-left").addClass("fa-angle-down");
          $(".nav-item > a").removeClass("active");
          $(this).addClass("active");
          $('.sub-menu').slideUp(500);
          $(this).siblings('.sub-menu').slideDown(500);
        }
      });
    });
</script>

    </body>  
</html>
	<script type="text/javascript">
    let aside = document.querySelector('aside');
    let icon = aside.querySelector('.menu-icon');
    let li = aside.getElementsByClassName('nav-item');

    let icons = aside.querySelector('.sub-menu');

icons.onclick=()=>{
    aside.classList.toggle('expand');
}

icon.onclick=()=>{
    aside.classList.toggle('expand');
}
for(let i of li){
    i.onclick = activeLi;
}
function activeLi(){
    const list = Array.from(li);
    list.forEach(e=>e.classList.remove('active'));
    this.classList.add('active');
}





</script>