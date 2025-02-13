const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
};

function initializeOverlayScrollbars() {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
                theme: Default.scrollbarTheme,
                autoHide: Default.scrollbarAutoHide,
                clickScroll: Default.scrollbarClickScroll,
            },
        });
    }
}

document.addEventListener('DOMContentLoaded', initializeOverlayScrollbars);
document.addEventListener('livewire:load', initializeOverlayScrollbars);
document.addEventListener('livewire:update', initializeOverlayScrollbars);
document.addEventListener('turbo:load', initializeOverlayScrollbars);
