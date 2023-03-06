jQuery(document).ready(function($) {
    $('.filters-panel').on('change', 'select', function () {
        $(this).closest('form').submit();
        return false;
    });
});