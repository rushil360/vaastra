<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
				initial-scale=1.0">
    <title>SPACE ODYSSEY</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <script src="https://kit.fontawesome.com/47c5ac0669.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- for header part -->
    <header>

<div class="logosec">
    <div class="logo">SPACE ODYSSEY</div>
    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
        class="icn menuicn" id="menuicn" alt="menu-icon">
</div>

<div class="dropdown">
    <div class="name-div" onclick="myFunction()">
        
        <div class="dp">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                class="dpicn" alt="dp">
        </div>
        <span class="my-name">{{ Auth::user()->name }}</span>
    </div>
    <div id="myDropdown" class="dropdown-content">
        <form method="POST" action="{{ route('logout') }}">
            @csrf                    
            <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out')}} </a>
        </form>                
    </div>
</div>

</header>

<div class="main-container">
<div class="navcontainer">
    <nav class="nav">
        <div class="nav-upper-options">
            <div class="nav-option option3">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                    class="nav-img"
                    alt="dashboard">
                <h3><a href="/"> Dashboard </a></h3>
            </div>

            <div class="option2 nav-option">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                    class="nav-img"
                    alt="articles">
                <h3><a href="/office">Office</a></h3>
            </div>

            <div class="nav-option option1">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                    class="nav-img"
                    alt="report">
                <h3>Vehicle</a></h3>
            </div>

            <div class="nav-option option4">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                    class="nav-img"
                    alt="master">
                <h3> <a href="/master">Master</a></h3>
            </div>

            <div class="nav-option option5">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                    class="nav-img"
                    alt="blog">
                <h3> Profile</h3>
            </div>

            <div class="nav-option option6">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                    class="nav-img"
                    alt="settings">
                <h3><a href="/setting"> Settings  </a></h3>
            </div>

            <!-- <div class="nav-option logout">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                    class="nav-img"
                    alt="logout">
                <h3>Logout</h3>
            </div> -->

        </div>
    </nav>
</div>
<div class="main">

    <div class="searchbar2">
        <input type="text"
            name=""
            id=""
            placeholder="Search">
        <div class="searchbtn">
        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                class="icn srchicn"
                alt="search-button">
        </div>
    </div>



    <form action="{{url('/')}}/add_vehicle" method="post"> 

    <div class="new_supplier-container">

                    <div class="report-header">
                        <h1 class="recent-Articles">Add New Vehicle </h1>
                    </div>
    @csrf
    <b>
    <!-- <div class="Abcdef"><b> Office Name:</b>
                        <select class="drop_select" name="office_name">
                        @foreach ($dataa as $daataa)
                            <option>{{$daataa->office_name}}</option>
                            @endforeach 
                        </select>
                    </div>  -->
                    <br>
                     <div class="Abcdef"><b> Office Number:</b>
                        <select class="drop_select2" name="office_id">
                        @foreach ($dataa as $key => $daataa)
                            <option value="{{$daataa->id}}">{{$daataa->office_number}}</option>
                         @endforeach  
                        </select>
  <br><br>
   Vehicle Number :</div><input type="text" name="vehicle_number"  class="input-field"placeholder=""><br>
   
   {!! $errors->first('vehicle_number','<p style="color: red;">:message</p>') !!}      

        <br>
  


        <div class="Abcdef">RFID/FASTAG:</div><input type="text" name="fastag"  class="input-field"placeholder=""><br>
        {!! $errors->first('fastag','<p style="color: red;">:message</p>') !!}      

        

        <br>






    <a href="vehicle"> <input type="button" value="BACK" class="back"></a>
    <input type="submit" value="CREATE" class="submit"> 
  


</form>


    </div>
				</div>
			</div>
		</div>
	</div>
    <script src="./index.js"></script>
</body>
</html>