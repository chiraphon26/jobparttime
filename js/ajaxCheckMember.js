var xmlHttp;

function checkSsn(){
    xmlHttp = new XMLHttpRequest();
    var member_ssn = document.getElementById("member_ssn").value;
    var url = "checkRegister.php?member_ssn="+member_ssn;
    xmlHttp.open("GET", url);
    xmlHttp.onreadystatechange = getmember_ssn;
    xmlHttp.send();
}

function getmember_ssn(){
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        if(xmlHttp.responseText == "fail"){
            console.log("fail");
         document.getElementById("alert").innerHTML = "You have registered.";  
        }else{
            console.log("pass");
             document.getElementById("alertAll").innerHTML = "";  
        }
    }
}


function checkUsername(){
    xmlHttp = new XMLHttpRequest();
    var member_username = document.getElementById("member_username").value;
    var url = "checkRegister.php?member_username="+member_username;
    xmlHttp.open("GET", url);
    xmlHttp.onreadystatechange = getmember_username;
    xmlHttp.send();
}

function getmember_username(){
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        if(xmlHttp.responseText == "fail"){
            console.log("fail");
         document.getElementById("alertusername").innerHTML = "You have registered.";  
        }else{
            console.log("pass");
             document.getElementById("alertAll").innerHTML = "";  
        }
    }
}








