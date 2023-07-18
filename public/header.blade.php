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