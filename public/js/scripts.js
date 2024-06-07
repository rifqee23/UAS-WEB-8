const members = document.getElementById("members");
const btnMembers = document.getElementById("btnMembers");
const toggleIcons = document.getElementById("toggleIcon");
const memberList = document.getElementById("memberList");
const dashboard = document.getElementById("dashboard");
const memberAdd = document.getElementById("memberAdd");
const memberEdit = document.getElementById("memberEdit");

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

memberAdd.addEventListener("click", () => {
    window.location.href = "memberAdd.php";
})

memberEdit.addEventListener("click", () => {
    window.location.href = "memberEdit.php?id=1";
})

const datepicker = flatpickr("#date-picker", {});
 
  // styling the date picker
  const calendarContainer = datepicker.calendarContainer;
  const calendarMonthNav = datepicker.monthNav;
  const calendarNextMonthNav = datepicker.nextMonthNav;
  const calendarPrevMonthNav = datepicker.prevMonthNav;
  const calendarDaysContainer = datepicker.daysContainer;
 
  calendarContainer.className = `${calendarContainer.className} bg-white p-4 border border-blue-gray-50 rounded-lg shadow-lg shadow-blue-gray-500/10 font-sans text-sm font-normal text-blue-gray-500 focus:outline-none break-words whitespace-normal`;
 
  calendarMonthNav.className = `${calendarMonthNav.className} flex items-center justify-between mb-4 [&>div.flatpickr-month]:-translate-y-3`;
 
  calendarNextMonthNav.className = `${calendarNextMonthNav.className} absolute !top-2.5 !right-1.5 h-6 w-6 bg-transparent hover:bg-blue-gray-50 !p-1 rounded-md transition-colors duration-300`;
 
  calendarPrevMonthNav.className = `${calendarPrevMonthNav.className} absolute !top-2.5 !left-1.5 h-6 w-6 bg-transparent hover:bg-blue-gray-50 !p-1 rounded-md transition-colors duration-300`;
 
  calendarDaysContainer.className = `${calendarDaysContainer.className} [&_span.flatpickr-day]:!rounded-md [&_span.flatpickr-day.selected]:!bg-gray-900 [&_span.flatpickr-day.selected]:!border-gray-900`;