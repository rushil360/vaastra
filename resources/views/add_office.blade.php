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

        <div class="searchbar">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn" alt="">
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" alt="dp">
            </div>
        </div>

    </header>

<div class="main-container">
<div class="navcontainer">
    <nav class="nav">
        <div class="nav-upper-options">
            <div class="nav-option option2">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                    class="nav-img"
                    alt="dashboard">
                <h3><a href="/"> Dashboard </a></h3>
            </div>

            <div class="option1 nav-option">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                    class="nav-img"
                    alt="articles">
                <h3> Office </a></h3>
            </div>

            <div class="nav-option option3">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                    class="nav-img"
                    alt="report">
                <h3><a href="/vehicle"> Vehicle </a></h3>
            </div>

            <div class="nav-option option4">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                    class="nav-img"
                    alt="master">
                <h3> <a href="/report">Report</a></h3>
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
                <h3><a href="setting">  Settings </a></h3>
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




    <div class="new_supplier-container">
    <form action="{{url('/')}}/add_office" method="post"> 
                    <div class="report-header">
                        <h1 class="recent-Articles">Add New Office </h1>
                    </div>
    @csrf
    <b>
    <br><div class="Abcdef"> Office Name: </div><input type="text" name="office_name" class="input-field"placeholder=""><br><span class="text-danger" >
       
        <br>
   
    <div class="Abcdef">Office Number:</div> <input type="text" name="office_number" class="input-field"placeholder=""><br>
 
    {!! $errors->first('office_number','<p style="color: red;">:message</p>') !!} 
        <br>
  
    <div class="Abcdef">Total number of vehicle allowed:</div><input type="text" name="v_allowed"  class="input-field"placeholder=""><br>

        <br>
  


    <a href="/office"> <input type="button" value="BACK" class="back"></a>
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