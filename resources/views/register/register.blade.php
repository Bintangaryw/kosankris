<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register Kosan Kris</title>
</head>

<body>
    <main>
        <div class="h-screen flex items-center justify-center">
            <div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label mx-auto">
                            <span class="label-text">Nama Lengkap</span>
                        </div>
                        <input type="text" class="input input-bordered input-sm w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label mx-auto">
                            <span class="label-text">Domisili</span>
                        </div>
                        <input type="text" class="input input-bordered input-sm w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label mx-auto">
                            <span class="label-text">Nomor Telepon</span>
                        </div>
                        <input type="text" class="input input-bordered input-sm w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label mx-auto">
                            <span class="label-text">Email</span>
                        </div>
                        <input type="text" class="input input-bordered input-sm w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label mx-auto">
                            <span class="label-text">Password</span>
                        </div>
                        <input type="password" class="input input-bordered input-sm w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label mx-auto">
                            <span class="label-text">Konfirmasi Password</span>
                        </div>
                        <input type="password" class="input input-bordered input-sm w-full max-w-xs" />
                    </label>

                </div>
                <div class=" flex justify-center">
                    <button class="btn">Register</button>
                </div>
            </div>


            <div class="hidden sm:block sm:w-[30%]">
                <img class=" w-[75%] mx-auto" src="{{ asset('build/assets/image/bwlogo-kosankris.png') }}"
                    alt="">
            </div>

        </div>
    </main>
</body>

</html>
