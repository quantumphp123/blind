
<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">

  <title>Invoice</title>

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<style>
.meinhaus-header-bottom
{
    width: 21cm;
    height: 22.7cm;
    margin-top: 7cm!important;
    margin: 0 auto;
    border: 15px solid #1b5fa0;
    margin-left: -12px!important;
}
    body
    {
      font-family: 'Open Sans', sans-serif;
      width: 21cm;
      height: 22.7cm;
      margin: 0 auto;
      border: 15px solid #1b5fa0;
    }
/*new-css*/
.meinhuas-content
{
  padding-left: 40px;
}
.meinhuas-content h4{font-weight: 600;font-size: 17px;}
.meinhuas-content h5{font-weight: 600;font-size: 17px;width: 50%;float: left;}
.meinhuas-content h4 span,.meinhuas-content h5 span{padding-left: 10px;}
.meinhuas-content.estimate
{
  padding-right: 40px;
}
.meinhuas-content ul{padding-left: 0;}
.book p
{
    padding-left: 40px;
    padding-right: 40px;
    text-align: justify;
}
/*new-css*/
    h1

    {

        font-size: 30px;

    text-transform: uppercase;

    font-weight: 500;

    }

    p{font-size: 15px;color: #000;margin-top: 15px;margin-bottom: 15px;}

    hr{border-top: 1px solid #ccc;}

    body button

    {

        display: block;

        margin: 15px auto;

        background: #1b5fa0;

        border-radius: 200px;

        padding: 5px 20px;

        border: none;

    }
    body button a{font-weight: bold;text-transform: uppercase;}
    p.description-box

        {

            text-align: justify;

            width: 50%;
            padding-left: 20px;
            float: left;

        }
        .meinhuas-content p span{padding-left: 10px;}
.meinhuas-content p
{    
    float: left;
    text-align: left!important;
    width: 35%;
    font-weight: 700!important;
    color: #2d292a!important;
    font-size: 13px!important;
}
    body button a{color: #fff;text-decoration: none;
    }

    a:hover, a:focus{color: #fff;text-decoration: none;}

    p a{color: #136acd;font-weight: 600;}

    p a:hover{color: #136acd;}

    .invoice {width: 950px;padding-top: 50px;margin: 0 auto;text-align: center;}

    .meinhaus-header .meinhuas-content {width: 100%;float: none;}
    .meinhaus-header h1{text-align: center;color:#1d5e96;font-weight: bold;padding-top: 30px;}
    .meinhaus-header p{text-align: center;font-weight: bold;font-size: 17px;}
    .meinhaus-header .meinhuas-content img{width: 30%;}

    .estimate h1,.estimate p{text-align: right!important;}

    .meinhaus-header .meinhuas-content p{font-weight: 700;}

    .estimate p{font-weight: normal!important;}

    .meinhuas-content ul li{list-style: none;margin-bottom: 5px;}

    .estimate ul{float: right;padding-right: 0px;}/*padding-right: 30px;*/

    .estimate ul li span{}

    .estimate ul li b{}

    .table{width: 100%;border: 1px solid rgb(51 51 51 / 20%);

    border-spacing: 0;}

    thead tr{background:#541a1a;}

    thead tr th{text-align: left;color: #fff;padding: 10px 15px;}

    tbody tr td{padding: 10px 15px;}

    .hst{font-weight: normal;}

    .table-two{border: none;}

    .table-two{float: right;width: 41%;margin-top: 5px;}

    .table-two tbody tr th{text-align: right;}

    .table-two tbody tr td,.table-two tbody tr th{border-bottom: 1px solid rgb(51 51 51 / 20%)}

    .div-table{height: 300px;}

    .book img{width: 20%;margin: 0 auto;display: block;}

    .book h4{text-align: center;margin-bottom: 0;margin-top: -10px;}



    @media(max-width:1024px)

    {

    

    .table-two{width: 48%;}

    }

    @media(max-width:414px)

    {

       .main-section{width: auto;}
  
       .book p

        {

         font-size: 13px!important;

         text-align: justify!important;

        }

    }

    /* .main-section{width: 860px;margin: 0 auto; padding: 30px 0px;} */

</style>

<body>
    <div style="margin-left:52%;">
        <button id="genHB2" style="border-radius:10px;padding:10px;background-color:#e74c3c;"><a onclick="generatePDF()" href="javascript:;">Download as PDF</a></button>
    </div>
<section class="main-section" id="invoice" style="margin-top:0px;">

<div class="meinhaus-header">

  
      <h1>MeinHause Professional</h1>
      <button id="genHB"><a href="javascript:void(0)">Professional Your Record</a></button>
      <p>Fill in Capital Letters</p>




</div>

<div class="meinhaus-header">

    <div class="meinhuas-content">

      <h5>Name: <span>Eric</span></h5>
      <h5>Gender: <span>MALE</span></h5>
      <h4>ID (For Office use only)</h4>
      <h4>Address: <span>7<sup>th</sup> Tower</span></h4>
      <h4>Skill: <span>Carpentry</span></h4>
      <h4>Price: <span>1000</span></h4>
      <h5>Date of Birth: <span>26-03-08</span></h5>
      <h5>Blood Group: <span>A</span></h5>
      <h4>Address: <span>New York</span></h4>
      <h4>E-mail ID: </h4>
      <h5>Phone No: (Home):<span>+91 - <sup> </span></h5>
      <h5>Phone No: (Address):<span>+91 - <sup> </span></h5>
      <h4>Name of Skill(s) in the school: </h4>
      <h5>1. Applience Repair</h5>
      <h5>Costs: 3000<sup></sup><span></span></h5>
      <h5>2. ------------</h5>
      <h5>Costs: 3000 <span>------------</span></h5>

      <p>Date: <span>03 March 2020</span></p>
      <p>Pro's Signature: <span> </span></p>
      <p>Place: <span>New York</span></p>
      <p>Pro's Name: <span>S. Haider</span></p>
    </div>



</div>




</section>


<section class="main-section" id="invoice" style="margin-top:0px;">


<div class="meinhaus-header meinhaus-header-bottom">
    <div class="meinhaus-header">
        <div style="margin-left:52%;">
            <button id="genHB3" style="border-radius:10px;padding:10px;background-color:#e74c3c;"><a onclick="generatePDF()" href="javascript:;">Download as PDF</a></button>
        </div>
        <h1>MeinHause Professional</h1>
        <button id="genHB4"><a href="javascript:void(0)">Professional Your Record</a></button>
        <p>Fill in Capital Letters</p>
  
  </div>

<div class="meinhuas-content">
  <h5>Name: <span>Eric</span></h5>
  <h5>Gender:   
    <input type="checkbox" id="male" name="male" value="male">
    <label for="male"> Male</label>
    <input type="checkbox" id="female" name="female" value="female">
    <label for="male"> Female</label>
  </h5>
  <h4>ID (For Office use only)</h4>
  <h4>Address: <span>7<sup>th</sup> Tower</span></h4>
  <h4>Skill: <span>Carpentry</span></h4>
  <h4>Price: <span>1000</span></h4>
  <h5>Date of Birth: <span>26-03-08</span></h5>
  <h5>Blood Group: <span>A</span></h5>
  <h4>Address: <span>New York</span></h4>
  <h4>E-mail ID: </h4>
  <h5>Phone No: (Home):<span>+91 - <sup> </span></h5>
  <h5>Phone No: (Address):<span>+91 - <sup> </span></h5>
  <h4>Name of Skill(s) in the school: </h4>
  <h5>1. Applience Repair</h5>
  <h5>Costs: 3000<sup></sup><span></span></h5>
  <h5>2. ------------</h5>
  <h5>Costs: 3000 <span>------------</span></h5>

  <p>Date: <span>03 March 2020</span></p>
  <p>Pro's Signature: <span> </span></p>
  <p>Place: <span>New York</span></p>
  <p>Pro's Name: <span>S. Haider</span></p>
</div>



</div>




</section>




<script>
    function generatePDF() {
        var a = document.getElementById("genHB3");
        a.setAttribute("style", "visibility:visible;");
    //     var b = document.getElementById("genHB2");
    // 	b.setAttribute("style", "visibility:hidden;");
        const element = document.getElementById('invoice');
        const opt = {
            filename: 'invoice.pdf'
        };
        html2pdf().set(opt).from(element).save();
        window.setTimeout(function(){location.reload()},100)
    }
    </script>

<script>
    function generatePDF() {
        var a = document.getElementById("genHB");
        a.setAttribute("style", "visibility:visible;");
    //     var b = document.getElementById("genHB2");
    // 	b.setAttribute("style", "visibility:hidden;");
        const element = document.getElementById('invoice');
        const opt = {
            filename: 'invoice.pdf'
        };
        html2pdf().set(opt).from(element).save();
        window.setTimeout(function(){location.reload()},100)
    }
    </script>
</body>

</html>