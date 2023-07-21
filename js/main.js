$(window).load(function () {
	$(".loaded").fadeOut();
	$(".preloader").delay(1000).fadeOut("slow");
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});