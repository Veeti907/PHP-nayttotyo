// Hakee kaikki <a> linkit
const links = document.querySelectorAll('a');

links.forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // Estää linkin välittömän avaamisen

    document.body.classList.add('fade-out'); // Lisää fade-out luokan

    const href = this.href; // Tallentaa linkin osoitteen

    // Odottaa 800ms (fade-out keston verran) ja siirtyy linkkiin
    setTimeout(() => {
      window.location.href = href;
    }, 800);
  });
});
