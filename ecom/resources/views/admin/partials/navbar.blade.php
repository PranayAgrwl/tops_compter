<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Your Brand</a>  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">  
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<php echo $GLOBALS['baseurl'] ?>">Home</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/about') }}">About</a>
                </li>
            </ul>
            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/logout.php">Logout</a>
                </li>
            </ul> -->
        </div>
    </div>
</nav>
