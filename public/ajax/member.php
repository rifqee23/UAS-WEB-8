<?php
include './../database.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM member WHERE name  LIKE '%$keyword%'";
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
                    Phone
                </p>
            </th>
            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Date of Birth
                </p>
            </th>
            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Gender
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
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                    <?= $row["email"] ?>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex flex-col">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                <?= $row["phone"] ?>
                            </p>

                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="w-max">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                <?= $row["tanggal"] ?>
                            </p>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            <?= $row["gender"] ?>
                        </p>
                    </td>

                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            <?= $row["status"] ?>
                        </p>
                    </td>

                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center">
                            <a href="memberEdit.php?id=<?= $row["idMember"] ?>" class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg>

                            </a>

                            <a href="./crud/deleteMemberProses.php?id=<?= $row["idMember"] ?>" onclick="return confirm('yakin?');" class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">

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