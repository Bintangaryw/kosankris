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
            <div class="">
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Nama Lengkap</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Domisili</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Nomor Telepon</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Email</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <div class="py-2">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Password</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                    <p class="text-xs text-center py-5">Don't have any account? Register <a class="underline"
                            href="/">here.</a></p>
                </div>
                <div class=" flex justify-center pt-11">
                    <button class="btn">Login</button>
                </div>

            </div>
        </div>
    </main>
</body>

</html>
