<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <div class="navbar-brand text-light px-3 welcome int" >
            Welcome <b><?php echo $_SESSION['username']; ?></b>
        </div>
    </div>

    <div class="header-right px-3">
        <form action="server.php" method="get">
            <a href="StudentMessages.php" class="btn btn-primary"><i class="bi bi-envelope"></i> Messages</a></a>
            <button type="submit" name="logout" class="btn btn-danger mx-2">Log Out <i class="bi bi-box-arrow-right"></i></button>
        </form>
    </div>
</nav>