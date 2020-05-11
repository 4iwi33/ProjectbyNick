<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        <a href="/ProjectbyNick/index.php">TravelStates.com</a>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="btn btn-outline-primary p-2" href="/ProjectbyNick/index.php">Home</a>
        <a class="btn btn-outline-primary p-2" href="/ProjectbyNick/about.php">Registration</a>
    </nav>
    <?php
    if ($_COOKIE['user'] == 'Yes') : // если куки["юзер"] равно Yes то вывести Kabint
    ?>
        <a class="btn btn-outline-danger" href="/ProjectbyNick/kabinet.php">Log out</a>
    <?php else : ?>
        <!-- иначе вывести Sign in -->
        <a class="btn btn-outline-success" href="/ProjectbyNick/kabinet.php">Sign in</a>
    <?php endif; ?>
</div>