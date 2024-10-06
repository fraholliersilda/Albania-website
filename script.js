
const circ = document.querySelectorAll('path'); 

circ.forEach(circle => {
  circle.addEventListener('mouseenter', function(event) {
    const cityName = this.getAttribute('name'); 
    const tooltip = document.getElementById("tooltip");
    
    tooltip.innerHTML = cityName;
    tooltip.style.display = 'block'; 

    tooltip.style.left = event.clientX +  'px'; 
    tooltip.style.top = event.clientY  + 'px';  
  });

  circle.addEventListener('mousemove', function(event) {
    const tooltip = document.getElementById("tooltip");
    
    tooltip.style.left = event.clientX + 'px'; 
    tooltip.style.top = event.clientY + 'px';  
  });

  circle.addEventListener('mouseleave', function() {
    const tooltip = document.getElementById("tooltip");
    tooltip.style.display = 'none'; 
  });
});
