(function () {
    var buttons = document.querySelectorAll('.portfolio-filter-btn');
    var items = document.querySelectorAll('.portfolio-grid-item');

    if (!buttons.length || !items.length) {
        return;
    }

    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var group = btn.getAttribute('data-group');

            buttons.forEach(function (b) {
                b.classList.remove('active');
            });
            btn.classList.add('active');

            items.forEach(function (item) {
                var match = group === 'all' || item.getAttribute('data-group') === group;
                item.style.display = match ? '' : 'none';
            });
        });
    });
})();
