var mini = true;
function toggleSidebar() {
  if (mini) {
    document.getElementById("mySidebar").style.width = "20%";
    document.getElementById("main").style.width = "70%";
    this.mini = false;
  } else {
    document.getElementById("mySidebar").style.width = "5%";
    document.getElementById("main").style.width = "95%";
    this.mini = true;
  }
}
