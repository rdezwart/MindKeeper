<nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="margin-bottom: 30px;">
    <span class="navbar-brand">MindKeeper</span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php" id="index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list.php" id="list">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="journal.php" id="journal">Journal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account.php" id="account">Account</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    var pages = ["index", "list", "journal", "account"];

    for (let i = 0; i < pages.length; i++) {
        if (window.location.href.indexOf(pages[i]) > -1) {
            var sel = "#" + pages[i];

            $(sel).addClass("active");
        }
    }

</script>
