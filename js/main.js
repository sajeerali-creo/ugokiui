// animation
const sections = document.querySelectorAll(".scroll-section");

const sectionObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    },
    {
        threshold: 0.2,
    }
);

sections.forEach((section) => {
    sectionObserver.observe(section);
});


// steps
const items = document.querySelectorAll(".step-item");

const stepObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {

      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }

    });
  },
  {
    threshold: 0.2,
  }
);

items.forEach((item) => {
  stepObserver.observe(item);
});