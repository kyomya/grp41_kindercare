function chkcontrol(j){
    var sum=0;
    for(var i=0; i<document.assign_form.char[].length; i++){
        if(document.assign_form.(char[])[i].checked){
            sum = sum + parseInt(document.assign_form.char[][i].value);
        }
        document.getElementById("msg").innerHTML="Sum : " + sum;
        if(sum>8){
            sum = sum - parseInt(document.assign_form.char[][j].value);
            document.assign_form.char[][j].checked=false;
            alert("You cant add more than 8 characters");
            return false;
        }
        document.getElementById("msg").innerHTML="Sum: " + sum;
    }
}

