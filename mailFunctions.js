//mailFunctions.js

//*********************************** MAIL functions**********************************

function cancelRequest() {  //used by the request block
    document.getElementById("requestTag").style.display = "none";
    document.getElementById("messageTag").style.display = "block";
}

function clearMail(mailID) {
    if (document.getElementById(mailID.id).checked == true) {
        var mailRecNo = Right(mailID.id, mailID.id.length - 3);
        
        var sqlCmd = "UPDATE requests SET done = true, date_time_out = NOW() WHERE mail_id = " + mailRecNo + ";";
        xmlHttp = GetXmlHttpObject();
        var url = "update.asp";
        url += "?q=" + sqlCmd;
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);
        toggleRequests();          
    }
}

function mailRequest() {
    if (document.getElementById("mailSender").value == '') {
        document.getElementById("mailSender").value = 'your name here';
        alert('Please enter your name in the "your name here" box and try again.');
    }
    else if (document.getElementById("mailEmail").value == 'NONE'
            || document.getElementById("mailEmail").value == '') {
        document.getElementById("mailEmail").value = 'your email here';
        alert('Please enter your eMail Address in the "your email here" box and try again.');
    }
    else {
        document.getElementById("requestTag").style.display = "none";
        document.getElementById("messageTag").style.display = "block";
        xmlHttp = GetXmlHttpObject();
        var url = "http://www.gluefish.com/nw-ilp/mailsender.asp";
        adrse = document.getElementById("addressee").options[document.getElementById("addressee").selectedIndex].text;
        var mto;
        
        //3/23 changes: 
        // Do the coach lookup, send a copy via mail2coach.asp
        // Do the head coach lookup, send a copy via mail2headcoach.asp
        // If it is an HILF, do the Home Intro Manager lookup, send via mail2hilfmgr.asp
        // take these addressees out of hard coding and do the lookup based on accountability and area.
        
        switch (adrse) {
            case "Scheduler PDX":
                mto = "LouieeTheScheduler@gluefish.com";
                break;
            case "Scheduler SEA":
                mto = "gigifisch@hotmail.com; lou@gluefish.com";
                break;
            case "Scheduler SPO":
                mto = "kayakysue@gmail.com; lou@gluefish.com";
                break;
			case "Schedulers ALL NW":
				mto = "gigifisch@hotmail.com; lou@gluefish.com; kayakysue@gmail.com";
				break;
            //case "NW Home Intro Manager":
            //    mto = "michelle.casey@landmarkeducation.net";
            //    break;
            case "(other)":
                mto = prompt("Enter the target eMail address", "");
                adrse = mto;
                break;
        }
        url += "?adrs=" + mto;
        msg = "(from " + document.getElementById("mailSender").value + "): ";
        msg += "Dear " + adrse + "(" + mto + "), ";
        msg += document.getElementById("requestText").value;
        msg += "[" + document.getElementById("mailEmail").value + "/" + document.getElementById("remoteA").value + "]";
        url += "&rq=" + msg;
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);
        //okay, we sent it.  Now to save it to the database.
        //Build up a sql insert out of it
        var sqlInsert = 'INSERT INTO requests ';
        sqlInsert += '(mto, name, email, request, date_time_in)';
        sqlInsert += ' VALUES ';
        sqlInsert += '("' + adrse + '", "' 
            + document.getElementById("mailSender").value + ' (to: ' + mto + ') ,' 
            + document.getElementById("mailEmail").value + '", "' 
            + document.getElementById("requestText").value + '", NOW());';
        alert (sqlInsert);
        xmlHttp2 = GetXmlHttpObject();
        var url = "update.asp";
        url += "?q=" + sqlInsert;
        xmlHttp2.open("GET", url, true);
        xmlHttp2.send(null);
        if (document.getElementById("viewRequests").checked == true) {
            toggleRequests();
        }
        else {
            alert("Mail Sent to: " + mto + " - " + msg);
        }
    }
}
function sendRequest() {
    document.getElementById("requestTag").style.display = "block";
    putLoginName();
    putLoginEmail();
    document.getElementById("messageTag").style.display = "none";
}

function putLoginName() {
    document.getElementById("mailSender").value = loginName;
}

function putLoginEmail() {
    document.getElementById("mailEmail").value = loginEmail;
}
    
function toggleRequests() {
    if (document.getElementById("viewRequests").checked == true) {
        document.getElementById("requests").style.display = "block";
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            //alert('chrome');
            xmlhttp = new XMLHttpRequest();
        }
        else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //alert('statechanged');
                document.getElementById("requests").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "getrequests.asp", true);
        xmlhttp.send();
    }
    else {
	    document.getElementById("requests").style.display = "none";
	    document.getElementById("messageTag").style.display = "none";
	}
}

