<div class="relative flex h-[calc(100vh-2rem)] w-full max-w-[20rem] flex-col rounded-xl bg-white bg-clip-border p-4 text-gray-700 shadow-xl shadow-blue-gray-900/5">
  <div class="p-4 mb-2">
    <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
      MinGym
    </h5>
  </div>
  <nav class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
    <div class="relative block w-full">
      <div role="button" class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
        <button id="dashboard" type="button" class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
          <div class="grid mr-4 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5">
              <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <p class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
            Dashboard
          </p>
        </button>
      </div>
    </div>

    <!-- End Dashboard -->
    <div class="relative block w-full">
      <div role="button" class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
        <button id="btnMembers" type="button" class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 border-b-blue-gray-100 text-blue-gray-700 hover:text-blue-gray-900">
          <div class="grid mr-4 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
              <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
          </div>
          <p class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
            Members
          </p>
          <span class="w-5 ml-4">
            <img id="toggleIcon" src="asset/icons/down.svg" alt="toggleIcon" />
          </span>
        </button>
      </div>
      <div id="members" class="overflow-hidden ">
        <div class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
          <nav class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
            <div role="button" class="flex items-center w-full p-3 leading-tight text-white transition-all bg-blue-500 rounded-lg outline-none ms-9 text-start hover:bg-opacity-80 hover:text-blue-gray-900 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="memberList">
              Member List
            </div>
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-opacity-80 hover:text-blue-gray-900 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="memberAdd">
              Member Add
            </div>
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="memberEdit">
              Member Edit
            </div>
          </nav>
        </div>
      </div>
    </div>

    <!-- End Member -->
    <div class="relative block w-full">
      <div role="button" class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
        <button id="btnTrainers" type="button" class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 border-b-blue-gray-100 text-blue-gray-700 hover:text-blue-gray-900">
          <div class="grid mr-4 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M2 12h1" />
              <path d="M6 8h-2a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h2" />
              <path d="M6 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z" />
              <path d="M9 12h6" />
              <path d="M15 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z" />
              <path d="M18 8h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2" />
              <path d="M22 12h-1" />
            </svg>
          </div>
          <p class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
            Trainers
          </p>
          <span class="w-5 ml-4">
            <img id="toggleIconTrainer" src="asset/icons/up.svg" alt="toggleIcon" />
          </span>
        </button>
      </div>
      <div id="trainers" class="hidden overflow-hidden">
        <div class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
          <nav class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="trainerList">
              Member List
            </div>
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="trainerAdd">
              Member Add
            </div>
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="trainerEdit">
              Member Edit
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- End Trainer -->
    <div class="relative block w-full">
      <div role="button" class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
        <button id="btnSchedule" type="button" class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 border-b-blue-gray-100 text-blue-gray-700 hover:text-blue-gray-900">
          <div class="grid mr-4 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-due">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
              <path d="M16 3v4" />
              <path d="M8 3v4" />
              <path d="M4 11h16" />
              <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
            </svg>
          </div>
          <p class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
            Schedule
          </p>
          <span class="w-5 ml-4">
            <img id="toggleIconSchedule" src="asset/icons/up.svg" alt="toggleIcon" />
          </span>
        </button>
      </div>
      <div id="schedule" class="hidden overflow-hidden">
        <div class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
          <nav class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="scheduleList">
              Schedule List
            </div>
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="scheduleAdd">
              Schedule Add
            </div>
            <?php
            include "database.php";
            $sql = "SELECT classId FROM gym_class_schedule";
            $rs = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_array($rs)) :
            ?>
              <a href="scheduleEdit.php?id=<?= $row["classId"] ?>" role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="">
                Schedule Edit
              </a>
            <?php endif; ?>
          </nav>
        </div>
      </div>
    </div>
    <!-- End Schedule -->
    <div class="relative block w-full">
      <div role="button" class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
        <button id="btnBook" type="button" class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 border-b-blue-gray-100 text-blue-gray-700 hover:text-blue-gray-900">
          <div class="grid mr-4 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
              <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
              <path d="M3 6l0 13" />
              <path d="M12 6l0 13" />
              <path d="M21 6l0 13" />
            </svg>
          </div>
          <p class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
            Book
          </p>
          <span class="w-5 ml-4">
            <img id="toggleIconBook" src="asset/icons/up.svg" alt="toggleIcon" />
          </span>
        </button>
      </div>
      <div id="book" class="hidden overflow-hidden">
        <div class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
          <nav class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="bookList">
              Book List
            </div>
            <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none ms-9 text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900" id="bookAdd">
              Book Add
            </div>

          </nav>
        </div>
      </div>
    </div>
    <!-- End Book -->
    <hr class="my-2 border-blue-gray-50" />
    <a href="logout.php" role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-cyan-100 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
      <div class="grid mr-4 place-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5">
          <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
        </svg>
      </div>
      Log Out
    </a>
  </nav>
</div>