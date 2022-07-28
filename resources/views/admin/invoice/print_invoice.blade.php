<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Mudrasa Muhammdia Dar-ul-Quran----مدرسہ محمدیہ دارالقرآن</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.9.1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 1%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 1%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #ffffff;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
    </style>
</head>

<body class="bg-white" onload="printPromot()">
<div class="nk-block">
   <div class="invoice invoice-print">
      <div class="invoice-wrap">
         <div class="container register">
            <div class="row">
               <div class="col-md-3 register-left mt-0 mb-0">
                  <img src="{{ asset('assets/images/logo_white.png')}}" style="width:240px; height:260px " alt=""/>
                  <h3>Recipt/ رسید</h3>
                  <h5 class="text-center">مدرسہ محمدیہ دارالقرآن
                  </h5><h6>واہ کینٹ -- HC20 </h6>
               </div>
               <div class="col-md-9 register-right">
                  <div class="invoice-brand text-center pb-0 mb-0">
                     <img src="{{ asset('assets/images/logo1.jpg')}}" srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="">
                  </div>
                  <div style="margin:2%">
                     <div style="float:right"> Date:</div>
                     <div class="mb-1" >S.No:</div>
                     <div> Admission No:</div>
                  </div>

                  <div class="row mx-2 my-3">
                     <div class="col">
                     <lable class="ml-2">Name/نام :</lable>
                        <i>wah</i>
                     </div>
                     <div class="col">
                     <lable class="ml-2">Father's Name/ولديت</lable>
                     <i>wan</i>
                     </div>
                  </div>
                  <div class="row mx-2 my-3">
                     <div class="col">
                     <lable class="ml-2">Class/کلاس</lable>
                     <i>wan</i>
                     </div>
                     <div class="col">
                     <lable class="ml-2">Fees/تعاون</lable>
                     <i>wan</i>
                     </div>
                  </div>
                  <div class="row mx-2 my-3">
                     <div class="col">
                        <lable class="ml-2">Rupees/رقم  </lable>
                        <i>wan</i>
                     </div>
                     <div class="col">
                     <lable class="ml-2">Category/مد</lable>
                     <i>wan</i>
                     </div>
                  </div>
                  <div class="row mx-2 my-3">
                     <div class="col">
                        <lable class="ml-2">Address/پتہ</lable>
                        <i>wan</i>
                        </div>
                  </div>
                  <div class="mx-4" style="float:right">
                     Receiver Sign.</div>
               </div>
            </div>
         </div><!-- .invoice-wrap -->
      </div>
   </div>
</div><!-- .nk-block -->
<script>
   function printPromot() {
      window.print();
   }
</script>
</body>

</html>
