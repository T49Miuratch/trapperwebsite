document.addEventListener('DOMContentLoaded', () => {
    const hero = document.querySelector('.hero');

    function createBubble() {
        const bubble = document.createElement('div');
        bubble.classList.add('bubble');
        bubble.style.left = Math.random() * 100 + 'vw';
        bubble.style.animationDuration = Math.random() * 10 + 5 + 's';
        bubble.style.animationTimingFunction = 'cubic-bezier(' + Math.random() + ', ' + Math.random() + ', ' + Math.random() + ', ' + Math.random() + ')';
        hero.appendChild(bubble);

        setTimeout(() => {
            bubble.remove();
        }, 15000);
    }

    setInterval(createBubble, 300);
});