<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../views/style/home.css">
</head>
<body>

    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">My Dashboard</div>
            <nav>
                <ul>
                    <li><a href="index.php">1</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Welcome to Your Dashboard</h1>
            </header>
            <section class="overview">
                <h2>Overview</h2>
                <div class="stats">
                    <div class="stat-box">
                        <h3>Total Users</h3>
                        <p>1,245</p>
                    </div>
                    <div class="stat-box">
                        <h3>Active Users</h3>
                        <p>895</p>
                    </div>
                    <div class="stat-box">
                        <h3>Revenue</h3>
                        <p>$25,340</p>
                    </div>
                </div>
            </section>

            <section class="recent-activity">
                <h2>Recent Activity</h2>
                <ul>
                    <li>User John Doe logged in</li>
                    <li>User Jane Smith made a purchase</li>
                    <li>User Bob Johnson updated their profile</li>
                </ul>
            </section>
        </main>
    </div>

</body>
</html>
