// Efek Fade-In Saat Scroll
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll("main img, main p, article");
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-in");
            }
        });
    }, {
        threshold: 0.1
    });

    elements.forEach(el => observer.observe(el));
});
window.addEventListener('scroll', () => {
    document.querySelectorAll('main img').forEach((img, index) => {
        let speed = 0.2 + index * 0.05;
        img.style.transform = `translateY(${window.scrollY * speed}px)`;
    });
});
// Jam Digital di Header
function updateClock() {
    const clock = document.getElementById("clock");
    const now = new Date();
    clock.textContent = now.toLocaleTimeString();
}
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggle-theme");
    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("light-theme");
    });
});


setInterval(updateClock, 1000);
