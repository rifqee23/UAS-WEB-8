<?php
include './../database.php';
$keyword = $_GET["keyword"];
$query = "SELECT m.name, s.className,b.bookingId, b.bookingDate, m.phone, b.status FROM gym_booking b JOIN member m ON b.memberId = m.idMember JOIN gym_class_schedule s ON b.classId = s.classId WHERE name LIKE '%$keyword%'";
$result = mysqli_query($conn, $query);
?>


<table class="w-full mt-4 text-left table-auto min-w-max">
    <thead>
        <tr>
            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Member
                </p>
            </th>
            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Class Name
                </p>
            </th>
            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Booking Date
                </p>
            </th>

            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Contact
                </p>
            </th>

            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Status
                </p>
            </th>

            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Action
                </p>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">

                            <div class="flex flex-col">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    <?= $row["name"] ?>
                                </p>

                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex flex-col">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                <?= $row["className"] ?>
                            </p>

                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="w-max">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                <?= $row["bookingDate"] ?>
                            </p>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="w-max">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                <?= $row["phone"] ?>
                            </p>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            <?= $row["status"] ?>
                        </p>
                    </td>



                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">
                            <div>
                                <?php if ($row["status"] == 'booked') : ?>
                                    <form method="POST" action="crud/updateStatus.php" class="confirmation-form">
                                        <input type="hidden" name="id" value="<?php echo $row['bookingId']; ?>">
                                        <input type="hidden" name="status" value="completed">
                                        <button class="px-4 py-1 text-white bg-green-400 rounded-xl hover:bg-green-600">Done</button>
                                    </form>
                                <?php endif; ?>
                            </div> <a href="crud/deleteBookProses.php?id=<?= $row["bookingId"] ?>" onclick="return confirm('yakin?');" class="" type="button">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-filled" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z" stroke-width="0" fill="currentColor" />
                                    <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" stroke-width="0" fill="currentColor" />
                                </svg>

                            </a>

                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </tbody>
</table>