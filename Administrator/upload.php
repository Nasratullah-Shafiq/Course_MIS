<?php 
    if(!empty($_FILES)){
        if(is_uploaded_file($_FILES['Reading_Audio']['tmp_name'])){
            $srcPath = $_FILES['Reading_Audio']['tmp_name'];
            $trgPath = "./Administrator/".$_FILES["Reading_Audio"]['name'];
            if(move_uploaded_file($srcPath, $trgPath)){
                ?>
                <audio src="<?php echo $trgPath; ?>"  controls > </audio>
                <?php
            }
        }
    }
?>