const members = document.getElementById("members");
const btnMembers = document.getElementById("btnMembers");
const toggleIcons = document.getElementById("toggleIcon");

btnMembers.addEventListener("click", () => {
    members.classList.toggle("hidden"); 
    
        if (members.classList.contains("hidden")) {
            toggleIcons.src = "asset/icons/up.svg";
        } else {
            toggleIcons.src = "asset/icons/down.svg";
        }
    
})