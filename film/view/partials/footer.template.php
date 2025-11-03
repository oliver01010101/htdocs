</div>
</main>

<footer class="page-footer blue darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 m6 s12">
                <h5 class="white-text">Filmklub Kezelő Rendszer</h5>
                <p class="grey-text text-lighten-4">
                    A filmklub vetítések nyilvántartására szolgáló alkalmazás.
                </p>
            </div>
            <div class="col l4 offset-12 s12">
                <h5 class="white-text">Menü</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3" href="index.php?page=home">
                            Főoldal
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="index.php?page=events">
                            Vetítések
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="index.php?page=create">
                            Új vetítés
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    &copy; <?php echo date("Y"); ?> Filmklub
                    <span class="grey-text text-lighten-6">
                        PHP Webalkalmazás
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, []);
    });
</script>


</body>