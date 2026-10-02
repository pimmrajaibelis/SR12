document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('#siteHeader');
    const menuButton = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const searchButtons = document.querySelectorAll('[data-search-toggle]');
    const searchPanel = document.querySelector('[data-search-panel]');
    const scroller = document.querySelector('[data-product-scroller]');
    const left = document.querySelector('[data-scroll-left]');
    const right = document.querySelector('[data-scroll-right]');

    window.addEventListener('scroll', () => {
        header?.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });

    menuButton?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('open');
        menuButton.innerHTML = mobileMenu?.classList.contains('open')
            ? '<i data-lucide="x"></i>'
            : '<i data-lucide="menu"></i>';
        if (window.lucide) lucide.createIcons();
    });

    mobileMenu?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => mobileMenu.classList.remove('open'));
    });

    searchButtons.forEach(button => {
        button.addEventListener('click', () => {
            searchPanel?.classList.toggle('open');
            if (searchPanel?.classList.contains('open')) {
                searchPanel.querySelector('input')?.focus();
            }
        });
    });

    left?.addEventListener('click', () => {
        scroller?.scrollBy({ left: -360, behavior: 'smooth' });
    });

    right?.addEventListener('click', () => {
        scroller?.scrollBy({ left: 360, behavior: 'smooth' });
    });

    let isDown = false;
    let startX;
    let scrollLeft;

    scroller?.addEventListener('mousedown', e => {
        isDown = true;
        scroller.classList.add('dragging');
        startX = e.pageX - scroller.offsetLeft;
        scrollLeft = scroller.scrollLeft;
    });

    ['mouseleave', 'mouseup'].forEach(event => {
        scroller?.addEventListener(event, () => {
            isDown = false;
            scroller.classList.remove('dragging');
        });
    });

    scroller?.addEventListener('mousemove', e => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scroller.offsetLeft;
        scroller.scrollLeft = scrollLeft - (x - startX) * 1.4;
    });

    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', e => {
            if (form.classList.contains('newsletter') || form.classList.contains('newsletter-form')) {
                e.preventDefault();
            }
        });
    });
});
