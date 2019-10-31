<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <span class="navbar-brand">MindKeeper</span>
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
