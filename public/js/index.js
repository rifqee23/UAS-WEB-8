const members = document.getElementById("members");
const trainers = document.getElementById("trainers");
const btnMembers = document.getElementById("btnMembers");
const btnTrainers = document.getElementById("btnTrainers");
const toggleIcons = document.getElementById("toggleIcon");
const toggleIconTrainer = document.getElementById("toggleIconTrainer");
const memberList = document.getElementById("memberList");
const dashboard = document.getElementById("dashboard");
const memberAdd = document.getElementById("memberAdd");
const memberEdit = document.getElementById("memberEdit");

const trainerList = document.getElementById("trainerList");
const trainerAdd = document.getElementById("trainerAdd");
const trainerEdit = document.getElementById("trainerEdit");

btnMembers.addEventListener("click", () => {
    members.classList.toggle("hidden"); 
        if (members.classList.contains("hidden")) {
            toggleIcons.src = "asset/icons/up.svg";
        } else {
            toggleIcons.src = "asset/icons/down.svg";
        }

        if(!trainers.classList.contains("hidden")) {
            trainers.classList.add("hidden");
            toggleIconTrainer.src = "asset/icons/up.svg";

        }
    
})

btnTrainers.addEventListener("click", () => {
    trainers.classList.toggle("hidden"); 
    
        if (trainers.classList.contains("hidden")) {
            toggleIconTrainer.src = "asset/icons/up.svg";
        } else {
            toggleIconTrainer.src = "asset/icons/down.svg";
        }

        if(!members.classList.contains("hidden")) {
            members.classList.add("hidden");
            toggleIcon.src = "asset/icons/up.svg";

        }
});

memberList.addEventListener("click", () => {
    window.location.href = "member.php";
})

trainerList.addEventListener("click", () => {
    window.location.href = "trainer.php";
})

dashboard.addEventListener('click', () => {
    window.location.href = "index.php";
})

memberAdd.addEventListener("click", () => {
    window.location.href = "memberAdd.php";
})

trainerEdit.addEventListener("click", () => {
    window.location.href = "trainerEdit.php?id=1";
    // console.log("hi");
})
trainerAdd.addEventListener("click", () => {
    window.location.href = "trainerAdd.php";
})



memberEdit.addEventListener("click", () => {
    window.location.href = "memberEdit.php?id=1";
})
