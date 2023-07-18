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
                    <div class="nav-option option2">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png" class="nav-img" alt="dashboard">
                        <h3><a href="/"> Dashboard </a></h3>
                    </div>

                    <div class="option16 nav-option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="articles">
                        <h3><a href="/office"> Office </a></h3>
                    </div>

                    <div class="nav-option option3">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
                        <h3><a href="/vehicle"> Vehicle </a> </h3>
                    </div>

                    <div class="nav-option option4">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="institution">
                        <h3><a href="/report">Report</a></h3>
                    </div>

                    <div class="nav-option option5">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog">
                        <h3> Profile</h3>
                    </div>

                    <div class="nav-option option1">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="settings">
                        <h3> Settings </a></h3>
                    </div>

                    <!-- <div class="nav-option logout">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
                        <h3>Logout</h3>
                    </div> -->

                </div>
            </nav>
        </div>
        <div class="main">

            <div class="searchbar2">
                <input type="text" name="" id="" placeholder="Search">
                <div class="searchbtn">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-button">
                </div>
            </div>

            <div class="box-container">


                <div class="report-container">
                    <div class="report-header">
                        <h1 class="recent-Articles">Capacity </h1>

                    </div>
                    <div class="report-body">


                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Total Capacity </th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($data as $dataa)
                            <tbody>
                                <tr>
                                <td>{{$dataa->id}}</td>
                                <td>{{$dataa->total_cap}}</td>
                                <td><button class="edit_s">EDIT</button></td>
                                <td><button class="delete_s"> DELETE</button></td>
                            @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <br><br><br>
                        <a href="/setting"> <input type="button" value="BACK" class="back"></a>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>