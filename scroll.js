function scrollToSection(sectionId){
    var section = document.getElementById(sectionId);
    var sectionPosition = section.offsetTop;
    var  scrollOffset = 0;

    window.scrollTo({
        top: sectionPosition - scrollOffset,
        behavior: 'smooth'
    });

}