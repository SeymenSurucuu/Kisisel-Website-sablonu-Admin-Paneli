function showInfo(boxId) {
    var infoBox = document.getElementById(boxId);
    infoBox.classList.remove("hidden"); 
  }
  
  function hideInfo(boxId) { 
    var infoBox = document.getElementById(boxId);
    infoBox.classList.add("hidden");
  }