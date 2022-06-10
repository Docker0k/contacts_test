<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).on('click', '.ajax-request', function (e) {
        e.preventDefault();
        var $el = $(e.target),
            contactUrl = $el.closest('.ajax-request').attr('href');

        $.magnificPopup.open({
            items: {
                src: contactUrl,
                type: 'ajax'
            },
            mainClass: 'popup-ajax'
        });
    });

    $(document).on('submit', '.ajax-form.number-form', function (e) {
        e.preventDefault();

        var $el = $(e.target),
            url = $el.attr('action');
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data: $el.serialize(),
            success: function (data) {
                $.magnificPopup.close();
                $('.numbers').html(data.html)
            }
        })
    });

    $(document).on('click', '.close', function () {
        $(this).closest('.callout').slideUp(350);
    });

    $(document).on('click', '.ajax-action', function (e) {
        e.preventDefault();
        var $el = $(e.target),
            url = $el.closest('.ajax-action').attr('href');
        console.log($el, url);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'JSON',
            data: $el.serialize(),
            success: function (data) {
                $.magnificPopup.close();
                $('.numbers').html(data.html)
            }
        })
    });
</script>
