<script>

    $(document).ready(function () {
        var pagina_actual = window.location.href.split('/');
        var page = pagina_actual[pagina_actual.length - 1];

        $('.pagination li').removeClass('active');
        $('.pagination a[href="' + page + '"]').parent().addClass('active');
    });

</script>