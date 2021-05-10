<!-- begin::footer -->
<footer>
    <div class="container-fluid">
        <div>© 2021 - <a href="https://nodetent.com/" target="_blank" rel="dofollow">NodeTent</a></div>
        <nav class="nav"><a href="https://codecanyon.net/licenses/standard" class="nav-link">Licenses</a>
        </nav>
    </div>
</footer>
<!-- end::footer -->
</div>
<!-- end::main-content -->
</div>
<!-- end::main -->
<!-- scripts -->
<script src="../../public/assets/js/jquery.min.js"></script>
<script src="../../public/assets/js/bootstrap.min.js"></script>
<script src="../../public/assets/js/app.min.js"></script>
<script src="../../public/assets/js/jquery.dataTables.js"></script>
<script src="../../public/assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../../public/assets/js/dataTables.responsive.min.js"></script>
<script src="../../public/assets/js/responsive.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('table').DataTable({
        order: [],
        paging: true,
        "pageLength": 25,
        "pagingType": "simple",
        "dom": '<"top"flp>rt<"bottom"ip><"clear">',
    });
    console.clear();
});
</script>
</body>