<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My ID card</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:white;
    display:flex;
    justify-content:center;
    padding:12px;
    margin-top:30px;
}

/* PAGE */

.page{
    width:100%;
    max-width:340px;
}

/* TITLE */

.title{
    color:#0a596d;
    font-size:14px;
    margin-bottom:20px;
    margin-left:10px;
    display:flex;
    justify-content:space-between;
    width:325px;
}

/* CARD */

.card{

    width:100%;
    background:white;
    border:3px solid #ef2340;
    border-radius:5px;
    position:relative;
    overflow:visible;
    padding:5px;
}

/* INFO BUTTON */

.info-btn{

    position:relative;

    top:-25px;
    left:269px;

    width:40px;
    height:40px;

    border-radius:50%;

    border:2px solid #375f7e;

    background:#f5f7f7;

    color:#0a596d;

    font-size:18px;

    font-weight:bold;

    cursor:pointer;

    z-index:999;

    animation:pulse 1.5s infinite;
}

@keyframes pulse{

    0%{
        transform:scale(1);
    }

    50%{
        transform:scale(1.15);
    }

    100%{
        transform:scale(1);
    }
}

/* MAIN */

.main{
    display:flex;
    align-items:stretch;
}

/* LEFT SIDE */

.left{

    width:72px;

    background:#c71b33;

    display:flex;

    justify-content:center;

    align-items:center;

    height:305px;

    margin-top:-40px;
}

.left span{

    transform:rotate(-90deg);

    color:white;

    font-size:30px;

    font-weight:bold;

    letter-spacing:2px;
}

/* RIGHT SIDE */

.right{

    flex:1;

    display:flex;

    flex-direction:column;

    align-items:center;

    padding:10px;
}

/* LOGO */

.logo{

    width:100%;

    display:flex;

    justify-content:center;

    margin-top:-32px;
}

.logo img{
    width:210px;
    object-fit:contain;
}

/* PHOTO */

.photo-area{

    width:100%;

    display:flex;

    justify-content:center;

    margin-top:18px;
}

.photo{

    width:210px;
    height:210px;

    object-fit:cover;
}

/* DETAILS */

.details{

    width:100%;

    display:flex;

    flex-direction:column;

    align-items:center;

    margin-top:12px;
}

/* YEAR + NAME */

.row{

    width:100%;

    display:flex;

    margin-top:-12px;

    gap:20px;
}

.year{
    font-size:20px;
    margin-left:10px;
}

.name{
    font-size:18px;
    font-weight:500;
    margin-left:30px;
}

/* BARCODE */

svg{
    width:200px;
    height:80px;
}

/* STUDENT NUMBER */

.student-number{

    text-align:center;

    font-size:16px;
}

/* TRANSIT */

.transit{

    margin-bottom:10px;

    display:flex;

    justify-content:center;
}

.transit img{
    width:210px;
    object-fit:contain;
}

/* POPUP */

.popup{

    position:absolute;

    top:55px;
    right:5px;

    width:290px;

    background:white;

    border:2px solid #0a596d;

    border-radius:10px;

    padding:15px;

    box-shadow:0 4px 12px rgba(0,0,0,0.15);

    display:none;

    z-index:9999;

    font-size:14px;

    line-height:1.8;
}

.popup-title{
    color:#0a596d;
    font-weight:bold;
    margin-bottom:8px;
}

.info-row{
    display:flex;
    justify-content:space-between;
    margin-top:4px;
}

/* MOBILE */

@media(max-width:360px){

    .left{
        width:65px;
    }

    .left span{
        font-size:26px;
    }

    .logo img{
        width:190px;
    }

    .photo{
        width:190px;
        height:190px;
    }

    .transit img{
        width:190px;
    }

    .name{
        font-size:15px;
    }
}

</style>

</head>

<body>

<div class="page">

    <!-- TITLE -->
    <div class="title">

        <span style="font-size:15px;">&lt;</span>

        <span style="font-size:15px;font-weight:500;">
            My ID card
        </span>

        <span style="font-size:25px;">
            &#8942;
        </span>

    </div>

    <!-- CARD -->
    <div class="card">

        <!-- INFO BUTTON -->
        <button class="info-btn" onclick="toggleInfo()">
            i
        </button>

        <!-- POPUP -->
        <div class="popup" id="popup">

            <div class="popup-title">
                Issued By
            </div>

            <div>
                Canadore College
            </div>

            <br>

            <div class="popup-title">
                Digital ID Validity Period
            </div>

            <div class="info-row">
                <span>Issued on</span>
                <span id="issued"></span>
            </div>

            <div class="info-row">
                <span>Downloaded</span>
                <span id="downloaded"></span>
            </div>

            <div class="info-row">
                <span>Refreshes on</span>
                <span id="refresh"></span>
            </div>

        </div>

        <!-- MAIN -->
        <div class="main">

            <!-- LEFT -->
            <div class="left">

                <span>STUDENT</span>

            </div>

            <!-- RIGHT -->
            <div class="right">

                <!-- LOGO -->
                <div class="logo">

                    <img src="images.png">

                </div>

                <!-- PHOTO -->
                <div class="photo-area">

                    <img src="stu.jpg" class="photo">

                </div>

            </div>

        </div>

        <!-- DETAILS -->
        <div class="details">

            <div class="row">

                <div class="year">
                    25/26
                </div>

                <div class="name">
                    Rohith Nadukuda
                </div>

            </div>

            <!-- BARCODE -->
            <div class="barcode">

                <svg id="barcode"></svg>

            </div>

            <!-- STUDENT NUMBER -->
            <div class="student-number">

                A00197596

            </div>

            <!-- TRANSIT -->
            <div class="transit">

                <img src="download.jpg">

            </div>

        </div>

    </div>

</div>

<!-- BARCODE -->
<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.6/dist/JsBarcode.all.min.js"></script>

<script>

/* FORMAT DATE TIME */

function formatDateTime(date){

    let options = {

        month:'short',
        day:'numeric',
        year:'numeric',
        hour:'numeric',
        minute:'2-digit'

    };

    return date.toLocaleString('en-US', options);
}

/* CURRENT DATE */

const now = new Date();

/* ISSUED DATE (TODAY MORNING) */

const issuedDate = new Date();

issuedDate.setHours(8);
issuedDate.setMinutes(47);
issuedDate.setSeconds(0);

/* DOWNLOADED TIME */

const downloadedDate = new Date();

/* REFRESH DATE (NEXT 7 DAYS) */

const refreshDate = new Date();

refreshDate.setDate(refreshDate.getDate() + 7);

/* SHOW DATES */

document.getElementById("issued").innerHTML =
formatDateTime(issuedDate);

document.getElementById("downloaded").innerHTML =
formatDateTime(downloadedDate);

document.getElementById("refresh").innerHTML =
formatDateTime(refreshDate);

/* POPUP */

function toggleInfo(){

    let popup = document.getElementById("popup");

    if(popup.style.display === "block"){

        popup.style.display = "none";

    }else{

        popup.style.display = "block";
    }
}

/* BARCODE */

JsBarcode("#barcode", "A00197596", {

    format:"CODE128",

    lineColor:"#000",

    width:1.7,

    height:55,

    displayValue:false

});

</script>

</body>
</html>