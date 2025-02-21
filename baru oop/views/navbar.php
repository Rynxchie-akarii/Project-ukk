 <style>
    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Navbar Styling */
.navbar {
    background: linear-gradient(90deg, #3498db, #2ecc71); /* Gradient background */
    padding: 15px 15px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 60;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
    border-bottom: 2px solid #fff; /* White bottom border */
}

/* Navbar Container */
.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1500px;
    margin: 0 auto;
}

/* Logo Styling */
.logo {
    color: #fff;
    font-size: 2rem;
    font-weight: 150;
    text-decoration: none;
    letter-spacing: 2px;
    text-transform: uppercase;
    transition: transform 0.3s ease;
}

/* Logo hover effect */
.logo:hover {
    transform: scale(1.1);
}

/* Navbar Links */
.navbar-links {
    display: flex;
    list-style-type: none;
}

.navbar-links li {
    margin: 0 20px;
}

.navbar-links .nav-link {
    color: #fff;
    text-decoration: none;
    font-size: 1.1rem;
    padding: 12px 18px;
    border-radius: 30px;
    transition: all 0.3s ease; /* Smooth transition for hover effects */
    text-transform: capitalize;
}

/* Navbar link hover effect */
.navbar-links .nav-link:hover {
    background-color: #e74c3c; /* Red background on hover */
    transform: translateY(-4px); /* Small upward movement */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Shadow effect */
}

/* Active link styling */
.navbar-links .nav-link.active {
    background-color: #e76f51;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow for active link */
}

/* Toggle button (for mobile view) */
.navbar-toggle {
    display: none;
    cursor: pointer;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 20px;
    width: 25px;
}

.navbar-toggle .bar {
    height: 3px;
    width: 100%;
    background-color: #fff;
    margin: 4px 0;
}

/* Mobile Responsive Styles */
@media (max-width: 768px) {
    .navbar-links {
        display: none;
        width: 100%;
        flex-direction: column;
        text-align: center;
        margin-top: 20px;
    }

    .navbar-links.active {
        display: flex;
    }

    .navbar-links li {
        margin: 15px 0;
        width: 100%;
    }

    .navbar-toggle {
        display: flex;
    }

    .navbar-links .nav-link {
        font-size: 1.3rem;
        padding: 14px;
        border-radius: 0;
        background-color: #3498db; /* Blue background for mobile links */
    }

    .navbar-links .nav-link:hover {
        background-color: #2ecc71; /* Green background on hover */
    }
}

 </style>
 
 <!-- Navbar -->
 <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">Gudang hp samsung</a>
            <link rel="stylesheet" href="../views/style/navbar1.css"> 
            <ul class="navbar-links">
             <li><a href="home.php" class="nav-link">Home</a></li>
            <li><a href="v_add.php" class="nav-link">Tambah data</a></li>
            <li><a href="supplier.php" class="nav-link">Supplier</a></li>
<!-- Menambahkan item Logout -->
<li><a href="logout.php" class="nav-link">Logout</a></li>
            </ul>
            <div class="navbar-toggle" id="navbar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>