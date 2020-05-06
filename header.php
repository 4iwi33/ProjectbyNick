<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">TravelStates.com</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Главная</a>
        <a class="p-2 text-dark" href="#">Контакты</a>
        <a class="p-2 text-dark" href="#">Контакты</a>
        <a class="p-2 text-dark" href="#">Контакты</a>
        <a class="p-2 text-dark" href="#">Контакты</a>
        <a class="p-2 text-dark" href="#">Контакты</a>
    </nav>
    <?php
    if ($_COOKIE['user'] == 'Yes') : // если куки["юзер"] равно Yes то вывести Kabint
    ?>
        <a class="btn btn-outline-primary" href="http://4iwi/ProjectbyNick/kabinet.php">Kabinet</a>
    <?php else : ?>
        <!-- иначе вывести Sign in -->
        <a class="btn btn-outline-primary" href="http://4iwi/ProjectbyNick/kabinet.php">Sign in</a>
    <?php endif; ?>
</div>