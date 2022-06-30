<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <log class="navbar-brand text-light px-3" >Welcome <strong><?php echo $_SESSION['username']; ?></strong></log>
    </div>

    <div class="header-right px-3">
        <a href="StudentMessages.php" class="btn btn-primary">Messages</a></a>
        <a href="login.php" name="logout" class="btn btn-danger mx-2">Log Out</a>
    </div>
</nav>