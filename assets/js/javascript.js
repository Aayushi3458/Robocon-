function signUpAdminValidation() {
    let fname = document.getElementById('a_fname').value.trim();
    let lname = document.getElementById('a_lname').value.trim();
    let password = document.getElementById('a_password').value.trim();

    if(checkName(fname,'First') &&
    checkName(lname,'Last') &&
    checkPassword(password)) {
         return true;
    }
    return false;
}
function isLoggedIn(id, Iam, prePath = "", isActive=null) {
    if (Iam) {
          if(Iam === "Admin") {
            if((id == "ETranscript" || id == "ETranscript-card") && isActive == "1") {
                window.location = prePath + 'etranscript/admin/home.php';
            } else if((id == "NoDues" || id == "NoDues-card") && isActive == "1") {
                window.location = prePath + "nodues/admin/home.php";
            }
            else if((id == "LOR" || id == "LOR-card") && isActive == "1") {
                window.location = prePath + "lor/admin/home.php";
            } else if((id == "Bonafide" || id == "Bonafide-card") && isActive == "1") {
                window.location = prePath + "bonafide/admin/home.php";
            } else {
                if(isActive == "2") {
                    alert("Your Request for this project is still under review, \nplease wait you'll get notified soon.");
                } else {
                    alert("Currently you are not active for this project, \nif you want to work then please request first.");
                }
            }
        }
    }
    else {  
        // first alert user
        // then animate loginButton
        alert("Kindly Log In First!");
    }
}
function checkPassword(enteredPassword){
    var reg = /((?=.*\d)(?=.*[A-Z])(?=.*\W).{8,})/;
    let msg = 'Password should contain \n\t-Minimum eight characters,\n\t-at least one uppercase letter\n\t-one lowercase letter\n\t-one number and one special character\n';
    
    if (reg.test(enteredPassword) == false) {
        alert(msg);
        return false;
    }  
    return true;
}
function checkName(enteredName,namePrefix) {
    var reg = /^[a-zA-Z]{3,}$/;
    var msg = namePrefix + ' Name can only contain alphabets and must have length greater then 2 characters!\n';

    if (reg.test(enteredName) == false) {
        alert(msg);
        return false;
    }
    return true;
}

