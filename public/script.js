
function setSelectedValue(objSelect1, valueToSet) {
    var selectObj = document.getElementById(objSelect1);
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].value == valueToSet) {
            selectObj.options[i].selected = true;
            return;
        }
    }
}