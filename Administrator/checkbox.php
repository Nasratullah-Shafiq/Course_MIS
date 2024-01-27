<?php 

include('./Assets/_Partial Components/Header.php');

?>

<div class="row" id="row">
<!-- BEGIN LEFT SIDE BAR -->
    <div class="left-side-bar">
        <?php include('./Assets/_Partial Components/Navigation.php');?>
    </div>
    <!-- END OF LEFT SIDE BAR DIV-->
    <!-- BEGIN RIGHT SIDE BAR DIV-->
    <div class="right-side-bar">
        <!-- <div class="row" style="background: red;"> -->
            <div calss = "col-md-9">
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Results </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>

<!--====================================================================================================================
    END OF MODAL STUDENT TABLEDIV
======================================================================================================================-->

<!--=============================================================================================================================
    START OF TABLE SHOWING NEWS RESULT
===============================================================================================================================-->
    <div class="col-md-12" id = "Resul_Table">
         <form action="#">
             <h4> Select Your Skills. </h4>

             <div class="selectAll">
                 <input type="checkbox" name="" id="allselect">
                 <label for="allselect"> Select All </label>
             </div>
             <div id="input_field">
                 <input type="checkbox" value="HTML" id="javascript">
                 <label for="HTML"> HTML </label>
             </div>
             <div id="input_field">
                 <input type="checkbox" value="CSS" id="javascript">
                 <label for="HTML"> CSS </label>
             </div>
             <div id="input_field">
                 <input type="checkbox" value="Bootstrap" id="javascript">
                 <label for="HTML"> Bootstrap </label>
             </div>
             <div id="input_field">
                 <input type="checkbox" value="Javascript" id="javascript">
                 <label for="HTML"> Javascript </label>
             </div>
             <div id="input_field">
                 <input type="checkbox" value="Jquery" id="javascript">
                 <label for="HTML"> Jquery </label>
             </div>
             <div id="input_field">
                 <input type="checkbox" value="React" id="javascript">
                 <label for="Javascript"> Javascript </label>
             </div>
             <div id="input_field">
                 <input type="checkbox" value="Node Js" id="javascript">
                 <label for="HTML"> Node Js  </label>
             </div>
         </form>

         <div class="output_field">
            <div class="quantity alert alert-success col-sm-2" role="alert"> </div>
             <div class="quantity"> <span> Number of Skills: </span>0 </div>
             <div class="skills"> <span> Skills: </span></div>
         </div>
    </div>
<script type="text/javascript">
    // Your jQuery code goes here
    var inputs = document.querySelectorAll('#javascript'),
    allSelect = document.querySelector('#allselect'),
    quantity = document.querySelector('.quantity'),
    skills = document.querySelector('.skills'),
    quantityText = "<span>  </span>",
    skillText = "<span> Name of Skills: </span>"


var allCheckboxes = document.querySelectorAll('#javascript');
var totalCheckboxCount = allCheckboxes.length;

// console.log("Total number of checkboxes:", totalCheckboxCount);


    console.log(allSelect);
    console.log(inputs);
let listArray = [];

inputs.forEach(input => {

    allSelect.addEventListener('click', ()=>{
        if(allSelect.checked){
            input.checked = true;
            input.classList.add("checked");

            quantity.innerHTML = quantityText + "All Selected";
        }

        else{
            input.checked = false;
            input.classList.remove("checked");
            quantity.innerHTML = quantityText + "";
        }

        var checked = document.querySelectorAll('.checked');
        // quantity.innerHTML = quantityText + checked.length;

        if(input.checked){
        listArray.push(input.value)
    }
    else{
        listArray = listArray.filter(val => val !== input.value)
    }

    let newUniqueArr = [...new Set(listArray)]//
    skills.innerHTML = skillText + listArray.join(', ')

    })


    input.addEventListener('click', () => {
        input.classList.toggle("checked");
        var checked = document.querySelectorAll('.checked');
        quantity.innerHTML = quantityText + checked.length + " Selected";

        //if input is checked it searches through all check boxes weather all check boxes are checked or not after that if all the check boxes
        //were selected it select all #allselect check box
        if(input.checked){
        listArray.push(input.value)
        if(totalCheckboxCount == checked.length){
           allSelect.checked = true 
           quantity.innerHTML = quantityText + "All Selected";
        }
       
    }
    else{
        listArray = listArray.filter(val => val !== input.value)
        allSelect.checked = false
    }

    let newUniqueArr = [...new Set(listArray)]
    skills.innerHTML = skillText + listArray.join(', ')
    
    });
});


</script>
            
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Your jQuery code goes here
        var $inputs = $('form .input_field input'),
            $allSelect = $('form .selectAll input'),
            $quantity = $('.quantity span'),
            $skills = $('.skills span'),
            quantityText = "<span> Number of Skills: </span>";

        $inputs.on('change', function() {
            $(this).toggleClass("checked");
            var $checked = $('.input_field input:checked');
            $quantity.html(quantityText + $checked.length);

            // Display selected skills
            var selectedSkills = $checked.map(function() {
                return $(this).val();
            }).get().join(', ');

            $skills.html("<span> Skills: </span>" + selectedSkills);
        });

        $allSelect.on('change', function() {
            $inputs.prop('checked', $(this).prop('checked')).trigger('change');
        });
    });
</script> -->











<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Grammer-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Grammer Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST">
                      <div class="form-group" style="display: none;">
                        <label style="text-align: left;" class="col-sm-3 control-label"> ID </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Grammer_ID" id="Grammer_ID" placeholder="ID">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Question </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Grammer_Question" id="Grammer_Question" placeholder="Question">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">1st Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Grammer_First_Answer" id="Grammer_First_Answer" placeholder="First Answer">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">2nd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Grammer_Second_Answer" id="Grammer_Second_Answer" placeholder="Second Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">3rd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Grammer_Third_Answer" id="Grammer_Third_Answer" placeholder="Third Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> 4rth Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Grammer_Fourth_Answer" id="Grammer_Fourth_Answer" placeholder="Fourth Answer">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="Right Answer" style="text-align: left;" class="col-sm-3 control-label"> Right Answer </label>
                            <div class="col-sm-9">
                              <select name="Grammer_Right_Answer" id = "Grammer_Right_Answer" class="form-control">
                                   <option value="1"> First Answer </option>
                                   <option value="2"> Second Answer </option>
                                   <option value="3"> Third Answer </option>
                                   <option value="4"> Fourth Answer </option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                              <select name="Grammer_Book_ID" id = "Grammer_Book_ID" class="form-control">
                              <?php 
                               $Book = $mtd->getBook();
                                  if(!$Book){
                                      echo "<option value=''> Book Table Not Exist! </option>";
                                    }
                                    else{
                                      if($Book->num_rows>0){
                                        while ($result = $Book->fetch_assoc()) { ?>
                                              
                                        <option value="<?php echo $result['Book_ID']; ?>"> 
                                        <?php echo $result['Book_Name']; ?> </option>
                                <?php 
                              }}
                                      else{
                                        echo "<option value=''> Book Table is empty </option>"; 
                                        }} ?>
                              </select>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-grammer" id = "btn-edit-grammer" > Update </button>
                        <span id="span-valid" class="span-validation"></span>
                        </div>

                    </div>
                    
                </form>
          
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
            </div>
        </div>
    </div>
</div> 

<!-- End of Div show Edit News -->

	</div>
<!-- END OF RIGHT SIDE BAR DIV -->
</div>
<!-- END OF ROW DIV -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<?php 
include('./Assets/_Partial Components/Footer.php');
?>