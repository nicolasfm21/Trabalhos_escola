function showSection(sectionId) {
    
    // Oculta todas as seções
    var sections = document.querySelectorAll('.section');
    sections.forEach(function(section) {
    section.classList.remove('active');
    
    });
    
    // Mostra a seção selecionada
    var selectedSection = document.getElementById(sectionId);
    selectedSection.classList.add('active');
  
}