$(document).ready(function() {
    var $table = $('#searchTable');
    $table.DataTable({
        lengthChange: false,
        searching: false,
        language: {
            searchPlaceholder: 'Search...',
            search: ''
        }
    });
    $table.floatThead();
});