<!DOCTYPE html>
<html>
<head>
    <title>CHANGE Admin Panel</title>
  
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <link href = "Humberger.css" rel="stylesheet" >
    
  
</head>
<body>
   <div class="menu-btn">
        <div class="menu-btn__burger"></div> 
   </div>

    <script type="text/javascript">
        const menuBtn = document.querySelector('.menu-btn');
        let menuOpen = false;
        menuBtn.addEventListener('click', ()=>{
            if(!menuOpen){
                menuBtn.classList.add('open');
                menuOpen = true;
            }
            else{
                menuBtn.classList.remove('open');
                menuOpen = false;
            }
        })

    </script>

</body>  
</html>
