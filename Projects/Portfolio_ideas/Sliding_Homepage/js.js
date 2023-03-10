const left = document.getElementById("left-side");

const handleMove = e => {
  try {
    // Set the element's width
    left.style.width = `${e.clientX / window.innerWidth * 100}%`;
  } catch (error) {
    // If an error is thrown, log it to the console
    console.error(error);
  }
}

document.onmousemove = e => handleMove(e);
// for mobile devices 
document.ontouchmove = e => handleMove(e.touches[0]); 


