function reload(){
    /* var container = document.getElementById("citation_layout");
    var content = container.innerHTML;
    container.innerHTML = content; 
    
   //this line is to watch the result in console , you can remove it later	
    console.log("Refreshed");  */
    location.reload();
}
window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
    console.log('proute');
})