document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('darkMode') === 'true') {
        document.body.classList.add('dark-mode');
        document.getElementById('theme-switch').checked = true;
    }
    
 
     const categoryButtons = document.querySelectorAll('.project-categories button');
     const projectsContainer = document.querySelector('.projects-container');
 
     categoryButtons.forEach(button => {
         button.addEventListener('click', function() {
             const category = this.getAttribute('data-category');
             fetch(`projects_${category}.json`)
             .then(response => response.json())
             .then(data => {
                 projectsContainer.innerHTML = ''; 
                 data.forEach(project => {
                     const projectHTML = `
                         <div class="project-item">
                             <img src="${project.image}" alt="${project.title}">
                             <h3>${project.title}</h3>
                             <p>${project.description}</p>
                         </div>
                     `;
                     projectsContainer.innerHTML += projectHTML;
                 });
             })
             .catch(error => console.error('Failed to load project data:', error));
         });
    });
   

   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
       anchor.addEventListener('click', function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          target.scrollIntoView({ behavior: 'smooth' });
       });
    });
});
 
 
 
 document.getElementById('theme-switch').addEventListener('change', function() {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
 });
 
 
