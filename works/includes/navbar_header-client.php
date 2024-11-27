<link rel="stylesheet" href="../assets/css/designheader.css"> 
<header>
    <div class="header-container">
        <!-- Logo and Title -->
        <div class="logo">
            <img src="../assets/img/logo.png" alt="Logo" class="logo">
            <h1>JHEC's Fur Fam</h1>
        </div>
        
        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="../client/homepage.php">HOME</a></li>
                <li><a href="../client/aboutus.php">ABOUT US</a></li>
                <li><a href="../client/adoptintro.php">ADOPT</a></li>
        
                <!-- Logout Form -->
                <li>
                    <form action="../controller/logout.php" method="POST" style="display: inline;">
                        <div class="SVG"><button type="submit" name="logout" style="background: none; border: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        </button></div>
                        
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>
