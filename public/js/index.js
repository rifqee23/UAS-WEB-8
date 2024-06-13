const members = document.getElementById("members");
const trainers = document.getElementById("trainers");
const schedule = document.getElementById("schedule");
const book = document.getElementById("book");

const btnMembers = document.getElementById("btnMembers");
const btnTrainers = document.getElementById("btnTrainers");
const btnSchedule = document.getElementById("btnSchedule");
const btnBook = document.getElementById("btnBook");

const toggleIcons = document.getElementById("toggleIcon");
const toggleIconTrainer = document.getElementById("toggleIconTrainer");
const toggleIconSchedule = document.getElementById("toggleIconSchedule");
const toggleIconBook = document.getElementById("toggleIconBook");


const memberList = document.getElementById("memberList");
const dashboard = document.getElementById("dashboard");
const memberAdd = document.getElementById("memberAdd");
const memberEdit = document.getElementById("memberEdit");

const trainerList = document.getElementById("trainerList");
const trainerAdd = document.getElementById("trainerAdd");
const trainerEdit = document.getElementById("trainerEdit");

const scheduleList = document.getElementById("scheduleList");
const scheduleAdd = document.getElementById("scheduleAdd");
const scheduleEdit = document.getElementById("scheduleEdit");

const bookList = document.getElementById("bookList");
const bookAdd = document.getElementById("bookAdd");



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
    
    if(!schedule.classList.contains("hidden")) {
        schedule.classList.add("hidden");
        toggleIconSchedule.src = "asset/icons/up.svg";

    }

    if(!book.classList.contains("hidden")) {
        book.classList.add("hidden");
        toggleIconBook.src = "asset/icons/up.svg";
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

    if(!schedule.classList.contains("hidden")) {
        schedule.classList.add("hidden");
        toggleIconSchedule.src = "asset/icons/up.svg";

    }

    if(!book.classList.contains("hidden")) {
        book.classList.add("hidden");
        toggleIconBook.src = "asset/icons/up.svg";
    }
});

btnSchedule.addEventListener("click", () => {
    schedule.classList.toggle("hidden");

    if (schedule.classList.contains("hidden")) {
        toggleIconSchedule.src = "asset/icons/up.svg";
    } else {
        toggleIconSchedule.src = "asset/icons/down.svg";
    }

    if(!trainers.classList.contains("hidden")) {
        trainers.classList.add("hidden");
        toggleIconTrainer.src = "asset/icons/up.svg";

    }

    if(!members.classList.contains("hidden")) {
        members.classList.add("hidden");
        toggleIcon.src = "asset/icons/up.svg";

    }

    if(!book.classList.contains("hidden")) {
        book.classList.add("hidden");
        toggleIconBook.src = "asset/icons/up.svg";
    }
    
});

btnBook.addEventListener("click", () => {
    book.classList.toggle("hidden");

    if (book.classList.contains("hidden")) {
        toggleIconBook.src = "asset/icons/up.svg";
    } else {
        toggleIconBook.src = "asset/icons/down.svg";
    }

    if(!trainers.classList.contains("hidden")) {
        trainers.classList.add("hidden");
        toggleIconTrainer.src = "asset/icons/up.svg";

    }

    if(!members.classList.contains("hidden")) {
        members.classList.add("hidden");
        toggleIcon.src = "asset/icons/up.svg";

    }

    if(!schedule.classList.contains("hidden")) {
        schedule.classList.add("hidden");
        toggleIconSchedule.src = "asset/icons/up.svg";

    }
})



memberList.addEventListener("click", () => {
    window.location.href = "member.php";
})

trainerList.addEventListener("click", () => {
    window.location.href = "trainer.php";
})

scheduleList.addEventListener("click", () => {
    window.location.href = "schedule.php";
})

bookList.addEventListener("click", () => {
    window.location.href = "book.php";
})

dashboard.addEventListener('click', () => {
    window.location.href = "index.php";
})

memberAdd.addEventListener("click", () => {
    window.location.href = "memberAdd.php";
})

scheduleAdd.addEventListener("click", () => {
    window.location.href = "scheduleAdd.php";
})

bookAdd.addEventListener("click", () => {
    window.location.href = "bookAdd.php";
})

trainerEdit.addEventListener("click", () => {
    window.location.href = "trainerEdit.php?id=1";
    // console.log("hi");
})
trainerAdd.addEventListener("click", () => {
    window.location.href = "trainerAdd.php";
})

scheduleEdit.addEventListener("click", () => {
    window.location.href = "scheduleEdit.php?id=1";
})




memberEdit.addEventListener("click", () => {
    window.location.href = "memberEdit.php?id=1";
})
