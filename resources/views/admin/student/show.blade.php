<x-app-layout>
    <style>
       #button1
       {
       float:left;
       margin:15px;
       }
       #button2
       {
       float:right;
       border:3px solid transparent;
       height:30%;
       width:30%
       }
       #button3
       {
       border:1px solid transparent;
       padding:5px;
       border-radius:10px;
       width:48%;
       background-color:transparent;
       }
       #button4
       {
       width:40%;
       border-radius:10px;
       border:1px solid transparent;
       background-color:transparent;
       font-size:17px;
       }
       #button5
       {
       font-size:17px;
       border:1px solid lightgrey;
       padding:5px;
       border-radius:10px;
       width:40%;
       background-color:transparent;
       font-family:Arial Rounded MT;
       }
    </style>
    <div class="py-5" style="border:3px solid lightgrey;height:355px; width:530px;
       background-image: url({{asset('/assets/images/hhh.png')}})">
    <br>
    <h5 >
    <div id="button1">
       <h5>
          <input type="text" placeholder="Name Here" id="button3"><br>&nbsp;Student
       </h5>
    </div>
    <div id="button2"><img src="calligraphy.png" alt="Avatar"style="width:100%;height:100%"></div>
    <div style="border:1px solid transparent;height:55%;width:50%;">
       <form method="post">
          <lable style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;Student ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</lable>
          <input type="text" placeholder="0123" id="button4">
          <br>
          <lable style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</lable>
          <input type="text" placeholder="##CS" id="button4">
          <br>
          <lable style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth &nbsp;&nbsp;:</lable>
          <input type="text" placeholder="12/09/2022" id="button4">
          <br>
          <lable style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</lable>
          <input type="text" placeholder="Gender" id="button4">
          <br>
          <lable style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;Phone No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</lable>
          <input type="text" placeholder="03xxxxxxxxx" id="button4">
          <br><br>
          &nbsp;&nbsp;<input type="submit" value="Submitt" id="button5">
          <br><br>
       </form>
    </div>
    <div style="float:left;border:1px solid transparent;height:55%;width:41.5%;">
       <img src="url({{asset('/assets/images/avatar/a-sm.jpg')}})" alt="Avatar" style="width:120px;border-radius:50%;margin:10px" >
    </div>
 </x-app-layout>
