
const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".nightday"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      sidebarClose = document.querySelector(".sidebarClose");

      modeToggle.addEventListener("click", () => {
         modeToggle.classList.toggle("active");
         body.classList.toggle("night");
      });

      searchToggle.addEventListener("click", () => {
      searchToggle.classList.toggle("active");
      });

      sidebarOpen.addEventListener("click", () =>{
         nav.classList.add("active");
      });
      body.addEventListener("click", e =>{
        let clickedElm =e.target;
        if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
         nav.classList.remove("active");
        }
      });
