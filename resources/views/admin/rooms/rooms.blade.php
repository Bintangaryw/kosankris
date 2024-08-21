<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Rooms</title>
</head>

<body>
    <x-admin_navbar></x-admin_navbar>

    <main>
        <div class="max-w-[1240px] mx-auto">
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Kamar</th>
                            <th>Penghuni</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr class="hover">
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>
                                <div class="flex justify-end items-center">
                                    <div class="">
                                        <button class="btn btn-sm mr-2">Akses</button>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="my_modal_3.showModal()">Hapus</button>
                                        <dialog id="my_modal_3" class="modal">
                                            <div class="modal-box">
                                                <form method="dialog">
                                                    <button
                                                        class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                                </form>
                                                <h3 class="text-lg font-bold">Hello!</h3>
                                                <p class="py-4">Press ESC key or click on ✕ button to close</p>
                                            </div>
                                        </dialog>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr class="hover">
                            <th>2</th>
                            <td>Hart Hagerty</td>
                            <td>Desktop Support Technician</td>
                            <td>
                                <div class="flex justify-end items-center">
                                    <div class="">
                                        <button class="btn btn-sm mr-2">Akses</button>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="my_modal_3.showModal()">Hapus</button>
                                        <dialog id="my_modal_3" class="modal">
                                            <div class="modal-box">
                                                <form method="dialog">
                                                    <button
                                                        class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                                </form>
                                                <h3 class="text-lg font-bold">Hello!</h3>
                                                <p class="py-4">Press ESC key or click on ✕ button to close</p>
                                            </div>
                                        </dialog>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr class="hover">
                            <th>3</th>
                            <td>Brice Swyre</td>
                            <td>Tax Accountant</td>
                            <td>
                                <div class="flex justify-end items-center">
                                    <div class="">
                                        <button class="btn btn-sm mr-2">Akses</button>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="my_modal_3.showModal()">Hapus</button>
                                        <dialog id="my_modal_3" class="modal">
                                            <div class="modal-box">
                                                <form method="dialog">
                                                    <button
                                                        class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                                </form>
                                                <h3 class="text-lg font-bold">Hello!</h3>
                                                <p class="py-4">Press ESC key or click on ✕ button to close</p>
                                            </div>
                                        </dialog>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>

</html>
