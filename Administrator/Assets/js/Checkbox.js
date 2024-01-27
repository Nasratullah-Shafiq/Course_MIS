var checkboxes = document.querySelectorAll("input[type= 'checkbox']");
console.log(checkboxes);
function checkAll(myCheckbox){
    if(myCheckbox.checked == true){
        checkboxes.forEach(function(checkbox){
            checkbox.checked = true;           
        })
    }
    else{
        checkboxes.forEach(function(checkbox){
            checkbox.checked = false;
        })
    }
}