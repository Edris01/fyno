<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand text-light px-3" href="index.html">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a>
    </div>

    <div class="header-right px-3">
        <a href="./messages.php" class="btn btn-primary">Messages</a></a>
        <a href="../login.php" class="btn btn-danger mx-2">Log Out</a>
    </div>
</nav>