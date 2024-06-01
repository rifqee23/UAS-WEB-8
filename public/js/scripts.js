const members = document.getElementById("members");
const btnMembers = document.getElementById("btnMembers");
const toggleIcons = document.getElementById("toggleIcon");
const memberList = document.getElementById("memberList");
const dashboard = document.getElementById("dashboard");

btnMembers.addEventListener("click", () => {
    members.classList.toggle("hidden"); 
    
        if (members.classList.contains("hidden")) {
            toggleIcons.src = "asset/icons/up.svg";
        } else {
            toggleIcons.src = "asset/icons/down.svg";
        }
    
})

memberList.addEventListener("click", () => {
    window.location.href = "member.php";
})

dashboard.addEventListener('click', () => {
    window.location.href = "index.php";
})

